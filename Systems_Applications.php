
<?php
  $page_title = "Systems & Applications - NetWis Lab";
  $page_desc  = "Research on systeam and applications in wireless networks.";
  require __DIR__ . '/partials/header.php';
?>


    <div class="expandable_naration">
      <h2>System and Applications</h2>
      <p>
        Advances in wireless networking technology as well as the development in lower-power devices and ubiquitous Internet
        have brought wireless techniques beyond conventional data communication and information technology. Driven by real-world
        demands, such as manufacturing, health care, and robotics, power surveillance systems, and many emerging applications
        are characterized by time- and data-sensitive applications. We are currently investigating several aspects toward system
        design and applications, which not only provides an opportunity to practice our study and to collaborate with other groups,
        but also offers a platform to have undergraduate students participated in research activities. The emphasis on this research
        is on developing a personal indoor wireless sensor network and applying to wireless network controlled systems.
      </p>

      <h4>PINS: Personal INdoor Sensor Networks</h4>
      <div class="research-content">
        <p>
          An interesting and potential application of wireless sensor networks (WSNs) is visually (or virtually) tracking the person's daily
          interaction with his/her habitat and monitoring the indoor conditions by the help of the sensors embedded throughout the home,
          building, etc. One interesting example of such applications is on Aging Services Technologies with a specific focus on In-Home
          Health Care Solutions for people of ages 65 and older. These applications naturally brings in the need for deployment of an
          "in-home" wireless sensor network. However, indoor environment is not a benign networking environment where several obstacles
          may render wireless communication impossible between node pairs. In addition, due to limited and irregular sensing ranges,
          placement of sensors becomes an important and challenging problem which may impact the accuracy of the collected data.
        </p>

        <img alt="Personal Indoor Sensor Networks" src="<?= asset('img/pins_general.bmp') ?>" />

        <p>
          In the general case, basic parameters for an indoor sensor network can be impacts of node placement (position, orientation),
          transmission range / sensing range ratio, distance of reachability and degree of connectivity. Another interesting topic would be
          investigating how to preserve reliability within an in-home wireless sensor network with updated decisions on parameter settings
          (radio, llc/mac, routing, application etc). This would be very useful since home itself is like a living organism. Furniture might move,
          neighbor might start to emit noise at certain hours, heat can change etc. Or, increased reliability might be needed when an abnormal
          state is detected. To investigate and characterize the properties of Personal INdoor Sensor networks (PINS), we establish an indoor
          sensor testbed. You can find detailed information about the testbed from
          <a href="<?= $BASE_URL ?>sensor_networks.php">here</a>.
        </p>
      </div>

      <h4>STEP2 @ iSpace</h4>
      <div class="research-content">
        <p>
          iSpace is a network based integrated navigation system for unmanned ground vehicles (UGV) developed at the Advanced Diagnosis,
          Automation, and Control (<a href="http://www.adac.ncsu.edu/" target="_blank" rel="noopener">ADAC</a>) Laboratory. It has different modules
          combined together to guide a UGV from one point to another in the space of interest, where the navigation intelligence lies on a controller
          away from the UGV. There are some rules to decide the motion. The UGV has to reach the destination as quickly as possible and avoiding
          the obstacles in the space. The destination point is chosen by the user via any remote computing interface in the world using the iSpace
          GUI on the Internet. The figure below explains iSpace structure.
        </p>

        <div style="text-align: center;">
          <img src="<?= asset('img/ispace-1.JPG') ?>" alt="iSpace" height="500" width="600" style="float:none;"/>
        </div>

        <p>
          STEP2 is integrated with iSpace to provide dynamic and adaptive protection over the wireless part between the controller and robots.
          The whole iSpace flow diagram with the STEP2 is as follows. Presently, iSpace supports only confidentiality feature by using Data
          encryption standard (DES) and 3DES encryption/decryption algorithms.
        </p>

        <h5>Publications</h5>
        <ol>
          <li>
            <p>Rachana Gupta, Avesh K. Agarwal, Wenye Wang, Mo-Yuen Chow,
              "<span>Characterization of data-sensitive wireless distributed networked-control-systems,</span>"
              <span>to appear in the Proc. of the 2007 IEEE/ASME International Conference on Advanced Intelligent Mechatronics.</span>
            </p>
          </li>
          <li>
            <p>Avesh K. Agarwal and Wenye Wang, "<span>DSPM: Dynamic Security Policy Management for Optimizing Performance in Wireless Networks,</span>"
              <span>in the Proc. of IEEE Milcom'06</span>, Washington, D.C. October 2006.
            </p>
          </li>
        </ol>
      </div>
    </div><!-- /.expandable_naration -->

<?php require __DIR__ . '/partials/footer.php'; ?>