<?php
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
header ("Location: ../index.php");

}else{
include "../include/loginsql.php";


$callbackvm=$_GET['callbackvm'];
$customeridvm=$_GET['customeridvm'];
$emailvm=$_GET['emailvm'];
$fullnamevm=$_GET['fullnamevm'];
$id=$_GET['id'];
$mailboxvm=$_GET['mailboxvm'];
$passwordvm=$_GET['passwordvm'];

$sql="UPDATE voicemail_users SET  callback='$callbackvm', customer_id='$customeridvm', email='$emailvm', fullname='$fullnamevm', mailbox='$mailboxvm', password='$passwordvm' WHERE uniqueid='$id'";
mysql_query($sql) or die(mysql_error());

}


?>
