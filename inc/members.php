<?php

  function get_list_gradstudent($member) {
    $output = '';
    $output = $output . '<li>';
    $output = $output . '<div class="photo-member"><img src="' . $member["photo-link"] . '"></div>';
    $output = $output . '<h4 class="name-member"><a href="'. $member["webpage"] .'" target="blank">' . $member["name"] . '</a></h4>';
    $output = $output . '<h6>' . $member["subtype"] . '</h6>';
    $output = $output . '<p class="email-member"><a href="mailto:' . $member["email"] .'?Subject=Hello" target="_top"><span data-icon="&#xe604;"></span> ' . $member["email"] . '</a></p>';
    $output = $output . '<p class="short-bio">' . $member["bio"] . '</p>';
    $output = $output . '</li>';
    return $output;
  }
  

  function get_list_formerstudent($member) {
    $output = '';
    $output = $output . '<li>';
    $output = $output . '<div class="photo-member"><img src="' . $member["photo-link"] . '"></div>';
    $output = $output . '<h4 class="name-member">' . $member["name"] . '</h4>';
    $output = $output . '<h6>' . $member["subtype"] . '</h6>';
    $output = $output . '<p class="short-bio">' . $member["name"];

    if (!empty($member["thesis"])) {
        $output = $output . ' graduated with the thesis "';
        $output = $output . $member["thesis"] . '." He';
    }
    if (!empty($member["affiliation"])) {
        $output = $output . ' is currently with '. $member["affiliation"] .'.</p>';
    }
    $output = $output . '</li>';

    return $output;
  }



  $members = array();
  $members[29] = array(
    "type" => "grad",
    "name" => "Jie Wang",
    "photo-link" => "img/people/jie.jpg",
    "subtype" => "Ph.D. Student",
    "department" => "Department of Electrical and Computer Engineering",
    "affiliation" => "NC State University, Raleigh, NC 27606",
    "education" => "2012 M.S., Yonsei University, South Korea.",
    "email" => "jwang50@ncsu.edu",
    "address" => "3042 Engineering Building II, 890 Oval Drive",
    "tel" => "919-513-7620",
    "area" => "Modeling, topology and performance of wireless networking",
    "webpage" => "",
    "thesis" => "",
    "bio" => "Jie Wang joined the PhD program at NCSU's ECE department in August 2014. She received her Master of Science degree and Bachelor of Science degree from Tongji University, Shanghai China, in 2013 and 2010 respectively."
  );

  $members[28] = array(
    "type" => "grad",
    "name" => "Sigit Pambudi",
    "photo-link" => "img/people/sigit.jpg",
    "subtype" => "Ph.D. Student",
    "department" => "Department of Electrical and Computer Engineering",
    "affiliation" => "NC State University, Raleigh, NC 27606",
    "education" => "2012 M.S., Yonsei University, South Korea.",
    "email" => "sapambud@ncsu.edu",
    "address" => "3042 Engineering Building II, 890 Oval Drive",
    "tel" => "919-513-7620",
    "area" => "Modeling, topology and performance of wireless networking",
    "webpage" => "",
    "thesis" => "",
    "bio" => "Sigit Aryo Pambudi has joined the PhD program at NCSU's ECE department since August 2012. He received a Master of Science degree from Yonsei University, Korea in 2011 and a Bachelor of Engineering from ITB, Indonesia in 2009. His current research areas are topology modeling and performance analysis of wireless networking."
  );

  $members[27] = array(
    "type" => "grad",
    "name" => "Mingkui Wei",
    "photo-link" => "img/people/mingkui.jpg",
    "subtype" => "Ph.D. Student",
    "department" => "Department of Electrical and Computer Engineering",
    "affiliation" => "NC State University, Raleigh, NC 27606",
    "education" => "2009 M.S., SouthEast University, Naijing, CHINA.",
    "email" => "mwei2@ncsu.edu",
    "address" => "3042 Engineering Building II, 890 Oval Drive",
    "tel" => "919-513-7620",
    "area" => "Smart Grid Communications and Reliability",
    "webpage" => "http://www4.ncsu.edu/~yli27",
    "thesis" => "",
    "bio" => "Mingkui Wei has joined ECE department of NC State University at Fall 2011 as a PhD student. He got his bachelor degree from Nanjing University of Science and Technology, China and his master degree from Southeast University, China. After his graduation, he worked at Bell Labs, Alcatel-Lucent Nanjing R&D Center. His current research focuses on identifying and solving cyber-physical security issues reside in the Smart Grid."
  );

  $members[26] = array(
    "type" => "grad",
    "name" => "Yujin Li",
    "photo-link" => "img/people/yujin.jpg",
    "subtype" => "Ph.D. Student",
    "department" => "Department of Electrical and Computer Engineering",
    "affiliation" => "NC State University, Raleigh, NC 27606",
    "education" => "2009 M.S., Beijing Institute of Technology, CHINA.",
    "email" => "yli27@ncsu.edu",
    "address" => "3042 Engineering Building II, 890 Oval Drive",
    "tel" => "919-513-7620",
    "area" => "Mobility modeling and management in Opportunistic Networks",
    "webpage" => "http://www4.ncsu.edu/~yli27",
    "thesis" => "",
    "bio" => "Yujin Li started her PhD at NC State University since August 2009. She received her B.S. and M.S. degrees from Beijing Institute of China in 2007 and 2009, respectively. Her research focuses on modeling and analyzing performance of information dissemination and mobile computing in Device-to-Device (D2D) communication networks."
  );

   $members[25] = array(
    "type" => "former",
    "name" => "Xiaozhou Fang, M.S.",
    "photo-link" => "img/people/Xiaozhou.jpg",
    "subtype" => "MS Student (2012-2014)",
    "department" => "Department of Electrical and Computer Engineering",
    "affiliation" => "NC State University, Raleigh, NC 27606",
    "education" => "",
    "email" => "",
    "address" => "3042 Engineering Building II, 890 Oval Drive",
    "tel" => "919-513-7620",
    "area" => "",
    "webpage" => "",
    "thesis" => "Neighbor Graph Based Proactive Caching for Seamless Handover in Content-Centric Network"
  ); 

   $members[24] = array(
    "type" => "former",
    "name" => "Shawqi Kharbash, Ph.D.",
    "photo-link" => "img/people/shawqi.jpg",
    "subtype" => "Ph.D. Student (2006-2013)",
    "department" => "Department of Electrical and Computer Engineering",
    "affiliation" => "NC State University, Raleigh, NC 27606",
    "education" => "",
    "email" => "",
    "address" => "3042 Engineering Building II, 890 Oval Drive",
    "tel" => "919-513-7620",
    "area" => "",
    "webpage" => "",
    "thesis" => "Modeling and Analysis of Wireless Networking Reliability"
  ); 

   $members[23] = array(
    "type" => "former",
    "name" => "Zhuo Lu, Ph.D.",
    "photo-link" => "img/people/Zhuo.jpg",
    "subtype" => "Ph.D. Student (2009-2013)",
    "department" => "Department of Electrical and Computer Engineering",
    "affiliation" => "IAI, Washington, DC",
    "education" => "",
    "email" => "",
    "address" => "3042 Engineering Building II, 890 Oval Drive",
    "tel" => "919-513-7620",
    "area" => "",
    "webpage" => "",
    "thesis" => "Modeling and Evaluating the Impact of Denial-of-Service Attacks in Emerging Wireless and Mobile Applications"
  ); 

   $members[22] = array(
    "type" => "former",
    "name" => "Mohit Shah, M.S.",
    "photo-link" => "img/people/mohit.jpg",
    "subtype" => "MS Student (2012-2013)",
    "department" => "Department of Electrical and Computer Engineering",
    "affiliation" => "North Carolina State University",
    "education" => "",
    "email" => "",
    "address" => "3042 Engineering Building II, 890 Oval Drive",
    "tel" => "919-513-7620",
    "area" => "",
    "webpage" => "",
    "thesis" => "End to End Communication Architecture and Technology Performance Evaluation : Ethernet and WiFi for Substation Automation Networks"
  ); 

   $members[21] = array(
    "type" => "former",
    "name" => "Lei Sun, Ph.D.",
    "photo-link" => "img/people/lsun.jpg",
    "subtype" => "Ph.D. Student (2007-2012)",
    "department" => "Department of Electrical and Computer Engineering",
    "affiliation" => "Cisco, RTP, NC",
    "education" => "",
    "email" => "",
    "address" => "3042 Engineering Building II, 890 Oval Drive",
    "tel" => "919-513-7620",
    "area" => "",
    "webpage" => "",
    "thesis" => "Modeling and Analysis of Performance and Topology Limits of Cognitive Radio Networks, 2012"
  ); 

   $members[20] = array(
    "type" => "former",
    "name" => "Xiang Lu, Ph.D.",
    "photo-link" => "img/people/xiang.jpg",
    "subtype" => "MS Student (2010-2012) <br> Co-Advised with Dr. Jianfeng Ma ",
    "department" => "Department of Electrical and Computer Engineering",
    "affiliation" => "Institute of Information Engineering (IIE), Beijing, China",
    "education" => "",
    "email" => "",
    "address" => "3042 Engineering Building II, 890 Oval Drive",
    "tel" => "919-513-7620",
    "area" => "",
    "webpage" => "",
    "thesis" => "Secure and Reliable Communication Infrastructures towards the Smart Grid"
  ); 

   $members[19] = array(
    "type" => "former",
    "name" => "Yi Xu, Ph.D.",
    "photo-link" => "img/people/yi.jpg",
    "subtype" => "Ph.D. Student (2005-2010), <br> Postdoc (2010-2012)",
    "department" => "Department of Electrical and Computer Engineering",
    "affiliation" => "Cisco, San Jose, CA",
    "education" => "",
    "email" => "",
    "address" => "3042 Engineering Building II, 890 Oval Drive",
    "tel" => "919-513-7620",
    "area" => "",
    "webpage" => "",
    "thesis" => "Understanding the Performance and Resilience of Large-Scale Multi-Hop Wireless Networks, 2010"
  ); 

   $members[18] = array(
    "type" => "former",
    "name" => "Chi Yi, M.S.",
    "photo-link" => "img/people/chi.jpg",
    "subtype" => "MS Student (2009-2011)",
    "department" => "Department of Electrical and Computer Engineering",
    "affiliation" => "Microsoft, Seattle, WA",
    "education" => "",
    "email" => "",
    "address" => "3042 Engineering Building II, 890 Oval Drive",
    "tel" => "919-513-7620",
    "area" => "",
    "webpage" => "",
    "thesis" => ""
  );

  $members[17] = array(
    "type" => "former",
    "name" => "Haiyang Zheng, M.S.",
    "photo-link" => "img/people/Haiyang.jpg",
    "subtype" => "MS Student (2009-2011)",
    "department" => "Department of Electrical and Computer Engineering",
    "affiliation" => "Cisco, San Jose, CA",
    "education" => "",
    "email" => "",
    "address" => "3042 Engineering Building II, 890 Oval Drive",
    "tel" => "919-513-7620",
    "area" => "",
    "webpage" => "",
    "thesis" => ""
  ); 

  $members[16] = array(
    "type" => "former",
    "name" => "Mohit Khanna, M.S.",
    "photo-link" => "img/people/MohitK.jpg",
    "subtype" => "MS Student (2009-2010)",
    "department" => "Department of Electrical and Computer Engineering",
    "affiliation" => "Qualcomm, San Diego, CA",
    "education" => "",
    "email" => "",
    "address" => "3042 Engineering Building II, 890 Oval Drive",
    "tel" => "919-513-7620",
    "area" => "",
    "webpage" => "",
    "thesis" => ""
  );  

  $members[15] = array(
    "type" => "former",
    "name" => "Ming Zhao, Ph.D.",
    "photo-link" => "img/people/1ming.jpg",
    "subtype" => "PhD Student (2004-2009)",
    "department" => "Department of Electrical and Computer Engineering",
    "affiliation" => "Cisco, RTP, NC",
    "education" => "",
    "email" => "",
    "address" => "3042 Engineering Building II, 890 Oval Drive",
    "tel" => "919-513-7620",
    "area" => "",
    "webpage" => "",
    "thesis" => "Design, Modeling, and Analysis of User Mobility and Its Impact on Multi-Hop Wireless Networks"
  ); 

  $members[14] = array(
    "type" => "former",
    "name" => "Avesh K. Agarwal, Ph.D.",
    "photo-link" => "img/people/1avesh.jpg",
    "subtype" => "PhD Student (2003-2009)",
    "department" => "Department of Electrical and Computer Engineering",
    "affiliation" => "Redhat, Raleigh, NC",
    "education" => "",
    "email" => "",
    "address" => "3042 Engineering Building II, 890 Oval Drive",
    "tel" => "919-513-7620",
    "area" => "",
    "webpage" => "",
    "thesis" => "Performance and Protection Management in Wireless Networks"
  ); 

  $members[13] = array(
    "type" => "former",
    "name" => "Fei Xing, Ph.D.",
    "photo-link" => "img/people/1fei.JPG",
    "subtype" => "PhD Student (2004-2008)",
    "department" => "Department of Electrical and Computer Engineering",
    "affiliation" => "Cisco, San Jose, CA",
    "education" => "",
    "email" => "",
    "address" => "3042 Engineering Building II, 890 Oval Drive",
    "tel" => "919-513-7620",
    "area" => "",
    "webpage" => "",
    "thesis" => "Modeling, Design, and Analysis on the Resilience of Large-scale Wireless Multi-hop Networks"
  ); 

  $members[12] = array(
    "type" => "former",
    "name" => "Nurcan Tezcan, Ph.D.",
    "photo-link" => "img/people/1nurcan.JPG",
    "subtype" => "PhD Student (2004-2008)",
    "department" => "Department of Electrical and Computer Engineering",
    "affiliation" => "Intel, Portland, OR",
    "education" => "",
    "email" => "",
    "address" => "3042 Engineering Building II, 890 Oval Drive",
    "tel" => "919-513-7620",
    "area" => "",
    "webpage" => "",
    "thesis" => "Energy-Efficient And Reliable Data Transfer in Wireless Sensor Networks"
  ); 

  $members[11] = array(
    "type" => "former",
    "name" => "Levi Mason",
    "photo-link" => "img/people/levi_1.gif",
    "subtype" => "Student (2007-2008)",
    "department" => "Department of Electrical and Computer Engineering",
    "affiliation" => "Cisco, RTP, NC",
    "education" => "",
    "email" => "",
    "address" => "3042 Engineering Building II, 890 Oval Drive",
    "tel" => "919-513-7620",
    "area" => "",
    "webpage" => "",
    "thesis" => ""
  ); 

  $members[10] = array(
    "type" => "former",
    "name" => "Kaseima Frye",
    "photo-link" => "img/people/KFrye.jpg",
    "subtype" => "Student (2007-2008)",
    "department" => "Department of Electrical and Computer Engineering",
    "affiliation" => "",
    "education" => "",
    "email" => "",
    "address" => "3042 Engineering Building II, 890 Oval Drive",
    "tel" => "919-513-7620",
    "area" => "",
    "webpage" => "",
    "thesis" => ""
  ); 

  $members[9] = array(
    "type" => "former",
    "name" => "Xinbing Wang, Ph.D.",
    "photo-link" => "img/people/xinbing.JPG",
    "subtype" => "PhD Student (2001-2006) <br> Co-Advised ",
    "department" => "Department of Electrical and Computer Engineering",
    "affiliation" => "Department of Electronic Engineering, Shanghai Jiaotong University, Shanghai, CHINA",
    "education" => "",
    "email" => "",
    "address" => "3042 Engineering Building II, 890 Oval Drive",
    "tel" => "919-513-7620",
    "area" => "",
    "webpage" => "http://iwct.sjtu.edu.cn/Personal/xwang8/",
    "thesis" => "Performance Analysis of TCP over Wired and Wireless Networks"
  ); 

  $members[8] = array(
    "type" => "former",
    "name" => "Wei Liang, Ph.D.",
    "photo-link" => "img/people/wei.jpg",
    "subtype" => "PhD Student (2001-2005) <br> Co-Advised with Dr. Do Young Eun",
    "department" => "Department of Electrical and Computer Engineering",
    "affiliation" => "Cisco, San Jose, CA",
    "education" => "",
    "email" => "",
    "address" => "3042 Engineering Building II, 890 Oval Drive",
    "tel" => "919-513-7620",
    "area" => "",
    "webpage" => "",
    "thesis" => "Design and Analysis of Authentication Mechanisms in Single- and Multi-Hop Wireless Networks"
  ); 

  $members[7] = array(
    "type" => "former",
    "name" => "Jung Kee Song, M.S.",
    "photo-link" => "img/people/Song.jpg",
    "subtype" => "MS Student (2003-2005)",
    "department" => "Department of Electrical and Computer Engineering",
    "affiliation" => "Samsung, Seoul, Korea",
    "education" => "",
    "email" => "",
    "address" => "3042 Engineering Building II, 890 Oval Drive",
    "tel" => "919-513-7620",
    "area" => "",
    "webpage" => "",
    "thesis" => "Performance Evaluation of Handoff between UMTS/802.11b based on Mobile IP and Stream Control Transmission Protocol"
  ); 

  $members[6] = array(
    "type" => "former",
    "name" => "Heng Xia, M.S.",
    "photo-link" => "img/people/heng.jpg",
    "subtype" => "MS Student (2003-2005)",
    "department" => "Department of Electrical and Computer Engineering",
    "affiliation" => "NCSU PhD Program",
    "education" => "",
    "email" => "",
    "address" => "3042 Engineering Building II, 890 Oval Drive",
    "tel" => "919-513-7620",
    "area" => "",
    "webpage" => "",
    "thesis" => "Effects of Medium Access Control on the Capacity of Mobile Ad Hoc Networks"
  ); 

  $members[5] = array(
    "type" => "former",
    "name" => "Jennifer Webster",
    "photo-link" => "img/people/Portrait_placeholder.png",
    "subtype" => "Undergraduate Research Assistant (Summer 2009)",
    "department" => "Department of Electrical and Computer Engineering",
    "affiliation" => "NSF IREE Program",
    "education" => "",
    "email" => "",
    "address" => "3042 Engineering Building II, 890 Oval Drive",
    "tel" => "919-513-7620",
    "area" => "",
    "webpage" => "",
    "thesis" => ""
  );

  $members[4] = array(
    "type" => "former",
    "name" => "Erica Young",
    "photo-link" => "img/people/Portrait_placeholder.png",
    "subtype" => "Undergraduate Research Assistant (Summer 2009)",
    "department" => "Department of Electrical and Computer Engineering",
    "affiliation" => "NSF IREE Program",
    "education" => "",
    "email" => "",
    "address" => "3042 Engineering Building II, 890 Oval Drive",
    "tel" => "919-513-7620",
    "area" => "",
    "webpage" => "",
    "thesis" => ""
  );

  $members[3] = array(
    "type" => "former",
    "name" => "Remi Scalabrini",
    "photo-link" => "img/people/Portrait_placeholder.png",
    "subtype" => "Undergraduate Student (Summer 2004)",
    "department" => "Department of Electrical and Computer Engineering",
    "affiliation" => "IASTED visiting student",
    "education" => "",
    "email" => "",
    "address" => "3042 Engineering Building II, 890 Oval Drive",
    "tel" => "919-513-7620",
    "area" => "",
    "webpage" => "",
    "thesis" => ""
  );

  $members[2] = array(
    "type" => "former",
    "name" => "Jorinjit S. Gill",
    "photo-link" => "img/people/Portrait_placeholder.png",
    "subtype" => "Graduate Research Assistant (Spring 2004)",
    "department" => "Department of Electrical and Computer Engineering",
    "affiliation" => "",
    "education" => "",
    "email" => "",
    "address" => "3042 Engineering Building II, 890 Oval Drive",
    "tel" => "919-513-7620",
    "area" => "",
    "webpage" => "",
    "thesis" => ""
  );

  $members[1] = array(
    "type" => "former",
    "name" => "Dechaphol Suwisisth",
    "photo-link" => "img/people/Portrait_placeholder.png",
    "subtype" => "Undergraduate Student (Summer 2003)",
    "department" => "Department of Electrical and Computer Engineering",
    "affiliation" => "IASTED visiting student",
    "education" => "",
    "email" => "",
    "address" => "3042 Engineering Building II, 890 Oval Drive",
    "tel" => "919-513-7620",
    "area" => "",
    "webpage" => "",
    "thesis" => ""
  );

  


?>
