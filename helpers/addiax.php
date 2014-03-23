<?php
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
header ("Location: ../index.php");

}else{
include "../include/loginsql.php";

$extension=$_GET['extension'];
$secret=$_GET['secret'];
$callerid=$_GET['callerid'];
$context=$_GET['context'];
$mailbox=$_GET['mailbox'];
$email=$_GET['email'];
$host=$_GET['host'];
$callgroup=$_GET['callgroup'];
$pickupgroup=$_GET['pickupgroup'];
$qualify=$_GET['qualify'];
$allow=$_GET['allow'];
$videosupport=$_GET['videosupport'];
$type=$_GET['type'];
$requirecalltoken=$_GET['requirecalltoken'];


if($extension==''){
	echo "0";
}elseif( $secret==''){ 
	echo "0";
}elseif( $callerid==''){ 
	echo "0";
}elseif( $context==''){ 
	echo "0";

}elseif( $mailbox==''){ 
	echo "0";

}elseif( $email==''){ 
	echo "0";

}elseif( $requirecalltoken==''){ 
	echo "0";

}elseif( $host==''){ 
	echo "0";

}elseif( $callgroup==''){ 
	echo "0";

}elseif( $pickupgroup==''){ 
	echo "0";

}elseif( $qualify==''){ 
	echo "0";

}elseif( $allow==''){ 
	echo "0";

}elseif( $videosupport==''){ 
	echo "0";

}elseif( $type=='' ){

	echo "0";

}else{

 echo "1";


$fname=explode('<',$callerid);
$cid=$fname[0];

$dname=explode('"',$cid);
$name=$dname[1];

$sql="INSERT INTO iax_buddies(name,secret,callerid,context,mailbox,host,callgroup,pickupgroup,qualify,allow,videosupport,type,requirecalltoken) Values('$extension','$secret','$callerid','$context','$mailbox','$host','$callgroup','$pickupgroup','$qualify','$allow','$videosupport','$type','$requirecalltoken')";
mysql_query($sql) or die(mysql_error());

$sql2="INSERT INTO voicemail_users(customer_id,context,mailbox,password,fullname,email) Values('$extension','default','$mailbox','$extension','$name','$email')";
mysql_query($sql2) or die(mysql_error());

}
}
?>
