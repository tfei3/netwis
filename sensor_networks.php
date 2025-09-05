<?php
  // people.php
  $page_title = "Downloads – NetWIS Lab";
  $page_desc  = "Downalods - Sensor Networks";
  $active     = "Downloads";
  require __DIR__ . '/partials/header.php';
?>

<div class="expandable_naration">
	<h2>Sensor Networks</h2>

	<p>A Personal INdoor Sensor (PINS) network is a wireless sensor network deployed in-homes or in-buildings to monitor the indoor conditions and the humadaily behavior. Sensor nodes are usually equipped with passive infrared (PIR), temperature, acoustic sensors that can capture unpredictable conditionand behaviors. Nodes communicate via wireless links in a multi-hop fashion. Placement/orientation of these sensor nodes should be carefully designeto sense entire field of interest.</p>

	<h4 id="objectives">Objectives</h4>
	<div>
	 <p>Indoor environments have several challenges in terms of wireless communication and sensing. In this research, our objective is to investigate thproperties of indoor environments for wireless sensor networks. This would be veruseful since home itself is like a living organism. Furniture might move, peoplmight start to emit noise at certain hours, heat can change etc. Further, transmission and sensing coverage in indoor environments should be studieby an experimental study to capture the irregularity due to many obstaclesWe will further implement and test our algorithms to improve the reliable communication and event detection for several applications. </p>
	 <button class="collapse-button"><span data-icon="&#xe621;"> Collapse</span></button>
  </div>

	<h4 id="potential_applications">Potential Applications</h4>
	<div>
  	<p>PINS network composed of PIR supported motes can be used in variety of office (workplace) and home applications. Similar to the context-aware ho projects, PINS network can easily be deployed for human tracking for health car daily life monitoring, energy management (light, A/C turn on/off) etc. In such applications, benefits of PINS&nbsp; would be summarized as follows:</p>

  	<ul>
  		<li>adaptable to existing building with minor construction and maintenance</li>
  		<li>low-cost</li>
  		<li>ubiquitous</li>
  		<li>customizable based on the life style (workplace, home for elder people, children house, etc.)</li>
  		<li>can be improved to act as an emergency system</li>
  	</ul>

  	<p>An example monitoring application of PINS is<span style="FONT-STYLE: italic">exhibition monitoring</span>. Especiallin art exhibitions, it is very helpful to have the statistics of the numbeof visitors per each painting. Using a PINS network, sensor nodes that arplaced to monitor each painting may detect each visitor in front of the paintinand inform the base station in multi-hop fashion. Such information is alsvery critical from the designer point of view working on the visibility of each painting. We placed the sensors to detect the number of visitors for our research posters as shown below.</p>

  	<div style="text-align:center;"><img alt="PINS exhibition monitoring" src="img/pir_app.jpg" height="289" width="656" style="float:none;"/></div>
	  <button class="collapse-button"><span data-icon="&#xe621;"> Collapse</span></button>
  </div>

	<h4 id="PINS_network_setup">PINS Network Setup</h4>
	<div>
	  <p>For our testbed, we have deployed 18 Tmotes to our lab. Some of our Tmotes have PIR sensors visually (or virtually) tracking the people's daily interaction with their habitat and monitoring the indoor conditions. To track the people in an indoor environment, we use PIR sensors.&nbsp; Detailed explanation on our experiments and findings will be available soon.</p>
  	
    <table style="WIDTH: 100%; TEXT-ALIGN: left" border="1" cellpadding="2" cellspacing="2">
  		<tbody>
  			<tr>
  				<td><img alt="Timote Sky" src="img/tmote2%20002.jpg" style="LEFT: 269px; WIDTH: 256px; TOP: 1413px; HEIGHT: 185px" /></td>
  				<td>Here are the&nbsp; documents we used to configure <a href="http://www.moteiv.com/products/tmotesky.php">Tmote Sky</a>.
            <ul>
  						<li><a href="img/tmote-sky-datasheet.pdf">Moteiv Tmote Sky Datasheet (2006)</a> </li>
  						<li><a href="img/tmote-sky-quickstart.pdf">Moteiv Tmote Sky Quick start guide (2006)</a> </li>
  					</ul>
  					We have installed <a href="http://www.moteiv.com/software/"> Boomerang</a> 2.0.4 software which is fully compatible with existing TinyOS 1.x application. Boomerang is a complete setup that installs the Tnote development tools (TinyOS 1.x, Java 1.5 JDK, nesC, cygwin (for windows), Graphviz, etc.), USB driver to access Tmote as a virtual COM port, and motiv's networking application tools.
  				</td>
  			</tr>
  		</tbody>
  	</table>

		
  	<h5>1. PIR Sensor</h5>
  	<p>For motion detection, we connect a passive infrared (PIR) motion sensor to Tmote Sky. PIR sensor detects changes in infrared radiation which occur when there is movement by a person (or object) which is different in temperature from the surroundings. As sensor detects temperature differences, it is well suited to detecting the motion of people by their body temperature. We have configured an <span style="FONT-WEIGHT: bold">analog </span>(Parallax #555-28027) and a <span style="FONT-WEIGHT: bold">digital </span>(Panasonic AMN44121) sensorfor our testbed.</p>

  	<table style="WIDTH: 100%;" cellpadding="2" cellspacing="2">
  		<tbody>
  			<tr>
  				<td>
            <div style="text-align: center; margin-bottom: 15px;">
              <img alt="Parallax analog sensor" src="img/555-28027.gif" style="WIDTH: 127px; HEIGHT: 97px; float: none;"/><br>						 Parallax (#555-28027) (~6m&nbsp; range)
            </div>
  					<div style="text-align: center;">		
              <img alt="Panasonic digital sensor" src="img/pir.jpg" style="WIDTH: 120px; HEIGHT: 104px; float: none;" /><br />
  								Panasonic AMN44121(~10m range)
  					</div>
          </td>
  				<td>
            <img alt="sensor coverage " src="img/coverage.jpg" style="WIDTH: 432px; HEIGHT: 262px" /><br />
  				</td>
  			</tr>
  		</tbody>
  	</table>
  			
  	<h6>1.1 Connecting Analog</h6>
  	<table style="width: 100%;" border="0" cellpadding="2" cellspacing="2">
  		<tbody>
  			<tr>
  				<td>
            <img alt="Analog PIR Sensor" src="img/apir.JPG" style="WIDTH: 249px; HEIGHT: 179px" />
          </td>
  				<td>
            To connect an <span style="FONT-WEIGHT: bold">external analog sensor</span> to Tmote we use the 10-pin expansion connector on tmote board. We connect our PIR sensor output to expansion <span style="TEXT-DECORATION: underline">pin 3 (ADC0</span>).<br><br>

  						
  				  <span class="code">TOS_ADC_PIR_PORT = unique("ADCPort"),<br />
  						TOSH_ACTUAL_ADC_PIR_PORT = ASSOCIATE_ADC_CHANNEL(<br />
  						  &nbsp;&nbsp;&nbsp;&nbsp; INPUT_CHANNEL_A0,<br />
  						  &nbsp;&nbsp;&nbsp;&nbsp; REFERENCE_VREFplus_AVss,<br />
  						  &nbsp;&nbsp;&nbsp;&nbsp; REFVOLT_LEVEL_2_5)</span>
          </td>
  			</tr>
  		</tbody>
  	</table>
		

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
		


		
  	<h6>1.2 Connecting Digital PIR Sensor to Tmote</h6>
  	<table style="LEFT: 252px; TOP: 3324px; TEXT-ALIGN: left" border="0" cellpadding="2" cellspacing="2">
  		<tbody>
  			<tr>
  				<td><img alt="Tmote external digital sensor" src="img/tmote.jpg" style="WIDTH: 273px; HEIGHT: 204px" /></td>
  				<td>
            To use the <span style="FONT-WEIGHT: bold">external digital sensor</span> in Tmote we connect our PIR sensor output to&nbsp; expansion <span style="TEXT-DECORATION: underline">pin 7 (GIO1</span>). Since PIR (AMN44121) is low current consumption <span style="FONT-WEIGHT: bold">(digital output)</span>, 10 m detection, 3V DC type, we used one of the exclusive digital I/O port. One important detail, specified in the datasheet is that:<br />
             <br />
             &nbsp;-- If expansion pin 7 or 10 is used for digital I/O instead of analog inputs, R16/R14 must be populated with a 0 ohm resistor to enable GIO1/GIO0.
          </td>
  			</tr>
  		</tbody>
  	</table>
  		
    <div style="text-align: center;">
      <img alt="Pin Expansion" src="img/expansion2.JPG" style="WIDTH: 420px; HEIGHT: 187px;float: none"/>
      <img alt="Pin Expansion" src="img/expansion.jpg" style="WIDTH: 399px; HEIGHT: 194px;float: none" />
    </div>
	
		



	  <p>After we connected the  PIR sensor to the digital I/O pin 1, we use <span style="FONT-STYLE: italic">MSP430GeneralIO</span> interface to get the output from sensor. An important detail is that GIO1 is  designed to have interrupt capability. Thus, we catch up the motion by the  voltage change in the output of PIR sensor triggers an interrupt. Here is some  useful information to get output using GIO1.</p>


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
		
  	<h6>1.3 Digital versus Analog PIR</h6>			
  	<p>After configuring analog and the digital sensors, we decide to extend our test-bed using analog PIR sensors.</span> A comparison will be available between analog and digital PIR&nbsp; in terms of&nbsp; computability to Telos.	</p>		
    <button class="collapse-button"><span data-icon="&#xe621;"> Collapse</span></button>
  </div>

	<h4 id="4._Technical_Documents">Technical Documents</h4>
	<div>
  	<ul>
  		<li>
  			<a href="file:///K:/locker/WSN-testbed-Project/pins/doc/tmote-sky-datasheet.pdf">Moteiv Tmote Sky Datasheet (2006)</a> 
  		</li>
  		<li>
  			<a href="file:///K:/locker/WSN-testbed-Project/pins/doc/tmote-sky-quickstart.pdf">Moteiv Tmote Sky Quick start guide (2006)</a> 
  		</li>
  		<li>
  			<a href="file:///K:/locker/WSN-testbed-Project/pins/pewa.panasonic.com/pcsd/product/sens/pdf/amn.pdf">Digital PIR sensor specification</a> 
  		</li>
  		<li>
  			<a href="http://www.parallax.com/dl/docs/prod/audiovis/PIRSensor-V1.2.pdf">Analog PIR sensor specification</a><br />
  		</li>
  	</ul>
	  <button class="collapse-button"><span data-icon="&#xe621;"> Collapse</span></button>
  </div>

					
	<a name="5._An_example_Application"></a>
	<h4>An Example Application and Initial Results</h4>
	<div>
	  <p>Application specific configuration and results will be available soon.</p>
	  <button class="collapse-button"><span data-icon="&#xe621;"> Collapse</span></button>
  </div>

	<h4 id="6._Related_Publications_"></a>Related Publications</h4>
	<div>
  	<h5>1. Health-Care Applications of Wireless Sensor Networks</h5>
  	<ul>
  		<li>
  			<a href="http://www.dh.aist.go.jp/%7Eynishida/papers/ICEIS2005.pdf">Ultrasonic Sensors for the Elderly and Caregivers in a Nursing Home</a>, Toshio Hori, Yoshifumi Nishida, ICEIS, 2005.
  		</li>
  		<li>
  			<a href="http://www.cs.virginia.edu/papers/wlsn_health_HCMDSS05.pdf">Wireless Sensor Networks for In-Home Healthcare: Potential and Challenges</a>, J. A. Stankovic, Q. Cao, T. Doan, L. Fang, Z. He, R. Kiran, S. Lin, S. Son, R. Stoleru, A. Wood, HCMDSS, 2005.
  		</li>
  		<li>
  			<a href="http://seattleweb.intel-research.net/people/matthai/pubs/debull06.pdf">Towards Activity Databases: Using Sensors and Statistical Models to Summarize People's Lives</a>, Tanzeem Choudhury, Matthai Philipose, Danny Wyatt, Jonathan Lester, Data Engineering Bulletin, 2006.
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

  	<h5>2. In-door, Home Wireless Sensor Networks</h5>
  	<ul>
  		<li>
  			<a href="http://www.pittsburgh.intel-research.net/%7Ekpapagia/papers/homenet.pdf">Experimental 
  				Characterization of Home Wireless Networks and Design Implications</a>, K. Papagiannaki, M. Yarvis, and W. S. Conner, in <i>IEEE Infocom</i>, Barcelona, Spain, April, 2006.
  		</li>
  		<li>
  			<a href="http://crpit.com/confpapers/CRPITV21WMeyer.pdf">A Survey of Research on Context-Aware Homes</a>, Sven Meyer and Andry Rakotonirainy, WICAPUC, 2003.
  		</li>
  		<li>
  			<a href="http://www.cs.toronto.edu/%7Etomhart/papers/secon.pdf">Simplified Simulation Models for Indoor MANET Evaluation are not Robust</a>, Andres Lagar Cavilla, Gerard Baron, Thomas E. Hart,Lionel Litty and Eyal de Lara, Secon 2004.
  	  </li>
  	</ul>

  	<h5>3. Other Experimental Studies for Wireless Sensor Networks</h5>
  	<ul>
  	  <li>
  	  	<a href="http://www.cs.virginia.edu/papers/tracking-mobisys04.pdf">Energy-Efficient Surveillance System Using Wireless Sensor Networks</a>, Tian He, Sudha Krishnamurthy, John A. Stankovic, Tarek Abdelzaher, Liqian Luo, Radu Stoleru, Ting Yan, Lin Gu, MobiSys, 2004.
  	  </li>
  	  <li>
  	  	<a href="http://lecs.cs.ucla.edu/%7Edeepak/PAPERS/empirical.pdf">Complex Behavior at Scale: An Experimental Study of Low-Power Wireless Sensor Networks</a>, Deepak Ganesany, Deborah Estrin, Alec Woo, David Culler, Tech. Report, UCLA, 2002.
  	  </li>
  	  <li>
  	  	<a href="http://ieeexplore.ieee.org/iel5/10355/32951/01542773.pdf?arnumber=1542773">An Experimental Study of Routing and Data Aggregation in Sensor Networks</a>, Ossama Younis, Sonia Fahmy, MASS 2005.
  	  </li>
  	  <li>
  	  	<a href="http://www.cs.virginia.edu/%7Estankovic/psfiles/f103-gu.pdf">Lightweight Detection and Classification for Wireless Sensor Networks in Realistic Environments</a>, Lin Gu, Dong Jia, Pascal Vicaire, Ting Yan, Liqian Luo, Ajay Tirumala, Qing Cao, Tian He, John A. Stankovic, Tarek Abdelzaher, Bruce H. Krogh, SenSys, 2004.
  	  </li>
  	  <li>
  	  	<a href="http://delivery.acm.org/10.1145/950000/941357/p38-conner.pdf?key1=941357&amp;key2=7536854711&amp;coll=&amp;dl=ACM&amp;CFID=15151515&amp;CFTOKEN=6184618">Experimental Evaluation of Synchronization and Topology Control for In-Building Sensor Network Applications</a>, W. Steven Conner, Jasmeet Chhabra, Mark Yarvis, Lakshman Krishnamurthy, WSNA, 2003.
  	  </li>
  	  <li>
  	  	<a href="http://www.isi.edu/div7/publication_files/Son04a.pdf">Experimental study of the effects of Transmission Power Control and Blacklisting in Wireless Sensor Networks</a>, Dongjin Son, Bhaskar Krishnamachari, and John Heidemann, Secon 2004.
  	  </li>
  	  <li>
  	  	<a href="http://www.isi.edu/%7Ejohnh/PAPERS/Son06a.pdf">Experimental Study of Concurrent Transmission in Wireless Sensor Networks</a>, Dongjin Son, Bhaskar Krishnamachari, John Heidemann, SenSys 2006.
  	  </li>
  	  <li>
  	  	<a href="http://www.cs.virginia.edu/wsn/vigilnet/paper/VigilNet-TOSN.pdf">VigilNet: An Integrated Sensor Network System for Energy-Efficient Surveillance</a>, Tian He, Sudha Krishnamurthy, John A. Stankovic, Tarek Abdelzaher, Liqian Luo, Radu Stoleru, Ting Yan, Lin Gu, TOSN, 2006.
  	  </li>
  	  <li>
  	  	<a href="http://www.cs.colorado.edu/%7Erhan/Papers/p28-hartung.pdf">FireWxNet: A MultiTiered Portable Wireless System for Monitoring Weather Conditions in Wildland Fire Environments</a>, ACM MobiSys 2006.
  	  </li>
  	  <li>
  	  	<a href="http://enl.usc.edu/papers/cache/Zhao03.pdf">Understanding &nbsp;packet delivery performance in dense wireless sensor networks</a>, J. Zhao and R. Govindan,&nbsp; in Proc. of ACM Conference on Embedded Networked Sensor Systems (SenSys), Los Angeles, CA, Nov. 2003. 	
  	  </li>
  	</ul>
	  <button class="collapse-button"><span data-icon="&#xe621;"> Collapse</span></button>
  </div>

	<h4 id="7._Useful_Links">Useful Links</h4>	
	<div>
  	<ul>
  		<li>
  			<a href="http://www.tinyos.net/">TinyOS 
  					website (Includings documentation, mailing lists, etc.)</a>
  		</li>
  		<li>
  			<a href="http://csl.stanford.edu/%7Epal/pubs/tinyos-programming.pdf">TinyOS Programming Tutorial</a>
  		</li>
  		<li>
  			<a href="http://www.cse.wustl.edu/%7Eliang/tinyos-install/windows/index.html">TinyOS Windows Installation Guide</a>
  		</li>
  		<li>
  			<a href="http://www.5secondfuse.com/tinyos/install.html">TinyOS installation for Moteiv's Tmote Sky</a>
  		</li>
  		<li>
  			<a href="http://pes211214.levels.unisa.edu.au/%7Eproj2004y07/User%20Manual/new_page_2.htm">TinyOS installation</a>
  	  </li>
  	</ul>
	  <button class="collapse-button"><span data-icon="&#xe621;"> Collapse</span></button>
  </div>
	
	<p>If you have any question, please feel free to contact <a href="http://www4.ncsu.edu/%7Entezcan">Nurcan Tezcan</a> or Kaseima Frye. </p>
</div>		

<?php require __DIR__ . '/partials/footer.php'; ?>