<?php 
  function get_list_allpapers($paper) {
    $output = '';
    $output = $output . '<p>[';
    $output = $output . $paper["code"] . '] ';
    $output = $output . $paper["author"] . ', "';
    $output = $output . '<a class="publication-title" href="' . $paper["doc"] . '" target="blank">' .$paper["title"] . '</a>," ';
    if($paper["type"] == "journal"){
      $output = $output . 'in ';
    }
    $output = $output . '<span class="publication-name">' . $paper["journal/conf"] . '</span>, ';
    $output = $output . $paper["vol/pp"] . ', ';
    $output = $output . $paper["venue/date"] . ' ' . $paper["year"] . '. ';
    $output = $output . $paper["other"] . '</p>';

    return $output;
  }

  function get_list_allpapers_short($paper) {
    $output = '';
    $output = $output . '<li>';
    $output = $output . '<h5 class="title"><a href="' . $paper["doc"] . '" target="blank">' .$paper["title"] . '</a></h5>';
    $output = $output . '<p>' . $paper["author"] . ', ';       
    $output = $output .  $paper["journal/conf"] . ', ';
    $output = $output .  $paper["vol/pp"] . ', ';
    $output = $output .  $paper["venue/date"] . ' ' . $paper["year"] . '.</p></li>';

    return $output;  
  }


?>