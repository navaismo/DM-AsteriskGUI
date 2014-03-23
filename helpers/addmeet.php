<?php
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
header ("Location: ../index.php");

}else{
include "../include/loginsql.php";
require_once('/var/lib/asterisk/agi-bin/phpagi/phpagi-asmanager.php');

$confno=$_GET['confno'];
$pin=$_GET['pin'];
$adminpin=$_GET['adminpin'];
$members=$_GET['members'];
$maxusers=$_GET['maxusers'];

if($confno==''){
	echo "0";
}else{

 echo "1";


$sql="INSERT INTO meetme(confno,pin,adminpin,members,maxusers) Values('$confno','$pin','$adminpin','$members','$maxusers')";
mysql_query($sql) or die(mysql_error());

$file = basename("/etc/asterisk/extensions.conf");
$text = file_get_contents("/etc/asterisk/extensions.conf");

$conf="exten => ".${confno}.",1,MeetMe(".${confno}.",iM)\nsame => n,Hangup() ;hangup for conf # ".${confno}."\n;;last line conference";
$text = str_replace(';;last line conference', $conf ,$text);

file_put_contents('/etc/asterisk/'.$file, $text);

$asm = new AGI_AsteriskManager();
if($asm->connect('localhost','admin','m4nag3rt3ts')){
	$dp = $asm->command("dialplan reload");
	sleep(1);
}
$asm->disconnect();

exec("/etc/asterisk/rn.sh");


}
}
?>
