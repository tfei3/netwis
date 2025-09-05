<?php
  // research.php
  $page_title = "Research – NetWIS Lab";
  $page_desc  = "Research overview of NetWIS Lab";
 
  require __DIR__ . '/partials/header.php';
?>

<div id="research-overview">
  <h2>Research</h2>

  <p>
    The Networking of Wireless Information Systems (NetWIS) laboratory led by Dr. Wenye Wang,
    is focused broadly on in-depth understanding, algorithm and protocol design in mobile wireless networks.
    Our vision is that by developing new models, measuring experimental results, and understanding basic
    properties of wireless networks in different circumstances, it is possible to design algorithms, protocols,
    and architectures that enable a wireless network to have robust architecture and topology and high performance
    for diversified applications and large-scale distributed, intelligent systems.
  </p>

  <p>
    Our lab members include undergraduate students who gain their experience in research and prepare for their graduate
    study, and graduate students who aim to make novel contributions to wireless networking area. Currently, we are focused
    on the issues like mobile clouds, vehicle-to-vehicle communications, wireless in the Smart Grid from the perspective of
    network resilience and performance in the presence of failures and abnormality.
  </p>

  <h4>Research Areas</h4>
  <ul>
    <li><a href="<?= $BASE_URL ?>/fundamental_properties.php">Fundamental Properties</a></li>
    <li><a href="<?= $BASE_URL ?>/design_optimization.php">Design and Optimization</a></li>
    <li><a href="<?= $BASE_URL ?>/system_application.php">Systems and Applications</a></li>
  </ul>
</div>

<?php require __DIR__ . '/partials/footer.php'; ?>
