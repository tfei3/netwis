<?php
  $page_title = "NetWIS Lab";
  $page_desc  = "The Networking of Wireless Information Systems, NetWIS, laboratory led by Dr. Wenye Wang...";
  $active     = "home";
  require __DIR__ . '/partials/header.php';
?>

<div id="home">
  <div>
    <p>
      Wenye Wang received her Ph.D. degree from Electrical and Computer Engineering, Georgia Institute of Technology,
      with Dr. Ian F. Akyildiz in Atlanta, Georiga. Her Ph.D. thesis is on location management in heterogeneous
      wireless networks. In Fall 2002, she joined the Department of Electrical and Computer Engineering, NC State
      University, as an assistant professor and has been an associate professor since Fall 2008, and a full professor
      since Fall 2014. Her current research interests include mobile and secure computing, modeling and performance
      analysis of single- and multi-hop wireless networks, network topology and architecture design. Dr. Wang received
      NSF CAREER Award in 2006. She is an ACM member and an IEEE Fellow.
    </p>
  </div>

  <div class="about-netwis">
    <h2 class="with-icon" data-icon="">About NETWIS</h2>
    <p>
      The Networking of Wireless Information Systems, NetWIS, laboratory led by Dr. Wenye Wang, is focused broadly on
      in-depth understanding, algorithm and protocol design in mobile wireless networks. Our vision is that by developing
      new models, measuring experimental results, and understanding basic properties of wireless networks in different
      circumstances, it is possible to design algorithms, protocols, and architectures that enable a wireless network to
      have robust architecture and topology and high performance for diversified applications and large-scale distributed,
      intelligent systems.
    </p>
    <p>
      Our lab members include undergraduate students who gain their experience in research and prepare for their graduate
      study, and graduate students who aim to make novel contributions to wireless networking area. Currently, we are
      focused on the issues like mobile clouds, vehicle-to-vehicle communications, wireless in the Smart Grid from the
      perspective of network resilience and performance in the presence of failures and abnormality.
    </p>
  </div>

  <div class="latest-publications">
    <h2 class="with-icon" data-icon="">Latest Publications</h2>
    <ul>
      <li>
        <a href="https://research.ece.ncsu.edu/netwis2/papers/Competing_Epidemics_on_Graphs_-_Global_Convergence_and_Coexistence.pdf" target="_blank">
          <h3 class="title">Competing Epidemics on Graphs - Global Convergence and Coexistence</h3>
        </a>
        <p>Vishwaraj Doshi, Shailaja Mallick, and Do Young Eun, 2020 IEEE Global Communications Conference (GLOBECOM), IEEE INFOCOM, May 2021</p>
      </li>
      <li>
        <a href="https://research.ece.ncsu.edu/netwis2/papers/21RW-GC.pdf" target="_blank">
          <h3 class="title">Temporal and Spectral Analysis of Spectrum Hole Distributions in an LTE Cell</h3>
        </a>
        <p>Vishwaraj Doshi, Shailaja Mallick, and Do Young Eun, 2021 IEEE GLOBECOM, Madrid, Spain, Dec 2021</p>
      </li>
      <li>
        <a href="" target="_blank">
          <h3 class="title">Opportunistic Spectrum Access: Does Maximizing Throughput Minimize File Transfer Time?</h3>
        </a>
        <p>R. Zou, W. Wang, and H. Dai, WiOpt, Oct. 2021</p>
      </li>
      <li>
        <a href="https://research.ece.ncsu.edu/netwis2/papers/Differential_Privacy_and_Prediction_Uncertainty_of_Gossip_Protocols_in_General_Networks.pdf" target="_blank">
          <h3 class="title">Differential Privacy and Prediction Uncertainty of Gossip Protocols in General Networks</h3>
        </a>
        <p>Y. Huang, R. Jin, and H. Dai, 2020 IEEE GLOBECOM, Taipei, Taiwan, Dec. 2020</p>
      </li>
    </ul>
  </div>
</div> <!-- end #home -->

<?php require __DIR__ . '/partials/footer.php'; ?>
