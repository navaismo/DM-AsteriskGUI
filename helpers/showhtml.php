<?php
  //get the script file
  $file = basename("/etc/asterisk/sendvm.php");
  $text = file_get_contents("/etc/asterisk/sendvm.php");
  preg_match("/\/\/b1(.*)\/\/b2/s",$text,$body);
  
 $html = str_replace("<","&lt",$body[1]);
 $html = str_replace(">","&gt",$html);
 $html = str_replace("\"","",$html);
 $html = str_replace("'","\"",$html);


//  echo $body[1];
  echo $html;
?>

