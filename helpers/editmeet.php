<?php
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
header ("Location: ../index.php");

}else{
include "../include/loginsql.php";


$confno=$_GET['confno'];
$pin=$_GET['pin'];
$adminpin=$_GET['adminpin'];
$members=$_GET['members'];
$id=$_GET['id'];
$maxusers=$_GET['maxusers'];

$sql="UPDATE meetme SET  confno='$confno', pin='$pin', adminpin='$adminpin', members='$members', maxusers='$maxusers' WHERE id='$id'";
mysql_query($sql) or die(mysql_error());

}


?>
