<?php /* footer.php */ ?>
    
    <div class="footer" id="footer">
      <p class="copyright">
        Copyright ©2022 North Carolina State University.
        All Right Reserved. Questions? Contact
        <a href="mailto:wwang@ncsu.edu">Dr. Wenye Wang</a>
      </p>
    </div>

  </div> <!-- end .main -->

  
  <div class="aside aside--left">
    <div class="menu">
      <!-- Research -->
      <div class="menu__item" style="position: relative;">
        <a href="<?= $BASE_URL ?>/research.php" class="">
          <div class="circle"><div class="circle__content">
            <span class="menu-icon" data-icon=""><br></span><span class="menu-text">Research</span>
          </div></div>
        </a>
        <ul class="sub-menu">
          <li><a href="<?= $BASE_URL ?>/research.php">Overview</a></li>
          <li><a href="<?= $BASE_URL ?>/fundamental_properties.php">Fundamental Properties</a></li>
          <li><a href="<?= $BASE_URL ?>/design_optimization.php">Design &amp; Optimization</a></li>
          <li><a href="<?= $BASE_URL ?>/systems_applications.php">Systems &amp; Applications</a></li>
        </ul>
      </div>

      <!-- Publications -->
      <div class="menu__item" style="position: relative;">
        <a href="<?= $BASE_URL ?>/publications.php" class="">
          <div class="circle"><div class="circle__content">
            <span class="menu-icon" data-icon=""><br></span><span class="menu-text">Publications</span>
          </div></div>
        </a>
      </div>

      <!-- Downloads -->
      <div class="menu__item" style="position: relative;">
        <a href="<?= $BASE_URL ?>/downloads.php" class="">
          <div class="circle"><div class="circle__content">
            <span class="menu-icon" data-icon=""><br></span><span class="menu-text">Downloads</span>
          </div></div>
        </a>
        <ul class="sub-menu">
          <li><a href="<?= $BASE_URL ?>/downloads.php">Overview</a></li>
          <li><a href="<?= $BASE_URL ?>/mobility_model.php">Mobility Model</a></li>
          <li><a href="<?= $BASE_URL ?>/step2_wlans.php">STEP2 in WLANs</a></li>
          <li><a href="<?= $BASE_URL ?>/sensor_networks.php">Sensor Networks</a></li>
          <li><a href="<?= $BASE_URL ?>/multihop_networks.php">Multihop Networks</a></li>
        </ul>
      </div>

      <!-- Projects -->
      <div class="menu__item" style="position: relative;">
        <a href="<?= $BASE_URL ?>/projects.php" class="">
          <div class="circle"><div class="circle__content">
            <span class="menu-icon" data-icon=""><br></span><span class="menu-text">Projects</span>
          </div></div>
        </a>
      </div>
    </div>

        <div class="services">
      <h5 data-icon="" class="aside--title"> Recent Activities</h5>
      <?php
        $activities = require __DIR__ . '/../data/activities.php';
        usort($activities, function($a, $b) { return strcmp($b['date'], $a['date']); });
        $top3 = array_slice($activities, 0, 3);
      ?>
      <?php if (empty($top3)): ?>
        <p>No activities yet.</p>
      <?php else: ?>
        <?php foreach ($top3 as $item): ?>
          <p><?= $item['html'] ?></p>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>

    <a class="more-list" href="<?= $BASE_URL ?>/Activities.php">More activities »</a>


    <div class="side-info side-info--aside">
      <div class="logo">
        <a href="http://www.ece.ncsu.edu/" target="_blank" style="font-size:16px;color:rgb(189,0,0);position:relative;top:15px;right:-5px;">
          <img src="<?= asset('22-07NetWis%20Lab_files/ece.png') ?>">
        </a>&nbsp;
        <a href="http://www.ncsu.edu/" target="_blank">
          <img src="<?= asset('22-07NetWis%20Lab_files/wolfpack1.png') ?>">
        </a>
      </div>
    </div>
  </div> <!-- end .aside--left -->

 
  <div class="aside aside--right">
    <h5 data-icon="" class="aside--title">News</h5>

    <div class="short-news">
      <?php
        
        $news = require __DIR__ . '/../data/news.php';
        usort($news, function($a, $b) { return strcmp($b['date'], $a['date']); });
        $top2 = array_slice($news, 0, 2);
      ?>

      <?php if (empty($top2)): ?>
        <p>No news yet.</p>
      <?php else: ?>
        <?php foreach ($top2 as $item): ?>
          <h6><?= htmlspecialchars($item['date_display']) ?></h6>
          <p><?= $item['html'] ?></p>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>

    <a class="more-list" href="<?= $BASE_URL ?>/News.php">More news »</a>

    <div class="calendar">
      <h5 data-icon="" class="aside--title">Our Calendar</h5>
      <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=5vo32v7mr1i2ovdsng1s1gc5rc%40group.calendar.google.com&amp;color=%23182C57&amp;ctz=America%2FNew_York" style="border-width:0" scrolling="no" width="400" height="300" frameborder="0"></iframe>
    </div>
  </div> <!-- end .aside--right -->
</div> <!-- end .wrapper -->


<script src="<?= asset('2207NetWisLabfiles/jquery.min.js') ?>"></script>
<script src="<?= asset('2207NetWisLabfiles/flowtype.js') ?>"></script>
<script src="<?= asset('2207NetWisLabfiles/jquery.nanogallery.min.js') ?>"></script>
<script src="<?= asset('2207NetWisLabfiles/app.js') ?>"></script>

<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-77082106-1', 'auto');
  ga('send', 'pageview');
</script>


<!-- footer loaded -->
</body>
</html>
