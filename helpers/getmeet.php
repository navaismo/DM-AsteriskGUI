<?php
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
header ("Location: ../index.php");

}else{
include '../include/loginsql.php';


$id=$_GET['id'];

$sql="select * from meetme where id=$id";
	
	$res=mysql_query($sql);

	$row = mysql_fetch_object($res);
	$jsondata['confno'] = $row->confno;
	$jsondata['pin'] = $row->pin;
	$jsondata['adminpin'] = $row->adminpin;
	$jsondata['members'] = $row->members;
	$jsondata['maxusers'] = $row->maxusers;
 
	   echo json_encode($jsondata);

}		
?>
