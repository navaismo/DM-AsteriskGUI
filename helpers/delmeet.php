<?php
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
header ("Location: ../index.php");

}else{
include '../include/loginsql.php';
require_once('/var/lib/asterisk/agi-bin/phpagi/phpagi-asmanager.php');

$id=$_GET['id'];


$sql0="Select confno from meetme Where id='$id'";
$res=mysql_query($sql0) or die(mysql_error());
$row = mysql_fetch_assoc($res);
$confno = $row['confno'];
//echo $confno;

$sql1="Delete from meetme where id=$id";
mysql_query($sql1) or die(mysql_error());


$file = basename("/etc/asterisk/extensions.conf");
$text = file_get_contents("/etc/asterisk/extensions.conf");
$text = str_replace('exten => '.${confno}.',1,MeetMe('.${confno}.',iM)', '', $text);
$text = str_replace('same => n,Hangup() ;hangup for conf # '.${confno}.'', '', $text);
file_put_contents('/etc/asterisk/'.$file, $text);

$asm = new AGI_AsteriskManager();
if($asm->connect('localhost','admin','m4nag3rt3ts')){
	$dp = $asm->command("dialplan reload");
        sleep(1);
}
$asm->disconnect();


}
		
?>
