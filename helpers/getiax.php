<?php
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
header ("Location: ../index.php");

}else{
include '../include/loginsql.php';


$id=$_GET['id'];

$sql="select * from iax_buddies where id=$id";
	
	$res=mysql_query($sql);

	$row = mysql_fetch_object($res);
	$jsondata['name'] = $row->name;
	$jsondata['secret'] = $row->secret;
	$jsondata['callerid'] = $row->callerid;
	$jsondata['context'] = $row->context;
	$jsondata['mailbox'] = $row->mailbox;
	$jsondata['type'] = $row->type;
	$jsondata['host'] = $row->host;
	$jsondata['callgroup'] = $row->callgroup;
	$jsondata['pickupgroup'] = $row->pickupgroup;
	$jsondata['qualify'] = $row->qualify;
	$jsondata['allow'] = $row->allow;
	$jsondata['videosupport'] = $row->videosupport;
	$jsondata['requirecalltoken'] = $row->requirecalltoken;
 
	   echo json_encode($jsondata);

}		
?>
