<?php
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
header ("Location: ../userlog.php.php");

}else{include "loginsql.php";

$peer=$_GET['peer'];

$number1=$_GET['number1'];
$number2=$_GET['number2'];
$number3=$_GET['number3'];
$number4=$_GET['number4'];
$number5=$_GET['number5'];

$time1=$_GET['time1'];
$time2=$_GET['time2'];
$time3=$_GET['time3'];
$time4=$_GET['time4'];
$time5=$_GET['time5'];


$sql1="INSERT INTO  followme(name,musicclass,context,takecall,declinecall) VALUES('$peer','default','followme','1','2')";
mysql_query($sql1) or die(mysql_error());

if ($number1 != ''){
	if(isset($time1)){
		$sql2="INSERT INTO followme_numbers(name,ordinal,phonenumber,timeout) VALUES('$peer','1','$number1','$time1') ";
		mysql_query($sql2) or die(mysql_error());
		echo "1";
	}else{
		echo "0";
	}
}	

if ($number2 != ''){
	if(isset($time2)){
		$sql2="INSERT INTO followme_numbers(name,ordinal,phonenumber,timeout) VALUES('$peer','2','$number2','$time2') ";
		mysql_query($sql2) or die(mysql_error());
		echo "1";
	}else{
		echo "kk";
	}
}	

if ($number3 != ''){
	if(isset($time3)){
		$sql2="INSERT INTO followme_numbers(name,ordinal,phonenumber,timeout) VALUES('$peer','3','$number3','$time3') ";
		mysql_query($sql2) or die(mysql_error());
		echo "1";
	}else{
                echo "kk";
        }
	
}
	
if ($number4 != ''){
	if(isset($time4)){
		$sql2="INSERT INTO followme_numbers(name,ordinal,phonenumber,timeout) VALUES('$peer','4','$number4','$time4') ";
		mysql_query($sql2) or die(mysql_error());
		echo "1";
	}else{
		echo "kk";
	}	
}

if ($number5 != ''){
	if(isset($time5)){
		$sql2="INSERT INTO followme_numbers(name,ordinal,phonenumber,timeout) VALUES('$peer','5','$number5','$time5') ";
		mysql_query($sql2) or die(mysql_error());
		echo "1";
	}else{
                echo "kk";
        }

}	

}
?>
