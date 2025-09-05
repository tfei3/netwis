        </div>
        <div class="row" id="footer">
          <div class="medium-8 small-12 columns">
            <div class="logos-footer">
              <a><img src="img/logos/ece_logo_alt.png"></a>
              <a><img src="img/logos/NCSU LOGO.jpg"></a>
              <a><img src="img/logos/freedm-logo.png"></a>
              <a><img src="img/logos/Google_Scholar_logo.png"></a>
            </div>
          </div>
          <div class="large-12 medium-12 small-12">
            <p class="copyright">Copyright &copy;<?php echo date('Y'); ?> North Carolina State University. All Right Reserved.</p>
          </div>
        </div>

      </div>

      <div class="large-3 medium-12 small-12 columns end">
        <div class="panel">
          <h5 data-icon="&#xe609;" class="aside-title">News</h5>
            <div class="short-news">
            <?php 
              
              $position = 0;
              $list_view = "";
              foreach($news as $news_item) { 
                $position = $position + 1;
                if ($position < 4) {
                  $list_view = $list_view . get_list_shortnews($news_item);
                }
              }
              echo $list_view;
            ?>
          
          </div>
          <a id="more-news" href="news.php">More news &#187;</a>
          
          <div class="calendar">
            <h5 data-icon="&#xe618;" class="aside-title">Our Schedule</h5>
            <!-- <iframe id="calendar"  src="https://www.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=300&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=5vo32v7mr1i2ovdsng1s1gc5rc%40group.calendar.google.com&amp;color=%23182C57&amp;ctz=America%2FNew_York" style=" border-width:0 " width="400" height="300" frameborder="0" scrolling="no"></iframe> -->
            <iframe  id="calendar" src="https://www.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=300&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=5vo32v7mr1i2ovdsng1s1gc5rc%40group.calendar.google.com&amp;color=%23182C57&amp;ctz=America%2FNew_York" style=" border-width:0 " width="400" height="300" frameborder="0" scrolling="no"></iframe>
          </div>
        </div>
   
      </div>
   

       
    </div>


    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/fastclick.js"></script>
    <script src="js/foundation.min.js"></script>
    <script type="text/javascript">$(document).foundation();</script>
    <script src="js/FlowType/flowtype.js"></script>

    <script src="js/app.js"></script>
  </body>
</html>