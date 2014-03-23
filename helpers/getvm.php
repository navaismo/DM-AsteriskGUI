<?php
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
header ("Location: ../index.php");

}else{
include '../include/loginsql.php';


$id=$_GET['id'];

$sql="select * from voicemail_users where uniqueid=$id";
	
	$res=mysql_query($sql);

	$row = mysql_fetch_object($res);
	$jsondata['customerid'] = $row->customer_id;
	$jsondata['mailbox'] = $row->mailbox;
	$jsondata['password'] = $row->password;
	$jsondata['fullname'] = $row->fullname;
	$jsondata['email'] = $row->email;
	$jsondata['callback'] = $row->callback;
 
	   echo json_encode($jsondata);

}		
?>
