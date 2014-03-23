<?php
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
header ("Location: ../index.php");

}else{
include '../include/loginsql.php';


$id=$_GET['id'];

$sql="select * from agents where agent_id=$id";
	
	$res=mysql_query($sql);

	$row = mysql_fetch_object($res);
	$jsondata['agentid'] = $row->agent_id;
	$jsondata['agentname'] = $row->agent_name;
	$jsondata['agentpass'] = $row->agent_pass;
 
	   echo json_encode($jsondata);

}		
?>
