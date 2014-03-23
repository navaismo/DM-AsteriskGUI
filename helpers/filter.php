<?php
/*session_start(); //Start the session

define(ADMIN,$_SESSION['name']); //Get the user name from the previously registered super global variable

if(!session_is_registered("admin")){

//If session not registered
header("location:../index.php"); // Redirect to login.php page
*/

session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
header ("Location: ../index.php");



}else{
include "../include/loginsql.php";

$filter=$_GET['filter'];


if ($filter == 'extension'){
	$sql="Select name from sip_buddies";
	$res=mysql_query($sql) or die(mysql_error());

	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select id='filter2' class='ui-widget ui-widget-content'>";
	while ($row = mysql_fetch_assoc($res)) {
		$va = $row['name'];
		echo "<option value='$va'>$va</option>";
	}
	echo "</select><br><br>";

}else if( $filter == 'accountcode'){

	$sql="select Distinct accountcode from cdr";
	$res=mysql_query($sql) or die(mysql_error());

	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select id='filter2' class='ui-widget ui-widget-content'>";
	while ($row = mysql_fetch_assoc($res)){
		$va = $row['accountcode'];
		echo "<option value='$va'>$va</option>";
	}
	echo "</select><br><br>";

}else if ($filter == 'All'){
	echo "";
}


}
?>

