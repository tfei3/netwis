<?PHP 
	$pageName="Design and Optimization";
	$pageTitle ="Research on Design and Optimization";
	include('netwis_header.php');
?>
<p>Essential to our vision for wireless networking is a focus on the
design of protocols, algorithms for wireless networks that can optimize
resource utilization, network architecture, and system performance. We
are pursuing this general goal in different network platforms such as
cellular networks, multi-hop networks, and low-power sensor networks,
through studies in several topics. </p>
<h5>Self-organized sensor networks </h5>
<p> Self-organization is a major issue in randomly deployed wireless
sensor networks, and should be addressed subject to some important
constraints such as sensing coverage, reliable data transport, energy
efficiency, and fair load distribution. We propose to develop
self-organization algorithms that can construct a network by sensors
themselves without external supervision, while preserving coverage and
connectivity under stringent energy and reliability constraints. </p>
<p> <img
 style="position:relative; float:right; width: 348px; height: 261px; margin-left:10px; padding:0;" alt="Self-Organized Sensor Network"
 src="images/sosn.bmp" /></p>
<p>Particularly in dense networks, energy-efficient scheduling is a key
factor to extend the functionality and lifetime of the network.&nbsp;
That means, only the nodes maintaining the functionality stay active
whereas others are scheduled to sleep, e.g., switching to power saving
mode. Therefore, the energy dissipation in sending/receiving and idle
time can be significantly reduced and by updating the sleeping nodes,
network lifetime can be prolonged. The fundamental challenge of
scheduling is to maximize the number of sleeping nodes to conserve more
energy while maintaining the functionality of the wireless sensor
networks. In our work, we integrated coverage and connectivity by a
tiered approach; thus, nodes having been used for connectivity or
coverage have different sleeping behaviors during an update
interval.&nbsp; Nodes, which are not selected for coverage or
connectivity-tier, are put into <span style="font-style: italic;">sleep</span>
immediately; nodes in the coverage-tier are put into <span
 style="font-style: italic;">semi-sleep</span> because they can wake up
for sending data and can go back to sleep mode periodically; nodes in
the connectivity-tier stay <span style="font-style: italic;">active</span>
in order to forward data traffic. Hence, we enable more nodes to sleep
while maintaining the coverage and connectivity of the network.</p>
<p>Notice that many applications developed for wireless sensor networks
(WSNs) demand for reliable communication service, since majority of
these applications are event-critical applications (e.g., fire
monitoring, border surveillance, etc.), we also investigate the
following question: "<span style="font-style: italic;">What is the
information to be delivered reliably on WSN?</span>". Especially
densely deployed sensor nodes can generate many redundant messages that
essentially indicate the same from the area of interest, thus posing
significantly high and unnecessary communication overhead. Therefore,
we introduced a new concept for WSNs as <span
 style="font-style: italic;">event reliability</span> and <span
 style="font-style: italic;">query reliability</span>. Event
reliability is defined to be achieved when every critical event report
message is received by the sink node; query reliability is defined to
be achieved when every query of the sink is received by those sensors
that cover the entire sensible terrain within the area of deployment.
Furthermore, we need to take many related issues into consideration
such as congestion control, event differentiation, overhead for
acknowledgment, and energy conservation.</p>
<br />
<br />
<h3> Publications </h3>
<ol>
  <li> <small><big>Nurcan Tezcan and Wenye Wang, "<span
 style="font-weight: bold;">ART: An Asymmetric and
Reliable Transport Mechanism for Wireless Sensor Networks</span>," <span
 style="font-style: italic;">in Journal of Wireless Sensor Networks
(JSNet)</span>,<span style="font-style: italic;">&nbsp;</span> February
2007. </big> <br />
    </small> </li>
  <li><strong style="font-weight: normal;"> Nurcan Tezcan,
Wenye Wang, Mo-Yuen Chow, "</strong><span
 style="font-weight: bold; font-style: normal;"><span style="font-style: normal;"><span
 style="font-weight: normal; font-style: normal;"></span> </span></span><strong
 style="font-weight: bold;">A Bidirectional Transport Mechanism in
Wireless Sensor Networks</strong>," in <span
 style="font-style: italic;">Proc. of the IEEE MILCOM'05</span>,
Atlantic City,
NJ, USA. </li>
  <li> Nurcan Tezcan and Wenye Wang, "<span
 style="font-weight: bold;">A lightweight
Classification Algorithm for
Energy Conservation in Wireless Sensor Networks</span>, " in <span
 style="font-style: italic;">Proc. of the 14th&nbsp;International
