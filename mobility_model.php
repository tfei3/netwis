<?PHP 
	$pageName="Mobility Model";
	$pageTitle ="Mobility Model";
	include('netwis_header.php');
?>
				<p><a href="#descriptions">SMS Model Description</a> &nbsp;&nbsp; <a href="#properties">
						Properties</a> &nbsp; <a href="#code">SMS Ns-2 Code</a>&nbsp; <a href="#FAQ">SMS 
						FAQs</a>&nbsp;&nbsp; &nbsp; <a href="#related">Related Publications</a>
				</p>
				<a name="descriptions" id="descriptions"></a>
				<h5>1. SMS Mobility Model Description
				</h5>
				
					<p>
						The Semi-Markov Smooth (SMS) mobility model is a novel mobility model in which 
						each SMS movement contains a random number of equal-length time steps. 
						According to the physical law of a smooth motion, a moving object would 
						experience speed acceleration, stable speed and speed deceleration in one 
						movement. And a temporal correlations exists during the velocity transition. 
						Based on this observation, in each SMS movement, a node will randomly select a 
						target direction phi_{alpha} and a target speed v_{alpha} as the expected 
						direction and speed of the movement. Each SMS movement contains three 
						consecutive moving phases: Speed Up phase for even speed acceleration from 0 
						m/s to the target speed v_{alpha}; Middle Smooth phase for maintaining stable 
						velocities which respectively fluctuate around v_{alpha} and phi_{alpha} in 
						each time step; and Slow Down phase for even speed deceleration to 0 m/s. The 
						node experiences a random pause time after each SMS movement.
					</p>
					<p style="text-align:center"><img style="WIDTH: 467px; HEIGHT: 301px" alt="SMS Mobility Model" src="images/sms_1.gif" /></p>
				<a name="properties" id="properties"></a>
				<h5>2. SMS Mobility Model Properties</h5>
				
					<p>
						The Semi-Markov Smooth (SMS) mobility model is designed to specify the 
						movements of individual users. Because i) it complies with the physical law of 
						smooth motion, SMS model always generates smooth movements. According to its 
						stationary moving behaviors, ii) the SMS model generates stable node speed 
						without speed decay problem; and iii) it maintains uniform node distribution 
						all the time. By adjusting model parameters, the SMS model can be easily and 
						flexibly controlled to support various network scenarios. Therefore, the SMS 
						model is a promising benchmark mobility model for both simulation and 
						analytical study of wireless mobile networks.
					</p>
				
				<p>
					<a name="publications" id="publications"></a>
				</p>
				<h3>Publications
				</h3>
				
					<ol>
						<li>
							Ming Zhao and Wenye Wang, "<span style="FONT-WEIGHT: bold">A Unified Mobility Model for Analysis and
Simulation of Mobile Wireless Networks,</span>"&nbsp; submitted for journal publications<span style="FONT-STYLE: italic">, December</span>
								2006.
						</li>
						<li>
							Ming Zhao and Wenye Wang, <strong>"A Novel Semi-Markov Smooth Mobility Model for 
								Mobile Ad Hoc Networks," </strong>in the Proc. of IEEE GLOBECOM'06, (<strong>Best 
									Paper Award</strong>), San Francisco, CA, November 2006.
						</li>
						<li>
							Ming Zhao and Wenye Wang, <strong>" Design and Applications of A Smooth Mobility 
								Model for Mobile Ad Hoc Networks," </strong>in the Proc. of IEEE Milcom'06, 
							Washington, D.C. October 2006.
							<br />
							<a name="code" id="code"></a>
						</li>
					</ol>
				
				<h5>3. Ns-2 Code of SMS Model
				</h5>
				<p>We are happy to share our code and documents with you. We only ask that any 
					published research from using our code include a reference to the corresponding 
					paper.<br />
					Please download the ns-2 code:
					<span class="style2">
						<a href="download/smscode.zip" class="style1">smscode.zip</a>
						
					</span></p>
				<a name="FAQ" id="FAQ"></a>
				<h5><a href="/netwis/mobility_model_faq.php">4. SMS Model FAQ &gt;&gt;&gt; </a>
				</h5>
				<p><a name="related" id="related"></a>
				</p>
				<h5>5. Related Publications
				</h5>
				<h3><span style="COLOR: rgb(60,60,81)">Fan Bai and Dr.Ahmed Helmy @
