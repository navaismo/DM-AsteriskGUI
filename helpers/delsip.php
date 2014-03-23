<?php
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
header ("Location: ../index.php");

}else{
include '../include/loginsql.php';
require_once('/var/lib/asterisk/agi-bin/phpagi/phpagi-asmanager.php');



$id=$_GET['id'];

$sql0="Select name from sip_buddies Where id='$id'";
$res=mysql_query($sql0) or die(mysql_error());
$row = mysql_fetch_assoc($res);
$name = $row['name'];

$sql1="Delete from sip_buddies where id=$id";
mysql_query($sql1) or die(mysql_error());

$sql2="Delete from voicemail_users where customer_id=$name";
mysql_query($sql2) or die(mysql_error());


$file = basename("/etc/asterisk/extensions.conf");
$text = file_get_contents("/etc/asterisk/extensions.conf");
$text = str_replace('exten => '.${name}.',1,GoSub(subSTDExten,internalcall,1(${EXTEN}))', '', $text);
$text = str_replace('exten => '.${name}.',hint,SIP/'.${name}.'', '', $text);
file_put_contents('/etc/asterisk/'.$file, $text);



$asm = new AGI_AsteriskManager();
if($asm->connect('localhost','admin','managerpwd')){
        $dp = $asm->command("dialplan reload");
        sleep(1);
}
$asm->disconnect();


}
		
?>
