<?PHP 
	$pageName="Sensor Networks";
	$pageTitle ="Sensor Networks";
	include('netwis_header.php');
?>
				<a href="#1._Objectives">Objectives</a> &nbsp;&nbsp; <a href="#2._Potential_Applications">
					Potential Applications</a> &nbsp;&nbsp; <a href="#3._PINS_Network_Setup">PINS 
					Setup</a>&nbsp; <a href="#4._Technical_Documents">Technical Docs</a> &nbsp; <a href="#6._Related_Publications_">
					Related Publications</a>&nbsp;&nbsp; &nbsp; <a href="#7._Useful_Links">Useful 
					Links</a>
				<p><br />
					A Personal INdoor Sensor (PINS) network is a wireless sensor network deployed 
					in-homes or in-buildings to monitor the indoor conditions and the human daily 
					behavior. Sensor nodes are usually equipped with passive infrared (PIR), 
					temperature, acoustic sensors that can capture unpredictable conditions and 
					behaviors. Nodes communicate via wireless links in a multi-hop fashion. 
					Placement/orientation of these sensor nodes should be carefully designed to 
					sense entire field of interest.
				</p>
				<h5><a name="1._Objectives"></a>1. Objectives&nbsp;
					<br />
				</h5>
				<p>Indoor environments have several challenges in terms of wireless communication 
					and sensing. In this research, our objective is to investigate the properties 
					of indoor environments for wireless sensor networks. This would be very useful 
					since home itself is like a living organism. Furniture might move, people might 
					start to emit noise at certain hours, heat can change etc. Further, 
					transmission and sensing coverage in indoor environments should be studied by 
					an experimental study to capture the irregularity due to many obstacles. We 
					will further implement and test our algorithms to improve the reliable 
					communication and event detection for several applications.
				</p>
				<h5><a name="2._Potential_Applications"></a>2. Potential Applications</h5>
				<p>PINS network composed of PIR supported motes can be used in variety of office 
					(workplace) and home applications. Similar to the context-aware home projects, 
					PINS network can easily be deployed for human tracking for health care, daily 
					life monitoring, energy management (light, A/C turn on/off) etc. In such 
					applications, benefits of PINS&nbsp; would be summarized as follows:
				</p>
				<ul>
					<li>
					adaptable to existing building with minor construction and maintenance
					</li>
					<li>
					low-cost
					</li>
					<li>
					ubiquitous
					</li>
					<li>
					customizable based on the life style (workplace, home for elder people, 
					children house, etc.)
					</li>
					<li>
						can be improved to act as an emergency system
					</li>
				</ul>
				<p>
					An example monitoring application of PINS is
					<span style="FONT-STYLE: italic">exhibition monitoring</span>. Especially in 
					art exhibitions, it is very helpful to have the statistics of the number of 
					visitors per each painting. Using a PINS network, sensor nodes that are placed 
					to monitor each painting may detect each visitor in front of the painting and 
					inform the base station in multi-hop fashion. Such information is also very 
					critical from the designer point of view working on the visibility of each 
					painting. We placed the sensors to detect the number of visitors for our 
					research posters as shown below.<br />
					<br />
				</p>
					<p style="text-align:center;"><img alt="PINS exhibition monitoring" src="images/pir_app.jpg" height="289" width="656" /></p>
				<h5><a name="3._PINS_Network_Setup"></a>3. PINS Network Setup</h5>
				<p>For our testbed, we have deployed 18 Tmotes to our lab. Some of our Tmotes have 
					PIR sensors visually (or virtually) tracking the people's daily interaction 
					with their habitat and monitoring the indoor conditions. To track the people in 
					an indoor environment, we use PIR sensors.&nbsp; Detailed explanation on our 
					experiments and findings will be available soon.</p>
				<br />
				<div>
					<table style="WIDTH: 100%; TEXT-ALIGN: left" border="1" cellpadding="2" cellspacing="2">
						<tbody>
							<tr>
								<td><img alt="Timote Sky" src="images/tmote2%20002.jpg" style="LEFT: 269px; WIDTH: 256px; TOP: 1413px; HEIGHT: 185px" /></td>
								<td>&nbsp;Here are the&nbsp; documents we used to configure <a href="http://www.moteiv.com/products/tmotesky.php">
										Tmote Sky</a>. 
									<ul>
										<li>
											<a href="images/tmote-sky-datasheet.pdf">Moteiv Tmote Sky Datasheet 
													(2006)</a> 
										</li>
										<li>
											<a href="images/tmote-sky-quickstart.pdf">Moteiv Tmote Sky Quick start 
													guide (2006)</a> 
										</li>
									</ul>
									<div style="TEXT-ALIGN: justify; margin-top:10px;">We have installed <a href="http://www.moteiv.com/software/">
											Boomerang</a> 2.0.4 software which is 
											fully compatible with existing TinyOS 1.x application. Boomerang is a complete 
											setup that installs the Tnote development tools (TinyOS 1.x, Java 1.5 JDK, 
											nesC, cygwin (for windows), Graphviz, etc.), USB driver to access Tmote as a 
											virtual COM port, and motiv's networking application tools.
										<br />
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				
				<div>
					
						<span style="FONT-WEIGHT: bold; COLOR: rgb(153,0,0)">3.1 PIR Sensor</span><br />
						<br />
						<span style="FONT-FAMILY: helvetica,arial,sans-serif">For </span>motion 
						detection, we connect a 
						passive infrared (PIR) motion sensor<span style="FONT-STYLE: italic">&nbsp;</span>
						to Tmote Sky.<span style="FONT-FAMILY: helvetica,arial,sans-serif"> PIR sensor detects
