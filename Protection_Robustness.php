<?PHP 
	$pageName="Protection and Resilience";
	$pageTitle ="Research on Protection and Resilience";
	include('netwis_header.php');
?>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Wireless networks can offer a wide variety of 
						important applications that could have a significant impact. However, the open 
						medium, especially the open architecture of mobile ad hoc networks, make such 
						networks vulnerable to many types of network dynamics such as potential attacks 
						and routing malfunction.&nbsp; Thus, we are actively pursuing solutions to 
						protecting wireless networks and achieving a good balance between system 
						performance and network protection.
						<br />
					</p>
					<h2><small style="FONT-WEIGHT: bold; COLOR: rgb(153,0,0)"><small> Resilient network 
								topology </small></small>
						<br />
					</h2>
					<p>In the presence of multiple failures such as DoS attacks, selfishness, and node 
						mobility, how to discover a trusty-worthy network topology is the key to 
						communications and information delivery. This process is carried out via route 
						discovery which could be interrupted by node misbehaviors, such as dropping 
						data packets and redirecting routing control packets.&nbsp;
						<br />
					</p>
					<p>There are quite a few challenges in realizing resilient network topologies in 
						wireless multi-hop networks. First, the topology control should maximize the 
						resilience of a network while keeping the connectivity with high probability. 
						Second, new metrics need to be defined to evaluate the resilience of 
						overlays/networks and verify the effectiveness of any solution. Third, a simple 
						but efficient scheme with short convergence time is needed to detect 
						misbehaving nodes and also the cooperativeness of each node must be measured 
						quantitatively.&nbsp;Therefore, we are developing algorithms and protocols that 
						minimize the impact of neighboring node failures by selecting a subset of 
						neighbor nodes, which will be used for succeeding path selection in multi-hop 
						wireless networks.
					</p>
					<table style="LEFT: 252px; WIDTH: 634px; TOP: 705px; HEIGHT: 337px; TEXT-ALIGN: left"
						border="1" cellpadding="2" cellspacing="2">
						<tbody>
							<tr>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<br />
								</td>
								<td><span lang="EN-US"><img src="images/before-proactive.jpg" style="BORDER-RIGHT: 0px solid; BORDER-TOP: 0px solid; BORDER-LEFT: 0px solid; BORDER-BOTTOM: 0px solid"
											height="200" width="200" alt="The original network without applying any topology control" /></span></td>
								<td><span lang="EN-US"><img src="images/after-proactive.jpg" style="BORDER-RIGHT: 0px solid; BORDER-TOP: 0px solid; BORDER-LEFT: 0px solid; BORDER-BOTTOM: 0px solid"
											height="200" width="200" alt="The resilient overlay generated where solid blue dots are cooperative nodes and hollow red dots are misbehaving nodes." /></span></td>
							</tr>
							<tr>
								<td><br />
								</td>
								<td><span lang="EN-US">The original network without applying any topology 
											control</span></td>
								<td><span lang="EN-US">The resilient overlay generated where solid blue dots 
											are cooperative nodes and hollow red dots are misbehaving nodes.</span></td>
							</tr>
						</tbody>
					</table>
					<h3><br />
					</h3>
					<h3>
						Publications
					</h3>
					<ol>
						<li>
							Fei Xing and Wenye Wang, "
							<span style="FONT-WEIGHT: bold"> On
Resilient Overlay Topology Formation in Multi-hop Wireless Networks</span>", <i>in Proc. of IFIP International 
								Conference on Networking (NETWORKING '07), </i>
						May 2007, LNCS 4479, pp. 1-12.
						</li>
						<li>
							Fei Xing and Wenye Wang, "
							<span style="FONT-WEIGHT: bold">Analyzing Resilience to Node Misbehaviors
in Wireless Multi-hop Networks </span>",&nbsp;
							<span style="FONT-STYLE: italic"> in Proc. of IEEE Wireless Communications
and Networking Conference (WCNC '07)</span>, March 2007.&nbsp; <a href="/netwis/publications.php">&gt;&gt; More</a>
							<p>
							</p>
						</li>
					</ol>
					<h2 style="FONT-WEIGHT: bold; COLOR: rgb(153,0,0)"><small><small> STEP2: Self-Tuned 
								Performance and Protection</small></small></h2>
					<p>Our experimental studies and other research results have revealed that, in 
						general, strong protection induces high performance overhead. Considering that 
						user applications and wireless channel conditions, such as error rates and 
						packet losses, may vary from time to time, it may not be feasible to apply 
						strong security solutions all the time in wireless networks.
					</p>
					<img style="position:relative; float: right; margin-left:10px; width: 413px; height: 301px" alt="Self-TunEd Performance and Protection (STEP2) management system" src="images/animate14-step2.gif" />
					<p>Therefore, we proposed a Self-TunEd Performance and Protection (STEP2) 
						management system for wireless LANs, in which an adaptive and dynamic scheme is 
						used to switch network protection (security policies) for optimizing network 
						performance. STEP2 is composed of three modules: the monitor, the decision 
						maker, and the tuner. The monitor receives feedback over wireless links 
						periodically; the decision maker carries out the algorithm regarding the tuning 
						of security policies; the tuner is the element that implements changing 
						security policy and maintain the communication.
					</p>
					<br />					
					<h3>
						Publications
					</h3>
					<ol>
						<li>
							Avesh K. Agarwal and Wenye Wang, "<span style="FONT-WEIGHT: bold">DSPM: Dynamic Security Policy Management
for Optimizing Performance in Wireless Networks,</span>"
								<span style="FONT-STYLE: italic">in the Proc. of IEEE Milcom'06</span>, 
								Washington, D.C. October 2006.&nbsp; <a href="/netwis/publications.php">&gt;&gt; 
								More</a>
							<p>
							</p>
						</li>
					</ol>
<br />
<?PHP include('netwis_footer.php'); ?>