<?php
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
header ("Location: index.php");

}else{
$id=$_GET['id'];
$file=$_GET['file'];


header("Content-type: audio/x-wav");
header("Content-disposition: attachment; filename=/var/spool/asterisk/voicemail/default/" .$id. "/INBOX/" .$file. ";");
header("Content-Length: ".filesize("/var/spool/asterisk/voicemail/default/" .$id. "/INBOX/" .$file. ""));
header("Content-Transfer-Encoding: binary"); 
readfile("/var/spool/asterisk/voicemail/default/" .$id. "/INBOX/" .$file. "");
exit();

}
?>
