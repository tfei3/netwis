
<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css">


    <!-- Latex -->
    <script src="js/vendor/modernizr.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

  </head>

  <body>
    <!-- Header -->
    <div class="header fixed sticky"> 
      <div class="row">
        <div class="large-8 small-8 columns">
          <div class="photo-box"><a href="index.php"><img id="photo-header" src="img/people/wwang3.png"></a>
            <p> <span id="name-prof">Wenye Wang, Ph.D.</span><br>
                <span id="prof">Professor</span><br>
                Electrical and Computer Engineering<br>
                NC State University</p>
            <div class="contact-faculty">
              <ul class="inline-list">
                <li><a><span data-icon="&#xe602;"></span> 919-513-2549</a></li>
                <li><a href="mailto:wwang@ncsu.edu" target="top"><span data-icon="&#xe604;"></span> wwang@ncsu.edu</a></li>
                <li><a href="https://www.google.com/maps/place/Department+of+Electrical+and+Computer+Engineering/@35.772063,-78.674191,17z/data=!3m1!4b1!4m2!3m1!1s0x89acf59e741b1d09:0x3dff08db302f5df4" target="blank"><span data-icon="&#xe603;"></span> 3056 Engineering Building II, 890 Oval Drive</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="large-4 small-4 columns end nav-box">
          <div class="nav">
            <ul>
              <li><a href="index.php" id="logo"><img src="img/logos/netwis2.png" width="100"></a></li>
              <li><a href="people.php" class="<?php if ($section == "people") { echo "navon"; } ?>">People</a></li>
              <li><a href="gallery.php" class="<?php if ($section == "gallery") { echo "navon"; } ?>">Gallery</a></li>
              <li><a href="faqs.php" class="<?php if ($section == "faqs") { echo "navon"; } ?>">FAQs</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <?php include('inc/news-list.php'); ?>
    

    <!-- Left&right panel, content -->
    <div class="row main">
      <div class="large-2 medium-1 small-1 columns left-panel">
        <dl class="menu">
          <dd class="item-menu">
           <a href="research.php" class="<?php if ($section == "research") { echo "on"; } ?>"><div class="circle-text"><div><span class="menu-icon" data-icon="&#xe60b;"><br></span><span class="menu-text">Research</span></div></div></a>
            <ul class="sub-menu">
              <li class="<?php if ($subsection == "research-0") { echo "subon"; } ?>"><a href="research.php">Overview</a></li>
              <li class="<?php if ($subsection == "research-a") { echo "subon"; } ?>"><a href="fundamental_properties.php">Fundamental Properties</a></li>
              <li class="<?php if ($subsection == "research-b") { echo "subon"; } ?>"><a href="design_optimization.php">Design &amp; Optimization</a></li>
              <li class="<?php if ($subsection == "research-c") { echo "subon"; } ?>"><a href="system_application.php">Systems &amp; Applications</a></li>
            </ul>

          </dd>
          <dd class="item-menu">
            <!-- <a href="selected_publications.php" class="<?php if ($section == "publications") { echo "on"; } ?>"><div class="circle-text"><div><span data-icon="&#xe608;"></span><br>Publications</div></div></a> -->
            <a href="publications.php" class="<?php if ($section == "publications") { echo "on"; } ?>"><div class="circle-text"><div><span class="menu-icon" data-icon="&#xe608;"><br></span><span class="menu-text">Publications</span></div></div></a>
          </dd>
          <dd class="item-menu">
            <!-- <a href="downloads.php" class="<?php if ($section == "documents") { echo "on"; } ?>"><div class="circle-text"><div><span data-icon="&#xe60a;"></span><br>Downloads</div></div></a> -->
            <a href="downloads.php" class="<?php if ($section == "downloads") { echo "on"; } ?>"><div class="circle-text"><div><span class="menu-icon" data-icon="&#xe60a;"><br></span><span class="menu-text">Downloads</span></div></div></a>
            <div id="panel3" class="menu-content">
              <ul class="sub-menu">
                <li class="<?php if ($subsection == "downloads-0") { echo "subon"; } ?>"><a href="downloads.php">Overview</a></li>
                <li class="<?php if ($subsection == "downloads-a") { echo "subon"; } ?>"><a href="mobility_model.php">Mobility Model</a></li>
                <li class="<?php if ($subsection == "downloads-b") { echo "subon"; } ?>"><a href="step2.php">STEP2 in WLANs</a></li>
                <li class="<?php if ($subsection == "downloads-c") { echo "subon"; } ?>"><a href="sensor_networks.php">Sensor Networks</a></li>
                <li class="<?php if ($subsection == "downloads-d") { echo "subon"; } ?>"><a href="multihop_networks.php">Multihop Networks</a></li>
              </ul> 
            </div>
          </dd>
          <dd class="item-menu">
            <!-- <a href="projects.php" class="<?php if ($section == "projects") { echo "on"; } ?>"><div class="circle-text"><div><span data-icon="&#xe606;"></span><br>Projects</div></div></a> -->
            <a href="projects.php" class="<?php if ($section == "projects") { echo "on"; } ?>"><div class="circle-text"><div><span class="menu-icon" data-icon="&#xe606;"><br></span><span class="menu-text">Projects</span></div></div></a>
          </dd>
          <dd class="item-menu">
            <!-- <a href="netwis_old/index.php" class="<?php if ($section == "archives") { echo "on"; } ?>"><div class="circle-text"><div><span data-icon="&#xe607;"></span><br>Archives</div></div></a> -->
            <!-- <a href="#" class="<?php if ($section == "archives") { echo "on"; } ?>"><div class="circle-text"><div><span class="menu-icon" data-icon="&#xe607;"><br></span><span class="menu-text">Archives</span></div></div></a> -->
            <a href="netwis_old/index.php" class="<?php if ($section == "archives") { echo "on"; } ?>"><div class="circle-text"><div><span class="menu-icon" data-icon="&#xe607;"><br></span><span class="menu-text">Archives</span></div></div></a> 
          </dd>
        </dl>


        <dl class="logos-left">
          <div>
          <h5  class="aside-title links" data-icon="&#xe613;">Links</h5>
          <div class="logo"><a href="http://www.ece.ncsu.edu/" target="blank" style="font-size: 16px;color:rgb(189,0,0);position:relative;top:15px;right:-5px;"><img src="img/logos/ece.png"></a>&nbsp;
               <a href="http://www.ncsu.edu/" target="blank"><img src="img/logos/wolfpack1.png"></a></div>
          <div class="logo"><a href="http://www.freedm.ncsu.edu/" target="blank"><img src="img/logos/freedm-logo.png"></a></div>
          <div class="logo"><a href="http://scholar.google.com/scholar?hl=en&q=wenye+wang&btnG=&as_sdt=1%2C34&as_sdtp=" target="blank"><img src="img/logos/Google_Scholar_logo.png"></a></div>
          </div>
        </dl>

      </div>
      <div class="small-11 medium-11 large-7 columns content">
        <div class="">
    
