<?php
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
header ("Location: ../index.php");

}else{
include "../include/loginsql.php";

$customeridvm=$_GET['customeridvm'];
$callbackvm=$_GET['callbackvm'];
$mailboxvm=$_GET['mailboxvm'];
$emailvm=$_GET['emailvm'];
$fullnamevm=$_GET['fullnamevm'];
$passwordvm=$_GET['passwordvm'];

if($customeridvm==''){
	echo "0";
}elseif( $callbackvm==''){ 
	echo "0";
}elseif( $mailboxvm==''){ 
	echo "0";
}elseif( $emailvm==''){ 
	echo "0";

}elseif( $fullnamevm==''){ 
	echo "0";

}elseif( $passwordvm==''){ 
	echo "0";


}else{

 echo "1";


$sql="INSERT INTO voicemail_users(customer_id,callback,mailbox,email,fullname,password) Values('$customeridvm','$callbackvm','$mailboxvm','$emailvm','$fullnamevm','$passwordvm')";
mysql_query($sql) or die(mysql_error());


}
}
?>
