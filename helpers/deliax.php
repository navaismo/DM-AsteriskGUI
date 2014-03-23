<?php
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
header ("Location: ../index.php");

}else{
include '../include/loginsql.php';


$id=$_GET['id'];

$sql0="Select name from iax_buddies Where id='$id'";
$res=mysql_query($sql0) or die(mysql_error());
$row = mysql_fetch_assoc($res);
$name = $row['name'];


$sql="Delete from iax_buddies where id=$id";
mysql_query($sql) or die(mysql_error());

$sql1="Delete from voicemail_users where customer_id=$name";
mysql_query($sql1) or die(mysql_error());


}		
?>
