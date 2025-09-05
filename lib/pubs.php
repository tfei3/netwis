<?php
// lib/pubs.php

function pubs_load_all(): array {
  $pubs = require __DIR__ . '/../data/publications.php';
  foreach ($pubs as &$p) {
    $p['type'] = strtolower(trim($p['type'] ?? ''));
    $p['year'] = (int)($p['year'] ?? 0);
    $area = $p['area'] ?? [];
    $p['area'] = is_array($area) ? $area : array_map('trim', explode(',', (string)$area));
    $p['selected'] = !empty($p['selected']);
  }
  unset($p);
  
  usort($pubs, function($a, $b) {
    if ($a['year'] !== $b['year']) return $b['year'] <=> $a['year'];
    $rank = ['journal'=>0,'conference'=>1,'book'=>2,'workshop'=>3];
    return ($rank[$a['type']] ?? 9) <=> ($rank[$b['type']] ?? 9);
  });
  return $pubs;
}

function pubs_filter(array $pubs, array $opts = []): array {
  return array_values(array_filter($pubs, function($p) use ($opts){
    if (isset($opts['selected']) && (bool)$p['selected'] !== (bool)$opts['selected']) return false;
    if (!empty($opts['type']) && strtolower($p['type']) !== strtolower($opts['type'])) return false;
    if (!empty($opts['year']) && (int)$p['year'] !== (int)$opts['year']) return false;
    if (!empty($opts['area'])) {
      $needle = strtolower($opts['area']);
      $hit = false;
      foreach ($p['area'] as $a) { if (strtolower($a) === $needle) { $hit = true; break; } }
      if (!$hit) return false;
    }
    return true;
  }));
}

function pubs_group_by_year(array $pubs): array {
  $out = [];
  foreach ($pubs as $p) $out[$p['year']][] = $p;
  krsort($out, SORT_NUMERIC);
  return $out;
}

function pubs_group_by_area(array $pubs): array {
  $out = [];
  foreach ($pubs as $p) foreach ($p['area'] as $a) $out[$a][] = $p;
  ksort($out, SORT_NATURAL | SORT_FLAG_CASE);
  return $out;
}


function pubs_render_paragraphs(array $pubs, string $prefix = 'P'): string {
  if (empty($pubs)) return '<div class="publications"><p>No publications yet.</p></div>';
  $html = '<div class="publications">';
  $n = count($pubs);
  foreach ($pubs as $idx => $p) {
   
    $badge = strtoupper($p['type']) === 'JOURNAL' ? 'JP' : (strtoupper($p['type']) === 'CONFERENCE' ? 'CP' : $prefix);
    
    
    $num = preg_replace('~^(?:jp|cp|bp|wp)-?~i', '', (string)$p['id']); 
    $label = $num ? "[{$badge}-{$num}]" : "[{$badge}]";

    $title = htmlspecialchars($p['title']);
    $authors = htmlspecialchars($p['authors']);
    $venue = htmlspecialchars($p['venue']);
    $extra = trim($p['extra'] ?? '');
    $doc = '';
    if (!empty($p['link'])) {
      $url = htmlspecialchars($p['link']);
      $doc = " <span class=\"publication-doc\"><a href=\"{$url}\" target=\"blank\"> pdf </a></span>";
    }
    $extra_html = $extra ? " <span class=\"publication-extra\">{$extra}</span>" : '';

    $html .= "<p>{$label} {$authors}, \"<span class=\"publication-title\">{$title}</span>,\" "
          . "<span class=\"publication-name\">{$venue}</span>.{$extra_html}{$doc}</p>";
  }
  $html .= '</div>';
  return $html;
}
