<?php
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
header ("Location: ../index.php");

}else{

include "../include/loginsql.php";

$quename=$_GET['quename'];
$quemusic=$_GET['quemusic'];
$queannounce=$_GET['queannounce'];
$quecontext=$_GET['quecontext'];
$quetimeout=$_GET['quetimeout'];
$quemonitortype=$_GET['quemonitortype'];
$quemonitorformat=$_GET['quemonitorformat'];
$queannouncefreq=$_GET['queannouncefreq'];
$queannouncehold=$_GET['queannouncehold'];
$queannounceperi=$_GET['queannounceperi'];
$queannounceperifreq=$_GET['queannounceperifreq'];
$queretry=$_GET['queretry'];
$queringuse=$_GET['queringinuse'];
$queautofill=$_GET['queautofill'];
$queautopause=$_GET['queautopause'];
$quesetvar=$_GET['quesetvar'];
$quewrap=$_GET['quewrap'];
$quemaxlen=$_GET['quemaxlen'];
$queservicelevel=$_GET['queservicelevel'];
$questrategy=$_GET['questrategy'];
$quejoinempty=$_GET['quejoinempty'];
$queleaveempty=$_GET['queleaveempty'];
$quereporthold=$_GET['quereporthold'];
$queweight=$_GET['queweight'];

if($quename==''){
	echo "0";
}elseif( $questrategy==''){ 
	echo "0";

}else{

 echo "1";

$sql="INSERT INTO queue_table(name,musicclass,announce,context,timeout,monitor_type,monitor_format, announce_frequency, announce_holdtime, periodic_announce,  periodic_announce_frequency, retry, ringinuse, autofill, autopause, setinterfacevar, wrapuptime, maxlen, servicelevel, strategy, joinempty, leavewhenempty, reportholdtime, weight) Values('$quename','$quemusic','$queannounce','$quecontext','$quetimeout','$quemonitortype','$quemonitorformat','$queannouncefreq','$queannouncehold','$queannounceperi','$queannounceperifreq','$queretry','$queringuse','$queautofill','$queautopause','$quesetvar','$quewrap','$quemaxlen','$queservicelevel','$questrategy','$quejoinempty','$queleaveempty','$quereporthold','$queweight')";
mysql_query($sql) or die(mysql_error());


}
}
?>