University of Southern California</span><a href="http://ceng.usc.edu/%7Ehelmy/#mars"> </a>
				</h3>
				<ol>
					<li>
						F. Bai, N. Sadagopan, A. Helmy, " <a href="http://nile.usc.edu/%7Ehelmy/important/important-adhoc-journal-sub.ps">
							The <em>IMPORTANT </em>Framework for Analyzing the Impact of Mobility on 
							Performance of Routing for Ad Hoc Networks </a>", <em>AdHoc Networks Journal - 
							Elsevier Science, Vol. 1, Issue 4, pp. 383-403, November 2003. </em>
					</li>
						<li>
						F. Bai, A. Helmy, " <a href="http://nile.usc.edu/%7Ehelmy/important/Modified-Chapter2-5-30-04.pdf">
							The <em>IMPORTANT </em>Framework for Analyzing and Modeling the Impact of 
							Mobility in Wireless Adhoc Networks </a>
					", Book Chapter in the book on "Wireless Ad Hoc and Sensor Networks", Kluwer 
					Academic Publishers. To appear June 2004.
					</li>
						<li>
						F. Bai, A. Helmy, " <a href="http://nile.usc.edu/%7Ehelmy/important/Modified-Chapter1-5-30-04.pdf">
							A Survey of Mobility Modeling and Analysis in Wireless Adhoc Networks </a>", 
						Book Chapter in the book on "Wireless Ad Hoc and Sensor Networks", Kluwer 
						Academic Publishers. To appear June 2004.
					</li>
				</ol>
				<h3 style="COLOR: rgb(60,60,81)">
					Toilers Group by Dr. Tracy Camp @ Colorado School of Mines</h3>
				<ol>
					<li>
						T. Camp, J. Boleng, and V. Davies, <a href="http://toilers.mines.edu/pub/Public/PublicationList/Models.pdf">
							A Survey of Mobility Models for Ad Hoc Network Research</a>, Wireless 
					Communication &amp; Mobile Computing (WCMC): Special issue on Mobile Ad Hoc 
					Networking: Research, Trends and Applications, vol. 2, no. 5, pp. 483-502, 2002 
					.
					</li>
						<li>
						W. Navidi, T. Camp, and N. Bauer, <a href="http://toilers.mines.edu/pub/Public/PublicationList/CSM-MCS-03-08.pdf">
							Improving the Accuracy of Random Waypoint Simulations Through Steady-State 
							Initialization</a>, Proceedings of the 15th International Conference on 
					Modeling and Simulation (MS '04) , pp. 319-326, March 2004.
					</li>
						<li>
						W. Navidi and T. Camp,<a href="http://toilers.mines.edu/pub/Public/PublicationList/CSM-MCS-03-04.pdf">
							Stationary Distributions for the Random Waypoint Mobility Model</a>, 
					IEEE Transactions on Mobile Computing, vol. 3, no. 1, pp. 99-108, January-March 
					2004.
					</li>
						<li>
						Vanessa Davies, <a href="http://toilers.mines.edu/pub/Public/PublicationList/vanessa-thesis.pdf">
							Evaluating Mobility Models Within An Ad Hoc Network</a>, M.S. Thesis, 2000.
					</li>
				</ol>
				<h3 style="COLOR: rgb(60,60,81)">Jungkeun Yoon and Mingyan Liu @ University of 
					Michigan</h3>
				<ol style="TEXT-ALIGN: left">
					<li>
						J. Yoon, M. Liu and B. Noble, <a href="http://www.eecs.umich.edu/%7Emingyan/pub/random-waypoint.pdf">
							"Random Waypoint Considered Harmful"</a>, in Proc. <i>IEEE INFOCOM</i>, 
					vol 2, pp 1312-1321, April 2003, San Francisco, CA.
					</li>
						<li>
						J. Yoon, M. Liu and B. Noble, <a href="http://www.eecs.umich.edu/%7Emingyan/pub/p0319-yoon.pdf">
							"Sound Mobility Models"</a>, in Proc. <i>ACM MobiCom</i>, September 
					2003, San Diego, CA.
					</li>
						<li>
						J. Yoon, M. Liu and B. Noble, "A general framework to construct stationary 
						mobility models for the simulation of mobile networks", to appear, <i>IEEE Trans. 
							Mobile Computing</i>, 2005.</li>
				</ol>
				<h3><strong><span style="COLOR: rgb(60,60,81)">Christian Bettstetter
@ DoCoMo Euro-Labs (http://www.bettstetter.com/)</span>
					</strong>
				</h3>
				<ol>
					<li>
						<div>Christian Bettstetter. Mobility Modeling, Connectivity, and 
							Adaptive Clustering in Ad Hoc Networks. Utz Verlag, 2004. ISBN 3-8316-0397-9. (<strong>
								<a href="publications/bettstetter-2004-diss.zip">sample chapters </a>)</strong></div>
					</li>
						<li>
						<div>
							Christian Bettstetter, Hannes Hartenstein, and Xavier Paez-Costa <strong><a href="http://journals.kluweronline.com/article.asp?PIPS=5273702">
									Stochastic Properties of the Random Waypoint Mobility Model </a></strong>
							. <a href="http://www.kluweronline.com/issn/1022-0038"><em>ACM/Kluwer Wireless Networks </em>
							</a>, Special Issue on Modeling and Analysis of Mobile Networks, vol. 10, no. 
							5, pp. 555-567, Sept 2004.
						</div>
					</li>
					<li>
						<div>
							Christian Bettstetter. <strong>Node Distances, Node Degree, and Connectivity of Ad 
								Hoc Networks with Random Waypoint Mobility </strong>. <em>Technical Report 
								TUM-LKN 2003/01 </em>, Technische Universit München, Institute of 
							Communication Networks, Munich, Germany, Mar 2003
						</div>
					</li>
					<li>
						<div>Christian Bettstetter, Giovanni Resta, and Paolo Santi. <strong>The 
								Node Distribution of the Random Waypoint Mobility Model for Wireless Ad Hoc 
								Networks </strong>. <em>Technical Report TUM-LKN 2002/01 </em>, Technische 
							Universit?t München, Institute of Communication Networks, Munich, Germany, Sept 
							2002.
						</div>
					</li>
				</ol>
				<h3 style="COLOR: rgb(60,60,81)">Jean-Yves Le Boudec @EPFL</h3>
				<ol style="TEXT-ALIGN: left">
					<li>
						<a href="http://ica1www.epfl.ch/RandomTrip/">The Random Trip Mobility Model</a> 
						,<a><strong>"Perfect Simulation and Stationarity of a Class of Mobility Models," </strong>
						</a>J.-Y. Le Boudec and M. Vojnovic, IEEE Infocom 2005, Miami, FL, 2005 ( <em>Infocom 
							2005 Best Paper Award) </em>) <a href="http://lcawww.epfl.ch/Publications/LeBoudec/lebvoj04.pdf">
							pdf</a>.
					</li>
					<li>
						<a href="http://ica1www.epfl.ch/RandomTrip/">Other Mobility Model References</a></li>
				</ol>
				<br />
<?PHP include('netwis_footer.php'); ?>