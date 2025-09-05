<?php
  $page_title = "Fundamental Properties – NetWIS Lab";
  $page_desc  = "Research on dynamics, mobility, topology, and performance in wireless networks.";
  require __DIR__ . '/partials/header.php';
?>

<div id="fundamental-properties" class="expandable_naration">
  <h2>Fundamental Properties</h2>
  <p>
    The understanding of dynamics and randomness in mobile wireless networks can enable revolutionary versus evolutionary advances in the design and performance of a network.
    Our group is committed to the discovery, modeling, and investigation of basic properties, interaction among different network dynamics and requirements, with an emphasis on node mobility,
    routing operation, network topology, and performance. In particular, our efforts are being placed on developing new models of user mobility/profiles, which present the most challenges in wireless networks.
    Areas of current research interest include the following:
  </p>

  <h4>Mobility Modeling and Characterization</h4>
  <div class="research-content">
    <p>
      Mobility modeling is a fundamental issue in wireless mobile networks, which has a significant impact on research areas, such as routing protocol design, network performance evaluation,
      link and path lifetime analysis, network connectivity study and network topology control. Therefore, we are actively working on how to design a mobility model which can effectively mimic
      smooth transient moving behaviors of mobile nodes and have the desired steady state properties, such as stable node speed and uniform node distribution, is a challenging issue.
      We aim to design a mobility model which can i) achieve the above goals, ii) integrate a variety of nice properties of existing mobility models and iii) be flexible to mimic the realistic network scenarios.
    </p>
    <div style="text-align: center;">
      <img src="<?= asset('2207NetWisLabfiles/img/mobility_modeling_1.gif') ?>" alt="Mobility Modeling" />
    </div>
    <p>
      In order to provide better performance and quality of service, we develop a framework to capture user mobility profile (UMP) which is a combination of historic records and predictive patterns
      of mobile terminals and to estimate service patterns and locations of mobile users, including descriptions of location, mobility, and service requirements.
      We aimed to develop new mobility model to characterize not only stochastic behaviors, but historical records and predictive future locations of mobile users as well,
      that is, to incorporate aggregate history and current system parameters to acquire UMP.
      We are also interested in the characterization of mobility uncertainty and its impact on network topology.
    </p>
    <h5>Publications</h5>
    <ol>
      <li>Ming Zhao and Wenye Wang, "A Unified Mobility Model for Analysis and Simulation of Mobile Wireless Networks," submitted for journal publications, December 2006.</li>
      <li>Ming Zhao and Wenye Wang, "A Novel Semi-Markov Smooth Mobility Model for Mobile Ad Hoc Networks," in Proc. of IEEE GLOBECOM'06, (Best Paper Award), San Francisco, CA, Nov. 2006.</li>
      <li>Ian F. Akyildiz and Wenye Wang, "A Predictive User Mobility Profile Framework for Wireless Multimedia Networks," in IEEE/ACM Transactions on Networking, vol. 12, no. 6, pp. 1021-1035, Dec. 2004.</li>
    </ol>
    <button class="collapse-button"><span data-icon=""> Collapse</span></button>
  </div>

  <h4>Link and Path Dynamics in Multihop Networks</h4>
  <div class="research-content">
    <p>
      Understanding the link and path stochastic properties can greatly help researchers design mobility-resilient MANETs, maximize routing performance, optimize topology control, and achieve the desired network performance.
    </p>
    <img src="<?= asset('2207NetWisLabfiles/img/link_dynamics3.gif') ?>" alt="Link and Path Dynamics" />
    <p>
      We are focused on developing new models to study link and path properties under the circumstances such as varying radio link conditions, node mobility, geographical constraints, and interferences.
      In particular, we aim to study probabilistic and statistical properties of link/path lifetime, link/path reliability in the presence of node or link failures due to radio channels and node mobility.
      Currently, we are developing an analytical model of the reliability problem in wireless ad hoc networks, as well as algorithms for computing two-terminal reliability in mobile ad hoc networks.
    </p>
    <h5>Publications</h5>
    <ol>
      <li>Ming Zhao and Wenye Wang, "Analyzing Topology Dynamics in Ad Hoc Networks Using A Smooth Mobility Model," in Proc. of IEEE WCNC, March 2007.</li>
      <li>Shawqi Kharbash and Wenye Wang, "Computing Two-Terminal Reliability in Mobile Ad hoc Networks," in Proc. of IEEE WCNC, March 2007.</li>
    </ol>
    <button class="collapse-button"><span data-icon=""> Collapse</span></button>
  </div>

  <h4>Node Behavior and Network Topology</h4>
  <div class="research-content">
    <p>
      Compared with wired network, wireless ad hoc networks are more vulnerable to malicious attacks as well as failures due to their unique features, such as constrained energy, error-prone communication media and highly dynamic network topology.
      Especially, every node (or end user) may have quite different “social” behaviors. For example, selfish nodes refuse to forward packets for other nodes in order to save their own energy.
      While, with no intention for energy-saving, malicious nodes may launch all kinds of denial-of-service (DoS) attacks by replaying, reordering or/and dropping packets from time to time, and even by sending fake routing messages.
    </p>
    <img src="<?= asset('2207NetWisLabfiles/img/node-isolation.jpg') ?>" alt="Node Isolation" />
    <p>
      As we known, the cooperation of mobile nodes is critical to the normal operation of multi-hop wireless networks, thus all aforementioned misbehaviors have prompted open challenges to many issues,
      such as protocol design, service availability, and topology management, in mobile ad hoc networks.
      Therefore, we are investigating node behaviors in order to design a general node model so that we can have an in-depth understanding on the evolution of different node behaviors and their impact to network survivability.
      The modeling and analysis of node behaviors will yield new insights into the analysis and design of resilient wireless multi-hop networks.
    </p>
    <h5>Publications</h5>
    <ol>
      <li>Fei Xing and Wenye Wang, "On the survivability of Wireless Ad Hoc Networks in the Presence of Routing Malfunction," in preparation for journal submission. April 2007.</li>
      <li>Fei Xing and Wenye Wang, "Modeling and Analysis of Connectivity in Mobile Ad Hoc Networks with Misbehaving Nodes," in Proc. of IEEE ICC'07, Vol. 4, pp. 1879-1884, June 2006.</li>
    </ol>
    <button class="collapse-button"><span data-icon=""> Collapse</span></button>
  </div>

  <h4>Interaction of Protection and Performance</h4>
  <div class="research-content">
    <p>
      Rapid and widespread deployment of Wireless Local Area Networks (LANs) offers great convenience to access the Internet via wireless devices such as laptops and PDAs.
      However, wireless LANs are vulnerable to malicious attacks due to their shared medium in unlicensed frequency spectrum. Therefore, strong security features are required for a variety of applications in wireless LANs.
      Unfortunately, secure communications are not gained for free in wireless networks because all security protocols require transmission of users' credentials for identity verification, control messages,
      as well as data encryption/decryption which cause degradation in quality of service (QoS).
      In addition, with the increasing demand for mobile applications, while security protocols are expected to be an integral part of network protocols,
      they should not undermine the usage of wireless networks because of their effects on system performance.
      Therefore, our focus is to investigate, via modeling, analysis, and experiments, to what extent system performance can be impacted by security protocols with respect to mobility scenarios, heterogeneous networks, and different applications.
    </p>
    <h5>Publications</h5>
    <ol>
      <li>Avesh K. Agarwal and Wenye Wang, "On the Impact of Quality of Protection in Wireless Local Area Networks with IP Mobility," in ACM-Springer MONET Journal, Vol. 12, No. 1, pp. 93-110, Feb. 2007.</li>
      <li>Wenye Wang, Wei Liang, and Avesh K. Agarwal, "Integration of Authentication and Mobility Management in Third Generation and WLAN Data Networks", in WCMC, Vol. 5, Issue 6, pp. 665-678, Sept. 2005.</li>
      <li>Wei Liang, Wenye Wang, "A Quantitative Study of Authentication and QoS in Wireless IP Networks," in Proc. of IEEE INFOCOM'05, March 2005.</li>
    </ol>
    <button class="collapse-button"><span data-icon=""> Collapse</span></button>
  </div>
</div>

<?php require __DIR__ . '/partials/footer.php'; ?>
