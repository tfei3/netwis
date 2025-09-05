<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title><?PHP if($pageTitle && $pageTitle!="") echo $pageTitle." @ "; ?>NetWis Lab</title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <link href="/netwis/styles.css" rel="stylesheet" type="text/css" />

</head>
<body>
<div id="wrapper">
	<div id="top_area">
		<a href="/netwis/" id="head_link">
			<img src="/netwis/images/logo_extra.gif" style="border:0; width: 221px; height: 160px; position:relative; float:left;" alt="NETWIS: " />
			<img src="/netwis/images/netwis_heading.gif" style="border:0; width: 740px; height: 160px; position:relative; float:right;" alt="Networking of Wireless Information System Lab" />
		</a>
		<ul id="hor_nav">  
			<li>
				<a href="/netwis/">
					<img src="/netwis/images/HOME_tab.gif" style="float: left; position: relative;" height="20" width="80" alt="Overview" />
				</a>
			</li>
			<li>
				<a href="/netwis/people.php">
					<img src="/netwis/images/PEOPLE_tab.gif" style="float: left; position: relative;" height="20" width="80" alt="People" />
				</a>
			</li>
			<li>
				<a href="/netwis/selected_publications.php">
					<img src="/netwis/images/PUBLICATIONS_tab.gif" style="float: left; position: relative;" height="20" width="100" alt="Publications" />
				</a>
			</li>
			<li>
				<a href="/netwis/projects.php">
					<img src="/netwis/images/PROJECTS_tab.gif" style="float: left; position: relative;" height="20" width="80" alt="Projects" />
				</a>
			</li>
			<!-- More navigation as needed			<li><a href="/netwis/#">Navigation 6</a></li>			-->
		</ul>
		<div id="extra1">
			<h4><?PHP if($pageName) echo $pageName; ?></h4>
		</div>
	</div>
<div id="middle_area">
	<div id="side_content">
		<div class="menu">
			<ul>
			  <li class="active"> <big>&nbsp;&nbsp;<span style="font-weight: bold;">Research</span></big> </li>
			  <li> <a href="/netwis/Fundamental_Properties.php" title="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--Fundamental Properties </a> </li>
			  <li> <a href="/netwis/Design_Optimization.php" title="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--Design &amp; Optimization </a> </li>
			  <li> <a href="/netwis/Protection_Robustness.php" title="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--Protection &amp; Resilience </a> </li>
			  <li> <a href="/netwis/Systems_Applications.php" title="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--Systems &amp; Applications</a></li>
			</ul>
		</div>
		<div class="menu">
			<ul>
			  <li class="active"> <big>&nbsp;&nbsp;<span style="font-weight: bold;">Documents/Download</span></big> </li>
			  <li> <a href="/netwis/mobility_model.php" title="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--Mobility model </a> </li>
			  <li> <a href="/netwis/step2.php" title="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--STEP2 in WLANs </a> </li>
			  <li> <a href="/netwis/sensor_networks.php" title="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--Sensor Networks </a> </li>
			  <li> <a href="/netwis/multihop_networks.php" title="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--Multihop Networks </a> </li>
			</ul>
		</div>
		<div class="menu">
			<ul>
			  <li class="active"> <big>&nbsp;&nbsp;<span style="font-weight: bold;">FAQs</span></big> </li>
			  <li> <a href="/netwis/Phd_tips.php" title="">&nbsp;&nbsp;&nbsp;&nbsp;--Tips for Ph.D study </a> </li>
			  <li> <a href="/netwis/prospective_student.php" title="">&nbsp;&nbsp;&nbsp;&nbsp;--Prospective students </a> </li>
			</ul>
		</div>
		 <span style="text-decoration: none;"><big
		 style="font-weight: bold; color: rgb(204, 0, 0);"><a
		 style="color: rgb(204, 0, 0);" href="http://www.ece.ncsu.edu">ECE</a><span style="color: rgb(204, 0, 0);">@</span></big></span><a
		 style="text-decoration: none;" href="http://www.ncsu.edu/"><img alt="NC State University" src="/netwis/images/wolfpack1.gif"
		 style="border: 0px solid ; left: 0px; width: 119px; position: relative; top: 5px; height: 45px;" />
		</a>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>

		<?PHP if($newsOn) { ?>
		<div class="updates boxed">
<br>
<br>
			<h3 class="title"><small>News - 05/08/2013</small>&nbsp;</h3>
			<div class="content">
			<ul>
			  <li>
				<ul>
				  <li>
&nbsp;&nbsp;&nbsp;&nbsp;				
&nbsp;&nbsp;&nbsp;&nbsp;

Zhuo Lu who has successfully passed his PhD defense on "Modeling and Evaluating the Impact of Denial-of-Service Attacks in Emerging Wireless and Mobile Applications." Congratulations again, Dr. Lu! 
<span style="font-weight: bold;"><br />


					<small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="/netwis/news.php">More&gt;&gt;</a></small> </p>
				  </li>
				</ul>
			  </li>
			</ul>
			</div>
		</div>
		<?PHP } ?>
		<?PHP if($visitorsOn) { ?>
		<div class="updates boxed">
		<h2 class="title" style="color: rgb(96, 103, 135); text-align:center"><small><strong>Visitors&nbsp;
		</strong></small><a href="http://monster.gostats.com/click.xml?4136"> <img
		 src="http://monster.gostats.com/bin/count?a=4136&amp;t=4&amp;i=7&amp;z="
		 style="border-width: 0px;" alt="Hits" /></a></h2>
		<!-- GoStats.com Simple HTML based code --><!-- End GoStats.com Simple HTML based code -->
		</div>
		<?PHP } ?>
	</div>
	
	<div id="main" style="position:relative; float:right; margin:0 0 20px 0; top:0; left:0; padding:0; border:0;">
		<div id="extra2"> </div>
		<div id="welcome">
