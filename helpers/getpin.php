<?php
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
header ("Location: ../index.php");

}else{
include '../include/loginsql.php';


$id=$_GET['id'];

$sql="select * from claves where clave_id=$id";
	
	$res=mysql_query($sql);

	$row = mysql_fetch_object($res);
	$jsondata['namepin'] = $row->clave_nombre;
	$jsondata['pinpin'] = $row->clave_clave;
	$jsondata['localpin'] = $row->clave_local;
	$jsondata['cellpin'] = $row->clave_cel;
	$jsondata['ldnacpin'] = $row->clave_ldnac;
	$jsondata['ldintpin'] = $row->clave_ldint;
 
	   echo json_encode($jsondata);

}		
?>
