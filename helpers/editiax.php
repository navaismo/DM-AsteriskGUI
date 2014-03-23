<?php
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
header ("Location: ../index.php");

}else{
include "../include/loginsql.php";


$id=$_GET['id'];
$extension=$_GET['extension'];
$secret=$_GET['secret'];
$callerid=$_GET['callerid'];
$context=$_GET['context'];
$mailbox=$_GET['mailbox'];
$requirecalltoken=$_GET['requirecalltoken'];
$host=$_GET['host'];
$callgroup=$_GET['callgroup'];
$pickupgroup=$_GET['pickupgroup'];
$qualify=$_GET['qualify'];
$allow=$_GET['allow'];
$videosupport=$_GET['videosupport'];
$type=$_GET['type'];

$sql="UPDATE iax_buddies SET name='$extension', secret='$secret', callerid='$callerid', context='$context', mailbox='$mailbox', requirecalltoken='$requirecalltoken', host='$host', callgroup='$callgroup', pickupgroup='$pickupgroup', qualify='$qualify', allow='$allow', videosupport='$videosupport', type='$type' WHERE id='$id'";
mysql_query($sql) or die(mysql_error());

}


?>
