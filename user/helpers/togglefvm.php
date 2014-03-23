<?php
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
header ("Location: ../userlog.php.php");

}else{
include "loginsql.php";
require_once('/var/lib/asterisk/agi-bin/phpagi/phpagi-asmanager.php');

$peer=$_GET['peer'];
$value=$_GET['value'];

$sql="Update followme SET isset=$value WHERE name=$peer";
mysql_query($sql) or die(mysql_error());

$asm = new AGI_AsteriskManager();
if($asm->connect('localhost','admin','m4nag3rt3ts')){
        $peer = $asm->command("database put Custom/User/FollowMe $peer $value");
        sleep(1);
}
$asm->disconnect();


}
?>
