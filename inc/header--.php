
<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <script src="js/vendor/modernizr.js"></script>


    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:400italic,700' rel='stylesheet' type='text/css'>

  </head>

  <body>
    <!-- Header -->
    <!-- ------ -->
    <div class="header fixed sticky">
      <div class="row">
        <div class="large-10 small-10 columns">
          <div class="photo-box"><a href="index.php"><img id="photo-header" src="img/people/wwang3.png"></a>
            <p> <span>Wenye Wang, Ph.D.</span><br>
                Professor<br>
                Electrical and Computer Engineering<br>
                NC State University</p>
            <div class="contact-faculty">
              <ul class="inline-list">
                <li><a><span data-icon="&#xe602;"></span> 919-513-2549</a></li>
                <li><a href="mailto:wwang@ncsu.edu" target="top"><span data-icon="&#xe604;"></span> wwang@ncsu.edu</a></li>
                <li><a href="https://www.google.com/maps/place/Department+of+Electrical+and+Computer+Engineering/@35.772063,-78.674191,17z/data=!3m1!4b1!4m2!3m1!1s0x89acf59e741b1d09:0x3dff08db302f5df4" target="blank"><span data-icon="&#xe603;"></span> 3056 Engineering Building II, 890 Oval Drive</a></li>
              </ul>
            </div>
            <!-- <h4 id="lab-name">Networking of Wireless Information System Lab</h4> -->
          </div>
        </div>

        <div class="large-2 small-2 columns end nav-box">
          <div class="nav">
            <ul>
              <li><a href="index.php" id="logo">Networking of Wireless Information System</a></li>
              <li><a href="people.php" class="<?php if ($section == "people") { echo "navon"; } ?>">People</a></li>
              <li><a href="gallery.php" class="<?php if ($section == "gallery") { echo "navon"; } ?>">Gallery</a></li>
              <li><a href="faqs.php" class="<?php if ($section == "faqs") { echo "navon"; } ?>">FAQs</a></li>
              <li id="more"><a href="#">More</a></li>
            </ul>
          </div>
        </div>
            <!-- <div><img id="logo" src="http://placehold.it/140x70&text=logo"></div> -->
            <!-- <button class="toggle-nav"><span class="grid-toggle" data-icon="&#xe600;"></span></button> -->
      </div>
    </div>

    <?php include('inc/news-list.php'); ?>
    

    <!-- Left&right panel, content -->
    <!-- ------------------------- -->
    <div class="row main">
      <div class="large-2 columns menu">
        <ul>
          <li class="item-menu <?php if ($section == "research") { echo "on"; } ?>">
            <a>
              <div class="circle-text"><div><span data-icon="&#xe60b;"></span><br>Research</div></div>
            </a>
            <ul class="sub-menu">
              <li class="<?php if ($subsection == "research-a") { echo "subon"; } ?>"><a href="fundamental_properties.php">Fundamental Properties</a></li>
              <li class="<?php if ($subsection == "research-b") { echo "subon"; } ?>"><a href="design_optimization.php">Design &amp; Optimization</a></li>
              <li class="<?php if ($subsection == "research-c") { echo "subon"; } ?>"><a href="system_application.php">Systems &amp; Applications</a></li>
            </ul>
          </li>
          <li class="item-menu <?php if ($section == "publications") { echo "on"; } ?>">
            <a href="selected_publications.php">
              <div class="circle-text"><div><span data-icon="&#xe608;"></span><br>Publications</div></div>
            </a>
            <ul class="sub-menu">
              <li class="<?php if ($subsection == "publications-a") { echo "subon"; } ?>"><a href="selected_publications.php">Full Publications</a></li>
              <li class="<?php if ($subsection == "publications-b") { echo "subon"; } ?>"><a href="publications_by_year.php">Publications by Year</a></li>
              <li class="<?php if ($subsection == "publications-c") { echo "subon"; } ?>"><a href="publications_by_area.php">Publications by Area</a></li>
            </ul>  
          </li>
          <li class="item-menu <?php if ($section == "documents") { echo "on"; } ?>">
            <a>
              <div class="circle-text"><div><span data-icon="&#xe60a;"></span><br>Downloads</div></div>
            </a>
            <ul class="sub-menu">
              <li class="<?php if ($subsection == "documents-a") { echo "subon"; } ?>"><a href="mobility_model.php">Mobility Model</a></li>
              <li class="<?php if ($subsection == "documents-b") { echo "subon"; } ?>"><a href="step2.php">STEP2 in WLANs</a></li>
              <li class="<?php if ($subsection == "documents-c") { echo "subon"; } ?>"><a href="sensor_networks.php">Sensor Networks</a></li>
              <li class="<?php if ($subsection == "documents-d") { echo "subon"; } ?>"><a href="multihop_networks.php">Multihop Networks</a></li>
            </ul>          
          </li>
          <li class="item-menu <?php if ($section == "projects") { echo "on"; } ?>">
            <a href="projects.php">
              <div class="circle-text"><div><span data-icon="&#xe606;"></span><br>Projects</div></div></a>
          </li>     
          <li class="item-menu <?php if ($section == "archives") { echo "on"; } ?>">
            <a href="netwis-old/index.php" target="blank">
              <div class="circle-text"><div><span data-icon="&#xe607;"></span><br>Archives</div></div></a>
          </li>
        </ul>

        <div class="logos-left">
          <div>
          <h5  class="aside-title" data-icon="&#xe613;">Links</h5>
          <a href="http://www.ece.ncsu.edu/" target="blank" style="font-size: 16px;color:rgb(189,0,0);position:relative;top:15px;right:-5px;">ECE@</a><a href="http://www.ncsu.edu/" target="blank"><img src="img/logos/wolfpack1.gif"></a>
          <!-- <a  href="http://www.ncsu.edu/" target="blank"><img src="img/logos/NCSU LOGO.jpg"></a> -->
          <a href="http://www.freedm.ncsu.edu/" target="blank"><img src="img/logos/freedm-logo.png"></a>
          <a href="http://scholar.google.com/scholar?hl=en&q=wenye+wang&btnG=&as_sdt=1%2C34&as_sdtp=" target="blank"><img src="img/logos/Google_Scholar_logo.png"></a>
          </div>
        </div>

      </div>
      <div class="large-8 columns content">
        <div >
    