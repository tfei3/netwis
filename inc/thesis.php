<?php

function get_list_thesis($thesis_item) {
    
    $output = '';
    $output = $output . '<p>[';
    $output = $output . $thesis_item["code"] . '] ';
    $output = $output . $thesis_item["author"] . ', "';
    $output = $output . $thesis_item["title"] . '," ';
    $output = $output . $thesis_item["type"] . ', ';
    $output = $output . $thesis_item["dept"] . ', ';
    $output = $output . $thesis_item["date"] . '.</p>';

    return $output;
}

$thesis = array();
$thesis[20] = array(
    "code" => "MS-xf-13",
    "type" => "MS Thesis",
    "author" => "Xiaozhou Fang",
    "title" => "Neighbor Graph Based Proactive Caching for Seamless Handover in Content-Centric Network",
    "dept" => "Computer Engineering",
    "doc" => "",
    "date" => "October, 2013"
);
$thesis[19] = array(
    "code" => "PHD-sqq-13",
    "type" => "PhD Dissertation",
    "author" => "Shawqi Q. Karbash",
    "title" => "Modeling and Analysis of Wireless Network Reliability",
    "dept" => "Computer Engineering",
    "doc" => "",
    "date" => "May, 2013"
);
$thesis[18] = array(
    "code" => "PHD-zl-13",
    "type" => "PhD Dissertation",
    "author" => "Zhuo Lu",
    "title" => "Modeling and Evaluating the Impact of Denial-of-Service Attacks in Emerging Wireless and Mobile Applications",
    "dept" => "Computer Engineering",
    "doc" => "",
    "date" => "May, 2013"
);
$thesis[17] = array(
    "code" => "MS-mbs-13",
    "type" => "MS Thesis",
    "author" => "Mohit B. Shah",
    "title" => "End to End Communication Architecture and Technology Performance Evaluation: Ethernet and WiFi for Substation Automation Networks",
    "dept" => "Computer Engineering",
    "doc" => "",
    "date" => "Mar, 2013"
);
$thesis[16] = array(
    "code" => "PhD-ls-12",
    "type" => "PhD Dissertation",
    "author" => "Lei Sun",
    "title" => "Understanding the Performance and Topology of Multi-Hop Wireless Cognitive Radio Networks",
    "dept" => "Computer Engineering",
    "doc" => "",
    "date" => "April, 2013"
);
$thesis[15] = array(
    "type" => "PhD Dissertation",
    "code" => "PhD-yx-10",
    "author" => "Yi Xu",
    "title" => "Understanding the Performance and Resilience of Large-Scale Multi-Hop Wireless Networks",
    "dept" => "Computer Engineering",
    "date" => "April, 2010"
);
$thesis[14] = array(
    "type" => "MS Thesis",
    "code" => "MS-mk-09",
    "author" => "Mohit Khanna",
    "title" => "Communication Challenges for the FREEDM System",
    "dept" => "Electrical Engineering",
    "date" => "August, 2009"
);
$thesis[13] = array(
    "type" => "PhD Dissertation",
    "code" => "PhD-mz-09",
    "author" => "Ming Zhao",
    "title" => "Design, Modeling, and Analysis of User Mobility and Its Impact on Multi-Hop Wireless Networks",
    "dept" => "Computer Engineering",
    "date" => "April, 2009"
);
$thesis[12] = array(
    "type" => "PhD Dissertation",
    "code" => "PhD-aka-09",
    "author" => "Avesh K. Agarwal",
    "title" => "Performance and Protection Management in Wireless Networks",
    "dept" => "Computer Science",
    "date" => "April, 2009"
);
$thesis[11] = array(
    "type" => "PhD Dissertation",
    "code" => "PhD-fx-08",
    "author" => "Fei Xing",
    "title" => "Modeling, Design, and Analysis on the Resilience of Large-scale Wireless Multi-hop Networks",
    "dept" => "Computer Engineering",
    "date" => "November, 2008"
);
$thesis[10] = array(
    "type" => "PhD Dissertation",
    "code" => "PhD-nt-08",
    "author" => "Nurcan Tezcan",
    "title" => "Energy-Efficient And Reliable Data Transfer in Wireless Sensor Networks",
    "dept" => "Computer Engineering",
    "date" => "September, 2008"
);
$thesis[9] = array(
    "type" => "MS Thesis",
    "code" => "MS-hx-05",
    "author" => "Heng Xia",
    "title" => "Effects of Medium Access Control on the Capacity of Mobile Ad Hoc Networks",
    "dept" => "Electrical Engineering",
    "date" => "August, 2005"
);
$thesis[8] = array(
    "type" => "PhD Dissertation",
    "code" => "PhD-wl-05",
    "author" => "Wei Liang",
    "title" => "Design and Analysis of Authentication Mechanisms in Single- and Multi-Hop Wireless Networks",
    "dept" => "Electrical Engineering",
    "date" => "August, 2005"
);
$thesis[7] = array(
    "type" => "MS Thesis",
    "code" => "MS-jks-05",
    "author" => "Jung Kee Song",
    "title" => "Performance Evaluation of Handoff between UMTS/802.11b based on Mobile IP and Stream Control Transmission Protocol",
    "dept" => "Computer Science",
    "date" => "May, 2005"
);
$thesis[6] = array(
    "type" => "Technical Report",
    "code" => "TR-01-05",
    "author" => "Ming Zhao and Wenye Wang",
    "title" => "Semi-Markov Mobility Model for Mobile Wireless Networks",
    "dept" => "TR01-NeTWIS-05",
    "date" => "May, 2005"
);
$thesis[5] = array(
    "type" => "Technical Report",
    "code" => "TR-03-04",
    "author" => "Nurcan Tezcan and Wenye Wang",
    "title" => "ART:Asymmetric Reliable Transport Mechanism for Wireless Sensor Networks",
    "dept" => "TR03-NeTWIS-04",
    "date" => "December, 2004"
);
$thesis[4] = array(
    "type" => "Technical Report",
    "code" => "TR-02-04",
    "author" => "Avesh K. Agarwal and Jorinjit S. Gill",
    "title" => "An Experimental Study of Cross-Layer Wireless Security in Public Access Wireless Networks",
    "dept" => "TR02-NeTWIS-04",
    "date" => "May, 2004"
);
$thesis[3] = array(
    "type" => "Technical Report",
    "code" => "TR-01-04",
    "author" => "Wei Liang and Wenye Wang",
    "title" => "Authentication and Service Management in Heterogeneous Mobile Environments",
    "dept" => "TR01-NeTWIS-04",
    "date" => "May, 2004"
);
$thesis[2] = array(
    "type" => "Technical Report",
    "code" => "TR-02-03",
    "author" => "Cheolho Lee and Wenye Wang",
    "title" => "Dynamic End-to-End Call Admission Control for Multi-Layer QoS Constraints in Wireless Networks",
    "dept" => "TR02-NeTWIS-03",
    "date" => "May, 2003"
);
$thesis[1] = array(
    "type" => "Technical Report",
    "code" => "TR-01-03",
    "author" => "Suresh. V. Subramanian",
    "title" => "The Overview of MPLS & IP Multicasting",
    "dept" => "TR01-NeTWIS-03",
    "date" => "May, 2003"
);


?>