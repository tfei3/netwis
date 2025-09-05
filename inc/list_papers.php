<?php

  include('papers.php');

  // list of journal / conference
  $list_view_journal = '';  $list_view_conf = '';
  // list of publications by year
  $list_view_2014 = "";$list_view_2013 = "";$list_view_2012 = "";$list_view_2011 = "";$list_view_2010 = "";$list_view_2009 = "";$list_view_2008 = "";$list_view_2007 = "";$list_view_2006 = "";$list_view_2005 = "";$list_view_2004 = "";$list_view_2003 = "";$list_view_2002 = "";$list_view_2001 = "";$list_view_2000 = "";$list_view_1999 = "";$list_view_1998 = "";
  // list of publications by area
  $list_view_physicalSystems = "";  $list_view_denialOfService = "";  $list_view_networkTopology = "";  $list_view_performance = "";  $list_view_mobilityInduced = "";  $list_view_protocol = "";
  
  foreach($papers as $paper) { 

    if ($paper["type"] == "journal") {
      $list_view_journal =  $list_view_journal . get_list_allpapers($paper);
    }
    if ($paper["type"] == "conf") {
      $list_view_conf =  $list_view_conf . get_list_allpapers($paper);      
    }

    if ($paper["year"] == "2014") {  $list_view_2014 =  $list_view_2014 . get_list_allpapers($paper); }   if ($paper["year"] == "2013") {  $list_view_2013 =  $list_view_2013 . get_list_allpapers($paper); } 
    if ($paper["year"] == "2012") {  $list_view_2012 =  $list_view_2012 . get_list_allpapers($paper); }   if ($paper["year"] == "2011") {  $list_view_2011 =  $list_view_2011 . get_list_allpapers($paper); } 
    if ($paper["year"] == "2010") {  $list_view_2010 =  $list_view_2010 . get_list_allpapers($paper); }   if ($paper["year"] == "2009") {  $list_view_2009 =  $list_view_2009 . get_list_allpapers($paper); } 
    if ($paper["year"] == "2008") {  $list_view_2008 =  $list_view_2008 . get_list_allpapers($paper); }   if ($paper["year"] == "2007") {  $list_view_2007 =  $list_view_2007 . get_list_allpapers($paper); } 
    if ($paper["year"] == "2006") {  $list_view_2006 =  $list_view_2006 . get_list_allpapers($paper); }   if ($paper["year"] == "2005") {  $list_view_2005 =  $list_view_2005 . get_list_allpapers($paper); } 
    if ($paper["year"] == "2004") {  $list_view_2004 =  $list_view_2004 . get_list_allpapers($paper); }   if ($paper["year"] == "2003") {  $list_view_2003 =  $list_view_2003 . get_list_allpapers($paper); } 
    if ($paper["year"] == "2002") {  $list_view_2002 =  $list_view_2002 . get_list_allpapers($paper); }   if ($paper["year"] == "2001") {  $list_view_2001 =  $list_view_2001 . get_list_allpapers($paper); } 
    if ($paper["year"] == "2000") {  $list_view_2000 =  $list_view_2000 . get_list_allpapers($paper); }   if ($paper["year"] == "1999") {  $list_view_1999 =  $list_view_1999 . get_list_allpapers($paper); } 
    if ($paper["year"] == "1998") {  $list_view_1998 =  $list_view_1998 . get_list_allpapers($paper); } 


    $l_area = count($paper["area"]);
    for ($i = 0; $i < $l_area; $i++) {
      if ($paper["area"][$i] == "physicalSystems") {
        $list_view_physicalSystems =  $list_view_physicalSystems . get_list_allpapers($paper); 
      } 
      if ($paper["area"][$i] == "denialOfService") {
        $list_view_denialOfService =  $list_view_denialOfService . get_list_allpapers($paper);
      } 
      if ($paper["area"][$i] == "networkTopology") {
        $list_view_networkTopology =  $list_view_networkTopology . get_list_allpapers($paper);
      } 
      if ($paper["area"][$i] == "performance") {
        $list_view_performance =  $list_view_performance . get_list_allpapers($paper);
      } 
      if ($paper["area"][$i] == "mobilityInduced") {
        $list_view_mobilityInduced =  $list_view_mobilityInduced . get_list_allpapers($paper);
      } 
      if ($paper["area"][$i] == "protocol") {
        $list_view_protocol =  $list_view_protocol . get_list_allpapers($paper);
      }   
    } 
  }

?>