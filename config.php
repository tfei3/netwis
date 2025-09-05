<?php

$SITE_NAME = "NetWIS Lab";

$scheme   = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host     = $_SERVER['HTTP_HOST'] ?? 'localhost';
$basePath = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/')), '/.');
$BASE_URL = $scheme . '://' . $host . ($basePath ? $basePath : '');


function asset(string $path): string {
  global $BASE_URL;
  $path = ltrim($path, '/');
  return $BASE_URL . '/' . $path;
}


function is_active(string $slug, string $current): string {
  return $slug === $current ? 'active' : '';
}
