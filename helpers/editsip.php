<?php
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
header ("Location: ../index.php");

}else{
include "../include/loginsql.php";
require_once('/var/lib/asterisk/agi-bin/phpagi/phpagi-asmanager.php');


$id=$_GET['id'];
$extension=$_GET['extension'];
$secret=$_GET['secret'];
$callerid=$_GET['callerid'];
$context=$_GET['context'];
$mailbox=$_GET['mailbox'];
$nat=$_GET['nat'];
$host=$_GET['host'];
$callgroup=$_GET['callgroup'];
$pickupgroup=$_GET['pickupgroup'];
$qualify=$_GET['qualify'];
$allow=$_GET['allow'];
$videosupport=$_GET['videosupport'];
$type=$_GET['type'];
$account=$_GET['account'];
$editpin=$_GET['editpin'];
$permit=$_GET['permit'];
$deny=$_GET['deny'];
$transport=$_GET['transport'];
$dtmfmode=$_GET['dtmfmode'];
$directmedia=$_GET['directmedia'];
$encryption=$_GET['encryption'];

$sql="UPDATE sip_buddies SET name='$extension', accountcode='$account', secret='$secret', callerid='$callerid', context='$context', mailbox='$mailbox', nat='$nat', host='$host', callgroup='$callgroup', pickupgroup='$pickupgroup', qualify='$qualify', allow='$allow', videosupport='$videosupport', type='$type', permit='$permit',deny='$deny',transport='$transport',dtmfmode='$dtmfmode',directmedia='$directmedia',encryption='$encryption' WHERE id='$id'";
mysql_query($sql) or die(mysql_error());

$sql1="UPDATE claves set user_edit='$editpin' where user_exten='$extension'";
mysql_query($sql1) or die(mysql_error());


$asm = new AGI_AsteriskManager();
if($asm->connect('localhost','admin','managerpwd')){
        $peer = $asm->command("sip reload");
        sleep(1);
}
$asm->disconnect();

}



?>
