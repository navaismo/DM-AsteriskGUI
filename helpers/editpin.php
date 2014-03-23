<?php
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
header ("Location: ../index.php");

}else{
include "../include/loginsql.php";


$namepined=$_GET['namepined'];
$pinpined=$_GET['pinpined'];
$cellpined=$_GET['cellpined'];
$ldnacpined=$_GET['ldnacpined'];
$id=$_GET['id'];
$ldintpined=$_GET['ldintpined'];
$localpined=$_GET['localpined'];

$sql="UPDATE claves SET  clave_nombre='$namepined', clave_clave='$pinpined', clave_local='$localpined', clave_cel='$cellpined', clave_ldnac='$ldnacpined', clave_ldint='$ldintpined' WHERE clave_id='$id'";
mysql_query($sql) or die(mysql_error());



}
?>
