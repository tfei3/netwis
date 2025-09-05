<?php
  $page_title = "Design and Optimization – NetWIS Lab";
  $page_desc  = "Research on design of protocols, algorithms and optimization for wireless networks.";
  require __DIR__ . '/partials/header.php';
?>

<div class="expandable_naration">
  <h2>Design and Optimization</h2>
  <p>
    Essential to our vision for wireless networking is a focus on the design of protocols, algorithms for wireless networks
    that can optimize resource utilization, network architecture, and system performance. We are pursuing this general goal
    in different network platforms such as cellular networks, multi-hop networks, and low-power sensor networks, through
    studies in several topics.
  </p>

  <h4>Self-organized Sensor Networks</h4>
  <div class="research-content">
    <p>
      Self-organization is a major issue in randomly deployed wireless sensor networks, and should be addressed subject to
      some important constraints such as sensing coverage, reliable data transport, energy efficiency, and fair load distribution.
      We propose to develop self-organization algorithms that can construct a network by sensors themselves without external
      supervision, while preserving coverage and connectivity under stringent energy and reliability constraints.
    </p>

    <img alt="Self-Organized Sensor Network" src="<?= asset('2207NetWisLabfiles/img/sosn.bmp') ?>">

    <p>
      Particularly in dense networks, energy-efficient scheduling is a key factor to extend the functionality and lifetime
      of the network. That means, only the nodes maintaining the functionality stay active whereas others are scheduled to sleep,
      e.g., switching to power saving mode. Therefore, the energy dissipation in sending/receiving and idle time can be significantly
      reduced and by updating the sleeping nodes, network lifetime can be prolonged.
      <!-- 省略解释部分保持原文 -->
    </p>

    <p>
      Notice that many applications developed for wireless sensor networks (WSNs) demand for reliable communication service,
      since majority of these applications are event-critical applications (e.g., fire monitoring, border surveillance, etc.),
      we also investigate the following question: <em>What is the information to be delivered reliably on WSN?</em>
      <!-- 保留原文 -->
    </p>

    <h5>Publications</h5>
    <ol>
      <li>Nurcan Tezcan and Wenye Wang, "ART: An Asymmetric and Reliable Transport Mechanism for Wireless Sensor Networks," in Journal of Wireless Sensor Networks (JSNet), February 2007.</li>
      <li>Nurcan Tezcan, Wenye Wang, Mo-Yuen Chow, "A Bidirectional Transport Mechanism in Wireless Sensor Networks," in Proc. of the IEEE MILCOM'05, Atlantic City, NJ, USA.</li>
      <li>Nurcan Tezcan and Wenye Wang, "A lightweight Classification Algorithm for Energy Conservation in Wireless Sensor Networks," in Proc. of the 14th International Conference on Computer Communication and Networks (ICCCN'05), San Diego, California, USA, October 2005.</li>
    </ol>
    <button class="collapse-button"><span data-icon=""> Collapse</span></button>
  </div>

  <h4>Hierarchical Network Architecture</h4>
  <div class="research-content">
    <p>
      The mobile ad hoc network (MANET) is a kind of self-configured network that fits into the needs of many special
      application scenarios where pre-deployment of network infrastructure is infeasible or unnecessary. In large-scale MANETs,
      the hierarchical structure has been proven effective in addressing the scalability problems. However, node mobility poses
      a big challenge to the network topology stability.
    </p>

    <img alt="Mobility Constrained Stability Analysis and Protocal Design" src="<?= asset('2207NetWisLabfiles/img/stability.gif') ?>">

    <p>
      We are currently developing an analytical model to reveal the maximum architectural stability in hierarchical mobile
      ad hoc networks, which is measured by the lifetimes of clusters, inter-cluster links, and paths.
    </p>

    <h5>Publications</h5>
    <ol>
      <li>Yi Xu and Wenye Wang, "MEACA: Mobility and Energy Aware Clustering Algorithm for Constructing Stable MANETs," in the Proc. of IEEE Milcom'06, Washington, D.C. October 2006.</li>
    </ol>
    <button class="collapse-button"><span data-icon=""> Collapse</span></button>
  </div>

  <h4>Mobility and Resource Management</h4>
  <div class="research-content">
    <p>
      User mobility, limited radio resources, and on-battery operations, along with multi-class services have been the main
      challenge for wireless networks, especially when mobile users move from one cell to another cell, or from one system to another.
      We have been focused on three major issues:
    </p>
    <ul>
      <li>Energy-efficient bandwidth allocation scheme for wireless networks...</li>
      <li>User mobility profiling and location tracking...</li>
      <li>Inter-system location management...</li>
    </ul>

    <h5>Publications</h5>
    <ol>
      <li>Wenye Wang, Xinbing Wang, and Arne Nilsson, "Energy-Efficient Bandwidth Allocation in Wireless Networks: Algorithms, Analysis, and Simulation," in IEEE Transactions on Wireless Communications, Vol. 5, no. 4, April 2006.</li>
      <li>Wenye Wang and Ian F. Akyildiz, "A New Signaling Protocol for Intersystem Roaming in Next-Generation Wireless Systems," in IEEE JSAC, Vol. 19, No. 10, pp. 2040-2052, October 2001.</li>
      <li>Wenye Wang and Ian F. Akyildiz, "Intersystem Location Update and Paging Schemes for Multitier Wireless Networks," in Proc. of ACM/IEEE MobiCom 2000, pp. 99-109, August 2000.</li>
    </ol>
    <button class="collapse-button"><span data-icon=""> Collapse</span></button>
  </div>
</div>

<?php require __DIR__ . '/partials/footer.php'; ?>
