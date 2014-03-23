<?php
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
header ("Location: ../index.php");

}else{
include '../include/loginsql.php';


$id=$_GET['id'];

$sql="select * from sip_buddies where id=$id";
	
	$res=mysql_query($sql);

	$row = mysql_fetch_object($res);
	$jsondata['name'] = $row->name;
	$jsondata['secret'] = $row->secret;
	$jsondata['callerid'] = $row->callerid;
	$jsondata['context'] = $row->context;
	$jsondata['account'] = $row->accountcode;
	$jsondata['mailbox'] = $row->mailbox;
	$jsondata['type'] = $row->type;
	$jsondata['host'] = $row->host;
	$jsondata['callgroup'] = $row->callgroup;
	$jsondata['pickupgroup'] = $row->pickupgroup;
	$jsondata['qualify'] = $row->qualify;
	$jsondata['allow'] = $row->allow;
	$jsondata['videosupport'] = $row->videosupport;
	$jsondata['nat'] = $row->nat;
	$jsondata['permit'] = $row->permit;
	$jsondata['deny'] = $row->deny;
	$jsondata['transport'] = $row->transport;
	$jsondata['dtmfmode'] = $row->dtmfmode;
	$jsondata['directmedia'] = $row->directmedia;
	$jsondata['encryption'] = $row->encryption;

$sql1="select * from sip_buddies where id=$id";
$resu=mysql_query($sql1);
$row2=mysql_fetch_array($resu);
$name=$row2['name'];


$sql2="select * from claves where user_exten=$name";	
	$res=mysql_query($sql2);

	$row3 = mysql_fetch_object($res);
	$jsondata['editpin'] = $row3->user_edit;


	   echo json_encode($jsondata);

}		
?>