Conference on Computer Communication and Networks (</span><span style="font-style: italic;"></span><strong
 style="font-weight: normal; font-style: italic;">ICCCN'05),</strong> San
Diego , California , USA , October, 2005. <a
 href="/netwis/publications.php">&gt;&gt; More</a>
    <p> </p>
  </li>
</ol>
<h5>Hierarchical Network Architecture </h5>
<p> The mobile ad hoc network (MANET) is a kind of self-configured
network that fits into the needs of many special application scenarios
where pre-deployment of network infrastructure is infeasible or
unnecessary. In large-scale MANETs, the hierarchical structure has been
proven effective in addressing the scalability problems. However, node
mobility poses a big challenge to the network topology stability. The
wireless links connecting the nodes are subject to frequent
availability&nbsp;changes as the nodes move around. The paths between
communicating nodes, therefore, experience disruptions from time to
time. </p>
<p> <img style="position:relative; float:right; width: 320px; height: 290px;" alt="Mobility Constrained Stability Analysis and Protocal Design"
 src="images/stability.gif" /></p>
<p>We are currently developing an analytical model to reveal&nbsp;the
maximum architectural stability in hierarchical mobile ad
hoc&nbsp;networks, which is measured by the lifetimes of clusters,
inter-cluster links, and paths. The understanding of the stability
bound then provides guidelines for us to design a new clustering
algorithm and a new cluster-based routing protocol that work together
to achieve this bound. The maximized topology stability can bring the
performance benefits&nbsp;such as higher throughput, lower packet loss,
and lower routing overhead than the previous clustering and routing
schemes.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<h3>Publications </h3>
<ol>
  <li> Yi Xu and Wenye Wang, "<span
 style="font-weight: bold;"> MEACA: Mobility and Energy Aware
Clustering Algorithm for Constructing Stable MANETs</span>,"&nbsp; <span
 style="font-style: italic;"> in the Proc. of IEEE Milcom'06</span>,
Washington, D.C. October 2006. <a href="/netwis/publications.php">&gt;&gt;More</a>    
  </li>
</ol>
 
<h5>Mobility and resource management </h5>
<p>User mobility, limited radio resources, and on-battery operations,
along with multi-class services have been the main challenge for
wireless networks, especially when mobile users move from one cell to
another cell, or from one system to another system in that bandwidth or
channels must be allocated prior to the arrival of mobile terminal. We
have been focused on three major issues: <br />
</p>
<p> </p>
<ul>
  <li> Energy-efficient bandwidth allocation
scheme for wireless networks: In this work, we study the intrinsic
relationship between the energy consumption and transmission rates of
mobile terminals, in which transmission rate is determined through
channel allocations. Our objective is to reduce energy consumption of
each terminal, while statistically meeting the requirements of quality
of service (QoS) of each type of traffic. </li>
  <li> User mobility profiling and location tracking: The most salient
feature of wireless networks is mobility support, which enables mobile
users to communicate with others regardless of location. It is also the
very source of many challenging issues, relating to the mobility and
service patterns of mobile terminals, namely, user mobility profile
(UMP). For each mobile user, a UMP consists of detailed information of
service requirements and mobility models that is essential to quality
of service (QoS)<br />
and roaming support. Therefore, we proposed a generic framework that ca
characterize not only stochastic behaviors, but historical records and
predictive future locations of mobile users as well. </li>
  <li> Inter-system location management: In heterogeneous wireless
environments with different system specifications and radio
frequencies, how to enable seamless roaming among these systems is one
of the most important issues for mobile applications. Thus, we proposed
a dynamic inter-system location management scheme, which is aimed to
reduce signaling costs and improve system performance. The proposed
scheme consists of two operations: inter-system location update and
paging, in which bandwidth requirements, velocity, and network load are
taken into account. In accordance with this scheme, a mobility
application part (MAP) protocol is devised for location registration
and call delivery processes to support roaming capability of mobile
users moving across different network backbones and infrastructures. <br />
  </li>
</ul>
<h3>Publications</h3>
<ol>
  
  <li> Wenye Wang, Xinbing Wang, and Arne Nilsson, "<span
 style="font-weight: bold;">Energy-Efficient
Bandwidth Allocation in Wireless Networks: Algorithms, Analysis, and
Simulation</span><span style="font-style: italic;">,</span>"&nbsp; <span
 style="font-style: italic;">in IEEE Transactions on Wireless
Communications</span>, Vol 5, no. 4, pp 1-12, April 2006.&nbsp;&nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br />
  </li>
  <li> Wenye Wang and Ian F. Akyildiz, "<span
 style="font-weight: bold;">A New Signaling Protocol
for Intersystem Roaming in Next-Generation Wireless Systems</span>," <span
 style="font-style: italic;">in IEEE Journals on Selected Areas in
Communications (JSAC)</span>, Vol. 19, No. 10, pp. 2040-2052, October
2001. </li>
  <li> Wenye Wang and Ian F. Akyildiz, "<span
 style="font-weight: bold;">Intersystem Location Update
and Paging Schemes for Multitier Wireless Networks</span>," <span
 style="font-style: italic;">in Proc. of ACM/IEEE MobiCom'2000</span>,
pp. 99-109,&nbsp; August 2000. <a
 href="/netwis/publications.php"> &gt;&gt;More</a> </li>
  
</ol>
<br />
<?PHP include('netwis_footer.php'); ?>
