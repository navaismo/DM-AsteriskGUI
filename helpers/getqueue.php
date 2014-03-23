<?php
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
header ("Location: ../index.php");

}else{
include '../include/loginsql.php';


$id=$_GET['id'];

$sql="select * from queue_table where name='$id'";
	
	$res=mysql_query($sql) or die(mysql_error());

	$row = mysql_fetch_object($res);

$jsondata['name'] = $row->name;
$jsondata['music'] = $row->musicclass;
$jsondata['announce'] = $row->announce;
$jsondata['context'] = $row->context;
$jsondata['timeout'] = $row->timeout;
$jsondata['monitortype'] = $row->monitor_type;
$jsondata['monitorformat'] = $row->monitor_format;
$jsondata['announcefreq'] = $row->announce_frequency;
$jsondata['announcehold'] = $row->announce_holdtime;
$jsondata['announceperi'] = $row->periodic_announce;
$jsondata['announceperifreq'] = $row->periodic_announce_frequency;
$jsondata['retry'] = $row->retry;
$jsondata['ringinuse'] = $row->ringinuse;
$jsondata['autofill'] = $row->autofill;
$jsondata['autopause'] = $row->autopause;
$jsondata['setvar'] = $row->setinterfacevar;
$jsondata['wrap'] = $row->wrapuptime;
$jsondata['maxlen'] = $row->maxlen;
$jsondata['servicelevel'] = $row->servicelevel;
$jsondata['strategy'] = $row->strategy;
$jsondata['joinempty'] = $row->joinempty;
$jsondata['leaveempty'] = $row->leavewhenempty;
$jsondata['reporthold'] = $row->reportholdtime;
$jsondata['weight'] = $row->weight;
 
	   echo json_encode($jsondata);

}		
?>
