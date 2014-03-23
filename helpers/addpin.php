<?php
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
header ("Location: ../index.php");

}else{
include "../include/loginsql.php";

$namepin=$_GET['namepin'];
$pinpin=$_GET['pinpin'];
$localpin=$_GET['localpin'];
$ldintpin=$_GET['ldintpin'];
$ldnacpin=$_GET['ldnacpin'];
$cellpin=$_GET['cellpin'];

if($namepin==''){
	echo "0";

}else if($pinpin==''){
	echo "0";

}else{

 echo "1";


$sql="INSERT INTO claves(clave_nombre,clave_clave,clave_local,clave_cel,clave_ldnac,clave_ldint) Values('$namepin','$pinpin','$localpin','$cellpin','$ldnacpin','$ldintpin')";
mysql_query($sql) or die(mysql_error());


}
}
?>
