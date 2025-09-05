<?php

function get_list_projects($project) {
    
    $output = '';
    $output = $output . '<li>';   
    $output = $output . '<h6>' . $project["title"] . '</h6>';
    $output = $output . '<p>Sponsor: ' . $project["sponsor"] . '<br>';
    $output = $output . 'Duration: ' . $project["duration"] . '<br>';
    $output = $output . 'PI(s): ' . $project["PI"] . '</p>';
    $output = $output . '</li>';

    return $output;
}

$projects = array();
$projects[8] = array(
  "title" => "Reliable Medium Access in Wireless Networks: Vulnerabilities, Protection, and Recovery",
  "sponsor" => "Army Research Office",
  "sponsor_link" => "http://www.nsf.gov/div/index.jsp?org=ECS",
  "duration" => "August 2007 - May 2011",
  "PI" => "Dr. Wenye Wang and Dr. Peng Ning"
);
$projects[7] = array(
  "title" => "International Research and Education in Engineering (IREE)",
  "sponsor" => "National Science Foundation, Electrical & Communications Systems (ECS)",
  "sponsor_link" => "http://www.nsf.gov/div/index.jsp?org=ECS",
  "duration" => "May 2009 - Aug. 2009 (Supplemental)",
  "PI" => "Dr. Wenye Wang"
);
$projects[6] = array(
  "title" => "CAREER: A Unified Study of Resilience-to-Failure in Multihop Wireless Networks",
  "sponsor" => "National Science Foundation,  Faculty Early Career Award (CISE)",
  "sponsor_link" => "http://www.nsf.gov/funding/pgm_summ.jsp?pims_id=5262",
  "duration" => "March 2006 - February 2011",
  "PI" => "Dr. Wenye Wang"
);
$projects[5] = array(
  "title" => "Intel Corporation Equipment Donation: Wireless Networking Project",
  "sponsor" => "Intel Corporation",
  "sponsor_link" => "http://www.intel.com/content/www/us/en/homepage.html",
  "duration" => "September 2006",
  "PI" => "Dr. Wenye Wang"
);
$projects[4] = array(
  "title" => "Time- and Data-Sensitive Wireless Networked Control Systems",
  "sponsor" => "National Science Foundation, Electrical & Communications Systems (ECS)",
  "sponsor_link" => "http://www.nsf.gov/div/index.jsp?org=ECS",
  "duration" => "September 2005 - August 2009",
  "PI" => "Dr. Wenye Wang and Dr. Mo-Yuen Chow"
);
$projects[3] = array(
  "title" => "The Impact of Cross-Layer Control on Service Availability in Public Access Wireless Networks",
  "sponsor" => "Center for Advanced Computing and Communications",
  "sponsor_link" => "http://people.ee.duke.edu/~kst/overview.html",
  "duration" => "July 2004 - June 2005",
  "PI" => "Dr. Wenye Wang and Dr. Mike Devetsikiotis"
);
$projects[2] = array(
  "title" => "Distributed Inter-System Authentication Mechanisms for Seamless Roaming in Multi-Network Environments",
  "sponsor" => "National Science Foundation, Networking Research (CISE) ",
  "sponsor_link" => "http://www.nsf.gov/funding/pgm_summ.jsp?pims_id=5151&org=NSF",
  "duration" => "October 2003 -  September 2006",
  "PI" => "Dr. Janise Y. McNair (University of Florida) and Dr. Wenye Wang"
);
$projects[1] = array(
	"title" => "Authentication and Service Management in Heterogeneous Mobile Environments",
	"sponsor" => "Center for Advanced Computing and Communications",
  "sponsor_link" => "http://people.ee.duke.edu/~kst/overview.html",
  "duration" => "July 2003 - June 2004",
  "PI" => "Dr. Wenye Wang and Dr. Mike Devetsikiotis"
);


?>