changes in infrared radiation which occur when there is movement by a
person (or object) which is different in temperature from the
surroundings. As sensor detects temperature differences, it is well
suited to detecting the motion of people by their body temperature. We
have configured an</span>
						<span style="FONT-WEIGHT: bold">analog </span>(<span style="FONT-FAMILY: helvetica,arial,sans-serif">Parallax
#555-28027</span>) and a
						<span style="FONT-WEIGHT: bold">digital</span>
					(Panasonic 
						AMN44121) sensor<span style="FONT-FAMILY: helvetica,arial,sans-serif"> for
our testbed.</span></div>
				
				<br /><br />
				
					<span style="FONT-WEIGHT: bold"></span>
				<div>
					<table style="WIDTH: 100%; TEXT-ALIGN: left" border="0" cellpadding="2" cellspacing="2">
						<tbody>
							<tr>
								<td><img alt="Parallax analog sensor" src="images/555-28027.gif" style="WIDTH: 127px; HEIGHT: 97px" /><br />
									
									<div style="TEXT-ALIGN: center"> 
									</div>
									<div style="TEXT-ALIGN: left">
										<div style="TEXT-ALIGN: center">
											<div style="TEXT-ALIGN: left"><span style="FONT-STYLE: italic"></span><span style="FONT-FAMILY: arial">Parallax
(#555-28027)</span><br />
													
													<span style="FONT-FAMILY: arial"></span><span style="FONT-FAMILY: arial">(~6
m&nbsp; range)</span>
												<br />
												
													<span style="FONT-STYLE: italic">
														<span style="FONT-FAMILY: arial">
															<br />
															<br />
														</span>
													</span><img alt="Panasonic digital sensor" src="images/pir.jpg" style="WIDTH: 120px; HEIGHT: 104px" /><br />
												<div style="TEXT-ALIGN: left"><span style="FONT-STYLE: italic"><span style="FONT-FAMILY: arial">Panasonic
AMN44121</span>
																</span><br />
													
													<span style="FONT-FAMILY: arial"></span><span style="FONT-STYLE: italic"><span style="FONT-FAMILY: arial">(~10 m
rang</span>
																</span><span style="FONT-STYLE: italic"><span style="FONT-FAMILY: arial">e)</span>
																</span><span style="FONT-FAMILY: arial"></span><br />
												</div>
											</div>
											
												<span style="FONT-STYLE: italic"></span></div>
									</div>
								</td>
								<td><img alt="sensor coverage " src="images/coverage.jpg" style="WIDTH: 432px; HEIGHT: 262px" /><br />
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				
					<div><br />
							
								<span style="FONT-WEIGHT: bold">
									<span style="COLOR: rgb(153,0,0)"><br />
&nbsp; </span>
								</span><span style="COLOR: rgb(153,0,0); FONT-WEIGHT: bold">3.1.1 Connecting Analog
PIR Sensor to Tmote<br />
<br />
</span></div>
						
					
				<div>
						<table style="LEFT: 252px; TEXT-ALIGN: left" border="0" cellpadding="2" cellspacing="2">
							<tbody>
								<tr>
									<td><img alt="Analog PIR Sensor" src="images/apir.JPG" style="WIDTH: 249px; HEIGHT: 179px" /><br />
										
									</td>
									<td><small><span style="FONT-FAMILY: arial">To connect an
														<span style="FONT-WEIGHT: bold">external analog sensor</span>
														to Tmote we use the 10-pin expansion connector on tmote board. We connect our PIR sensor output to expansion
														<span style="TEXT-DECORATION: underline">pin 3 (ADC0</span>).<br />
												<br />
											</span>
											
												<span style="FONT-FAMILY: courier new,courier,monospace">TOS_ADC_PIR_PORT =
unique("ADCPort"),</span><br />
											TOSH_ACTUAL_ADC_PIR_PORT 
												= ASSOCIATE_ADC_CHANNEL(<br />
											&nbsp;&nbsp; 
												&nbsp; INPUT_CHANNEL_A0,<br />
											&nbsp;&nbsp;&nbsp;&nbsp; 
												REFERENCE_VREFplus_AVss,<br />
											&nbsp;&nbsp;&nbsp;&nbsp; 
												REFVOLT_LEVEL_2_5)</small><small><span style="FONT-FAMILY: arial">
												<span style="COLOR: rgb(153,0,0)"></span>
											</span></small></td>
								</tr>
							</tbody>
						</table>
					
				</div>
				<br />
				<div>
						<table style="WIDTH: 554px; FONT-FAMILY: courier new,courier,monospace; HEIGHT: 620px; BACKGROUND-COLOR: rgb(255,255,153); TEXT-ALIGN: left"
							border="0" cellpadding="2" cellspacing="2">
							<tbody>
								<tr>
									<td>configuration AnalogPIRSendC {<br />
												}<br />
												implementation {<br />
												&nbsp;&nbsp;&nbsp; ...&nbsp;
												<br />
												&nbsp;&nbsp;&nbsp; components ADCC;<br />
												<br />
												&nbsp; &nbsp; Main.StdControl -&gt; AnalogPIRSendP;<br />
												&nbsp; &nbsp; Main.StdControl -&gt; ADCC;<br />
												&nbsp; &nbsp; AnalogPIRSendP.CommControl -&gt; Comm;<br />
												&nbsp; &nbsp; AnalogPIRSendP.SendMsg -&gt; Comm.SendMsg[AM_OSCOPEMSG];<br />
												&nbsp; &nbsp; ...
												<br />
												&nbsp; &nbsp; AnalogPIRSendP.ADC -&gt; ADCC.ADC[TOS_ADC_PIR_PORT];<br />
												&nbsp; &nbsp; AnalogPIRSendP.ADCControl -&gt; ADCC;<br />
												<br />
												}<br />
												<br />
												implementation<br />
												{<br />
												&nbsp; ...<br />
												<br />
											event result_t Timer.fired() {<br />
												&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; return call ADC.getData();<br />
												&nbsp;}<br />
												&nbsp; 
												<br />
												async event result_t
ADC.dataReady( uint16_t data ){<br />
												&nbsp;&nbsp;&nbsp; struct
OscopeMsg *pack;<br />
												&nbsp;&nbsp;&nbsp; atomic{<br />
												&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp; pack = (struct OscopeMsg *)msg[currentMsg].data;<br />
												&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp; pack-&gt;data[packetReadingNumber++] = data;<br />
												&nbsp; &nbsp; &nbsp; &nbsp;
readingNumber++;<br />
												&nbsp;&nbsp; &nbsp;
&nbsp;&nbsp; ...<br />
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
if (packetReadingNumber == BUFFER_SIZE) post dataTask();<br />
												&nbsp; &nbsp;&nbsp; }<br />
												&nbsp;&nbsp;&nbsp; m_int =
data;<br />
												&nbsp;&nbsp;&nbsp; return
SUCCESS;<br />
												<br />
												<br />
									</td>
								</tr>
							</tbody>
						</table>
					
				</div>
				
					
				<div><br />
							
						<br />
						&nbsp; 
							<span style="FONT-WEIGHT: bold">
								<span style="COLOR: rgb(153,0,0)">3.1.2
Connecting Digital PIR Sensor to Tmote<br />
</span>
							</span></div>
				
				
				<br />
				<div>
						<table style="LEFT: 252px; TOP: 3324px; TEXT-ALIGN: left" border="0" cellpadding="2" cellspacing="2">
							<tbody>
								<tr>
									<td><img alt="Tmote external digital sensor" src="images/tmote.jpg" style="WIDTH: 273px; HEIGHT: 204px" /></td>
									<td><span style="FONT-FAMILY: arial">To use the <span style="FONT-WEIGHT: bold">external digital sensor</span> in Tmote we
connect our PIR sensor output to&nbsp; expansion <span style="TEXT-DECORATION: underline">pin 7 (GIO1</span>). Since PIR
(AMN44121) is low current consumption <span style="FONT-WEIGHT: bold">(digital
output)</span>, 10 m detection, 3V DC type, we used one of the
exclusive digital I/O port. One important detail, specified in the
datasheet is that:<br />
      <br />
      <span style="COLOR: rgb(153,0,0)">&nbsp;-- If expansion
pin 7 or 10 is
used for digital I/O instead of analog inputs, R16/R14 must be
populated with a 0 ohm resistor to enable GIO1/GIO0.</span></span></td>
								</tr>
							</tbody>
						</table>
					
				</div>
				
						<span style="FONT-WEIGHT: bold"></span>
						<div><br />
						</div>
					
				<div>
						<table style="WIDTH: 100%; TEXT-ALIGN: left" border="1" cellpadding="2" cellspacing="2">
							<tbody>
								<tr>
									<td>
										<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img alt="Pin Expansion" src="images/expansion2.JPG" style="WIDTH: 420px; HEIGHT: 187px" /><br />
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img alt="Pin Expansion" src="images/expansion.jpg" style="WIDTH: 399px; HEIGHT: 194px" /></p>
									</td>
								</tr>
							</tbody>
						</table>
					
				</div>
				
				
				<div><br />
						After we connected the 
											PIR sensor to the digital I/O pin 1, we use
											<span style="FONT-STYLE: italic">MSP430GeneralIO</span>
											interface to get the output from sensor. An important detail is that GIO1 is 
											designed to have interrupt capability. Thus, we catch up the motion by the 
											voltage change in the output of PIR sensor triggers an interrupt. Here is some 
											useful information to get output using GIO1.<br />
						
				</div>
				<br />
				<div> 
					<ul>
						
							<li>
								<span style="FONT-FAMILY: courier new,courier,monospace">use
TOSH_MAKE_GIO0_INPUT();</span>
							</li>
							<li>
								
								<pre>wire ReadPIRP.PIR -&gt; MSP430GeneralIOC.Port21; <br />     ReadPIRP.PIRInput -&gt; MSP430InterruptC.Port21;</pre>
								
							</li>
							<li>
								<pre>set ADC2 as input by putting the macros TOSH_MAKE_ADC3_INPUT(); (output by default<span style="FONT-FAMILY: monospace">)</span></pre>
						</li>
					</ul>
					
				</div>
				
					<table style="WIDTH: 391px; HEIGHT: 396px; BACKGROUND-COLOR: rgb(255,255,153); TEXT-ALIGN: left; FONT-FAMILY: courier new,courier,monospace"
						border="0" cellpadding="2" cellspacing="2">
						<tbody>
							<tr>
								<td>components 
												Main;<br />
												components ReadPIRP;<br />
												components MSP430GeneralIOC;<br />
												components MSP430InterruptC;<br />
												...<br />
												<br />
												Main.StdControl -&gt; ReadPIRP;<br />
												ReadPIRP.PIR -&gt; MSP430GeneralIOC.Port21;
												<br />
												ReadPIRP.PIRInput -&gt; MSP430InterruptC.Port21<br />
												<br />
												module
ReadPIRP {<br />
												&nbsp;
provides interface StdControl;<br />
												&nbsp;
uses interface Leds;<br />
												&nbsp;
uses interface MSP430GeneralIO as PIR;<br />
												&nbsp;
uses interface MSP430Interrupt as PIRInput;<br />
												}<br />
												command
result_t StdControl.init() {<br />
												&nbsp;&nbsp;&nbsp;
TOSH_MAKE_ADC2_INPUT();<br />
												&nbsp;&nbsp;&nbsp;
TOSH_MAKE_GIO1_INPUT(); <br />
												&nbsp;&nbsp;&nbsp;
return SUCCESS;<br />
												&nbsp; }<br />
												async
event void PIRInput.fired(){<br />
												&nbsp;....<br />
												}
												<br />
												</td>
							</tr>
						</tbody>
					</table>
					
							<br />
							<br />
							&nbsp;<span style="FONT-WEIGHT: bold; COLOR: rgb(153,0,0)">3.1.3 Digital versus 
								Analog PIR</span><br />
								&nbsp;&nbsp;&nbsp;
								<br />								
							<span style="COLOR: rgb(0,0,0)">After configuring analog and the digital
sensors, we decide to extend our test-bed using analog PIR sensors.</span>
							A comparison will be available between analog and digital PIR&nbsp; in terms 
							of&nbsp; computability to Telos.			
					
				<h5><a name="4._Technical_Documents"></a>4. 
								Technical Documents</h5>
				
					
				<ul>
					
							<li>
								<a href="file:///K:/locker/WSN-testbed-Project/pins/doc/tmote-sky-datasheet.pdf">Moteiv 
										Tmote Sky Datasheet (2006)</a> 
							</li>
							<li>
								<a href="file:///K:/locker/WSN-testbed-Project/pins/doc/tmote-sky-quickstart.pdf">Moteiv 
										Tmote Sky Quick start guide (2006)</a> 
							</li>
							<li>
								<a href="file:///K:/locker/WSN-testbed-Project/pins/pewa.panasonic.com/pcsd/product/sens/pdf/amn.pdf">
										Digital PIR sensor specification</a> 
							</li>
							<li>
								<a href="http://www.parallax.com/dl/docs/prod/audiovis/PIRSensor-V1.2.pdf">Analog 
										PIR sensor specification</a><br />
								
						</li>
				</ul>
				
								
				
				<h5>5. 
								An example Application and Initial Results</h5>
				Application 
							specific configuration and results will be available soon.
							<br />
						
				<h5><a name="6._Related_Publications_"></a>6. 
								Related Publications 
				</h5>
				
							<br />
							
								
									<span style="FONT-WEIGHT: bold; FONT-FAMILY: Helvetica,Arial,sans-serif">&nbsp;&nbsp;&nbsp;
<span style="COLOR: rgb(153,0,0)">6.1 Health-Care Applications of Wireless Sensor Networks</span></span>
							<br /><br />
				<ul>
					
									<li>
										<a href="http://www.dh.aist.go.jp/%7Eynishida/papers/ICEIS2005.pdf">U</a><a href="http://www.dh.aist.go.jp/%7Eynishida/papers/ICEIS2005.pdf">ltrasonic 
											Sensors for the Elderly and Caregivers in a Nursing Home</a>, Toshio 
									Hori, Yoshifumi Nishida, ICEIS, 2005.
									</li>
									<li>
										<a href="http://www.cs.virginia.edu/papers/wlsn_health_HCMDSS05.pdf">Wireless 
											Sensor Networks for In-Home Healthcare: Potential and Challenges</a>, 
									J. A. Stankovic, Q. Cao, T. Doan, L. Fang, Z. He, R. Kiran, S. Lin, S. Son, R. 
									Stoleru, A. Wood, HCMDSS, 2005.
									</li>
									<li>
										<a href="http://seattleweb.intel-research.net/people/matthai/pubs/debull06.pdf">Towards 
											Activity Databases: Using Sensors and Statistical Models to Summarize People's 
											Lives</a>, Tanzeem Choudhury, Matthai Philipose, Danny Wyatt, Jonathan 
									Lester, Data Engineering Bulletin, 2006.
									</li>
									<li>
										<a href="http://www.eecs.harvard.edu/%7Emdw/papers/codeblue-techrept05.pdf">Sensor 
											Networks for Medical Care</a>, Victor Shnayder, Borrong, Chen, Konrad 
									Lorincz, Thaddeus R. F. FulfordJones, and Matt Welsh, Tech. Report, Harvard 
									University, 2005.
									</li>
									<li>
										<a href="http://ieeexplore.ieee.org/iel5/2/28841/01297237.pdf?arnumber=1297237">Inventing 
											Wellness Systems for Aging-in-Place</a>, Eric Dishman, Intel Research, 
									2004.
									</li>
									<li>
										<a href="http://www.eecs.harvard.edu/%7Emdw/papers/monitoring-icicth05.pdf">Improving 
											Patient Monitoring and Tracking in Emergency Response</a>, Tia Gao, Dan 
										Greenspan, and Matt Welsh. In <em style="FONT-FAMILY: Helvetica,Arial,sans-serif">Proceedings 
											of the International Conference on Information Communication Technologies in 
											Health</em><span style="FONT-FAMILY: Helvetica,Arial,sans-serif">,
July 2005.</span>
									</li>
									<li>
										<a style="FONT-FAMILY: Helvetica,Arial,sans-serif" href="http://www.mobiquitous.org/2005/Hou.pdf">
											Use of Wireless Technologies for Assisted Living at Home</a><span style="FONT-FAMILY: Helvetica,Arial,sans-serif">, Mobiquitous 2005</span>.
									</li>
									<li>
										<a href="http://www.napa.ufl.edu/2003news/smarthouse.htm">
														UF SMART HOME DEMONSTRATES CONCEPT OF AUTOMATED ELDERLY HELP AND CARE.</a>
								</li>
				</ul>
				
								<br /><span style="FONT-WEIGHT: bold; FONT-FAMILY: Helvetica,Arial,sans-serif">&nbsp;&nbsp;<span style="COLOR: rgb(153,0,0)">&nbsp; </span><span style="COLOR: rgb(153,0,0)">6.2
In-door, Home Wireless Sensor Networks</span></span><br /> <br />
				
				<ul style="FONT-FAMILY: Helvetica,Arial,sans-serif">
					
									<li>
										<a href="http://www.pittsburgh.intel-research.net/%7Ekpapagia/papers/homenet.pdf">Experimental 
											Characterization of Home Wireless Networks and Design Implications</a>, K. 
										Papagiannaki, M. Yarvis, and W. S. Conner, in <i>IEEE Infocom</i>, 
									Barcelona, Spain, April, 2006.
									</li>
									<li>
										<a href="http://crpit.com/confpapers/CRPITV21WMeyer.pdf">A Survey of Research on 
											Context-Aware Homes</a>, Sven Meyer and Andry Rakotonirainy, WICAPUC, 
									2003.
									</li>
									<li>
										<a href="http://www.cs.toronto.edu/%7Etomhart/papers/secon.pdf">Simplified 
											Simulation Models for Indoor MANET Evaluation are not Robust</a>, Andres 
										Lagar Cavilla, Gerard Baron, Thomas E. Hart, Lionel Litty and Eyal de Lara, 
										Secon 2004.<br />
								</li>
				</ul>
				
								<br /><span style="FONT-WEIGHT: bold; COLOR: rgb(153,0,0); FONT-FAMILY: Helvetica,Arial,sans-serif">&nbsp;&nbsp;&nbsp;
6.3 Other Experimental Studies for Wireless Sensor Networks</span><br /><br />
				
				<ul>
					
									<li>
										<a href="http://www.cs.virginia.edu/papers/tracking-mobisys04.pdf">Energy-Efficient 
											Surveillance System Using Wireless Sensor Networks</a>, Tian He, Sudha 
									Krishnamurthy, John A. Stankovic, Tarek Abdelzaher, Liqian Luo, Radu Stoleru, 
									Ting Yan, Lin Gu, MobiSys, 2004.
									</li>
									<li>
										<a href="http://lecs.cs.ucla.edu/%7Edeepak/PAPERS/empirical.pdf">Complex Behavior 
											at Scale: An Experimental Study of Low-Power Wireless Sensor Networks</a>, 
									Deepak Ganesany, Deborah Estrin, Alec Woo, David Culler, Tech. Report, UCLA, 
									2002.
									</li>
									<li>
										<a href="http://ieeexplore.ieee.org/iel5/10355/32951/01542773.pdf?arnumber=1542773">
											An Experimental Study of Routing and Data Aggregation in Sensor Networks</a>, 
									Ossama Younis, Sonia Fahmy, MASS 2005.
									</li>
									<li>
										<a href="http://www.cs.virginia.edu/%7Estankovic/psfiles/f103-gu.pdf">Lightweight 
											Detection and Classification for Wireless Sensor Networks in Realistic 
											Environments</a>, Lin Gu, Dong Jia, Pascal Vicaire, Ting Yan, Liqian 
									Luo, Ajay Tirumala, Qing Cao, Tian He, John A. Stankovic, Tarek Abdelzaher, 
									Bruce H. Krogh, SenSys, 2004.
									</li>
									<li>
										<a href="http://delivery.acm.org/10.1145/950000/941357/p38-conner.pdf?key1=941357&amp;key2=7536854711&amp;coll=&amp;dl=ACM&amp;CFID=15151515&amp;CFTOKEN=6184618">
											Experimental Evaluation of Synchronization and Topology Control for In-Building 
											Sensor Network Applications</a>, W. Steven Conner, Jasmeet Chhabra, 
									Mark Yarvis, Lakshman Krishnamurthy, WSNA, 2003.
									</li>
									<li>
										<a href="http://www.isi.edu/div7/publication_files/Son04a.pdf">Experimental study 
											of the effects of Transmission Power Control and Blacklisting in Wireless 
											Sensor Networks</a>, Dongjin Son, Bhaskar Krishnamachari, and John 
									Heidemann, Secon 2004.
									</li>
									<li>
										<a href="http://www.isi.edu/%7Ejohnh/PAPERS/Son06a.pdf">Experimental Study of 
											Concurrent Transmission in Wireless Sensor Networks</a>, Dongjin Son, 
									Bhaskar Krishnamachari, John Heidemann, SenSys 2006.
									</li>
									<li>
										<span style="FONT-FAMILY: Helvetica,Arial,sans-serif"><a href="http://www.cs.virginia.edu/wsn/vigilnet/paper/VigilNet-TOSN.pdf">
												VigilNet: An Integrated Sensor Network System for Energy-Efficient Surveillance</a>,
Tian He, Sudha Krishnamurthy, John A. Stankovic, Tarek Abdelzaher,
Liqian Luo, Radu Stoleru, Ting Yan, Lin Gu, TOSN, 2006.</span>
									</li>
									<li>
										<a href="http://www.cs.colorado.edu/%7Erhan/Papers/p28-hartung.pdf">
													FireWxNet: A MultiTiered Portable Wireless System for Monitoring Weather 
													Conditions in Wildland Fire Environments</a>, ACM MobiSys 2006.
									</li>
									<li>
										<a href="http://enl.usc.edu/papers/cache/Zhao03.pdf">
													Understanding &nbsp;packet delivery performance in dense wireless sensor 
													networks</a>,
J. Zhao and R. Govindan,&nbsp; in Proc.
of ACM Conference on Embedded
Networked Sensor Systems (SenSys), 
											Los Angeles, CA
											<span style="FONT-FAMILY: helvetica,arial,sans-serif">, Nov. 2003.</span>
										
								</li>
				</ul>
				
					
				<h5><a name="7._Useful_Links"></a>7. 
								Useful Links</h5>
				
					
				<ul>
					
									<li>
										<a href="http://www.tinyos.net/">TinyOS 
												website (Includings documentation, mailing lists, etc.)</a><span style="FONT-WEIGHT: bold"></span>
									</li>
									<li>
										
											<span style="FONT-WEIGHT: bold"></span><a href="http://csl.stanford.edu/%7Epal/pubs/tinyos-programming.pdf">TinyOS 
												Programming Tutorial</a>
									</li>
									<li>
										<a href="http://www.cse.wustl.edu/%7Eliang/tinyos-install/windows/index.html">
												TinyOS Windows Installation Guide</a>
									</li>
									<li>
										<a href="http://www.5secondfuse.com/tinyos/install.html">
												TinyOS installation for Moteiv's Tmote Sky</a>
									</li>
									<li>
										<a href="http://pes211214.levels.unisa.edu.au/%7Eproj2004y07/User%20Manual/new_page_2.htm">
												TinyOS installation</a>
								</li>
				</ul>
				
					
				<h5>8. 
								FAQ</h5>
				
								If you have any question, please feel free to contact <a style="FONT-FAMILY: arial" href="http://www4.ncsu.edu/%7Entezcan">
									Nurcan Tezcan</a> or Kaseima 
									Frye. 
								<br />
							<br />
						<br />
					
<?PHP include('netwis_footer.php'); ?>
