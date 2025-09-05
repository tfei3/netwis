<?php
  $page_title = "Activities – NetWIS Lab";
  $page_desc  = "Recent professional activities, service, and roles.";
  require __DIR__ . '/partials/header.php';

  $activities = require __DIR__ . '/data/activities.php';
  usort($activities, function($a, $b) {
    return strcmp($b['date'], $a['date']);
  });
?>

<div id="acts">
  <h2 class="aside--title" data-icon="">Activities</h2>

  <?php if (empty($activities)): ?>
    <p>No activities yet.</p>
  <?php else: ?>
    <?php foreach ($activities as $item): ?>
      <p><?= $item['html'] ?></p>
    <?php endforeach; ?>
  <?php endif; ?>
</div>

<?php require __DIR__ . '/partials/footer.php'; ?>
