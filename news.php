<?php
  // News.php
  $page_title = "News – NetWIS Lab";
  $page_desc  = "Lab News";
  require __DIR__ . '/partials/header.php';

 
  $news = require __DIR__ . '/data/news.php';
  usort($news, function($a, $b) {
    return strcmp($b['date'], $a['date']);
  });
?>

<div id="news">
  <h2 class="aside--title" data-icon="">News</h2>

  <?php if (empty($news)): ?>
    <p>No news yet.</p>
  <?php else: ?>
    <?php foreach ($news as $item): ?>
      <h5><?= htmlspecialchars($item['date_display']) ?></h5>
      <p><?= $item['html'] ?></p>
    <?php endforeach; ?>
  <?php endif; ?>
</div>

<?php require __DIR__ . '/partials/footer.php'; ?>
