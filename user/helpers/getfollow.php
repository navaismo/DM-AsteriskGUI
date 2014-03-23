<?php
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
header ("Location: ../userlog.php");

}else{
include "loginsql.php";


$peer=$_GET['id'];

$sql="SELECT * from followme_numbers where name=$peer";
$result=mysql_query($sql) or die(mysql_error());
$count=mysql_num_rows($result);

if ($count==1){
	$sql1="SELECT * from followme_numbers where name=$peer AND ordinal=1";
	$res=mysql_query($sql1) or die(mysql_error());
	$row = mysql_fetch_object($res);

	$jsondata['ordinal1'] = $row->ordinal;
        $jsondata['phonenumber1'] = $row->phonenumber;
        $jsondata['timeout1'] = $row->timeout;

	echo json_encode($jsondata);
	
}elseif ($count==2){
	$sql1="SELECT * from followme_numbers where name=$peer AND ordinal=1";
	$res=mysql_query($sql1) or die(mysql_error());
	$row = mysql_fetch_object($res);

	$jsondata['ordinal1'] = $row->ordinal;
        $jsondata['phonenumber1'] = $row->phonenumber;
        $jsondata['timeout1'] = $row->timeout;

	$sql2="SELECT * from followme_numbers where name=$peer AND ordinal=2";
	$res2=mysql_query($sql2) or die(mysql_error());
	$row = mysql_fetch_object($res2);

	$jsondata['ordinal2'] = $row->ordinal;
        $jsondata['phonenumber2'] = $row->phonenumber;
        $jsondata['timeout2'] = $row->timeout;

	echo json_encode($jsondata);

}elseif ($count==3){
	$sql1="SELECT * from followme_numbers where name=$peer AND ordinal=1";
	$res=mysql_query($sql1) or die(mysql_error());
	$row = mysql_fetch_object($res);

	$jsondata['ordinal1'] = $row->ordinal;
        $jsondata['phonenumber1'] = $row->phonenumber;
        $jsondata['timeout1'] = $row->timeout;

	$sql2="SELECT * from followme_numbers where name=$peer AND ordinal=2";
	$res2=mysql_query($sql2) or die(mysql_error());
	$row = mysql_fetch_object($res2);

	$jsondata['ordinal2'] = $row->ordinal;
        $jsondata['phonenumber2'] = $row->phonenumber;
        $jsondata['timeout2'] = $row->timeout;

	$sql3="SELECT * from followme_numbers where name=$peer AND ordinal=3";
	$res3=mysql_query($sql3) or die(mysql_error());
	$row = mysql_fetch_object($res3);

	$jsondata['ordinal3'] = $row->ordinal;
        $jsondata['phonenumber3'] = $row->phonenumber;
        $jsondata['timeout3'] = $row->timeout;

	echo json_encode($jsondata);

}elseif ($count==4){
	$sql1="SELECT * from followme_numbers where name=$peer AND ordinal=1";
	$res=mysql_query($sql1) or die(mysql_error());
	$row = mysql_fetch_object($res);

	$jsondata['ordinal1'] = $row->ordinal;
        $jsondata['phonenumber1'] = $row->phonenumber;
        $jsondata['timeout1'] = $row->timeout;

	$sql2="SELECT * from followme_numbers where name=$peer AND ordinal=2";
	$res2=mysql_query($sql2) or die(mysql_error());
	$row = mysql_fetch_object($res2);

	$jsondata['ordinal2'] = $row->ordinal;
        $jsondata['phonenumber2'] = $row->phonenumber;
        $jsondata['timeout2'] = $row->timeout;

	$sql3="SELECT * from followme_numbers where name=$peer AND ordinal=3";
	$res3=mysql_query($sql3) or die(mysql_error());
	$row = mysql_fetch_object($res3);

	$jsondata['ordinal3'] = $row->ordinal;
        $jsondata['phonenumber3'] = $row->phonenumber;
        $jsondata['timeout3'] = $row->timeout;

	$sql4="SELECT * from followme_numbers where name=$peer AND ordinal=4";
	$res4=mysql_query($sql4) or die(mysql_error());
	$row = mysql_fetch_object($res4);

	$jsondata['ordinal4'] = $row->ordinal;
        $jsondata['phonenumber4'] = $row->phonenumber;
        $jsondata['timeout4'] = $row->timeout;


	echo json_encode($jsondata);

}elseif ($count==5){
	$sql1="SELECT * from followme_numbers where name=$peer AND ordinal=1";
	$res=mysql_query($sql1) or die(mysql_error());
	$row = mysql_fetch_object($res);

	$jsondata['ordinal1'] = $row->ordinal;
        $jsondata['phonenumber1'] = $row->phonenumber;
        $jsondata['timeout1'] = $row->timeout;

	$sql2="SELECT * from followme_numbers where name=$peer AND ordinal=2";
	$res2=mysql_query($sql2) or die(mysql_error());
	$row = mysql_fetch_object($res2);

	$jsondata['ordinal2'] = $row->ordinal;
        $jsondata['phonenumber2'] = $row->phonenumber;
        $jsondata['timeout2'] = $row->timeout;

	$sql3="SELECT * from followme_numbers where name=$peer AND ordinal=3";
	$res3=mysql_query($sql3) or die(mysql_error());
	$row = mysql_fetch_object($res3);

	$jsondata['ordinal3'] = $row->ordinal;
        $jsondata['phonenumber3'] = $row->phonenumber;
        $jsondata['timeout3'] = $row->timeout;

	$sql4="SELECT * from followme_numbers where name=$peer AND ordinal=4";
	$res4=mysql_query($sql4) or die(mysql_error());
	$row = mysql_fetch_object($res4);

	$jsondata['ordinal4'] = $row->ordinal;
        $jsondata['phonenumber4'] = $row->phonenumber;
        $jsondata['timeout4'] = $row->timeout;

	$sql5="SELECT * from followme_numbers where name=$peer AND ordinal=5";
	$res5=mysql_query($sql5) or die(mysql_error());
	$row = mysql_fetch_object($res5);

	$jsondata['ordinal5'] = $row->ordinal;
        $jsondata['phonenumber5'] = $row->phonenumber;
        $jsondata['timeout5'] = $row->timeout;


	echo json_encode($jsondata);
}

}
?>
