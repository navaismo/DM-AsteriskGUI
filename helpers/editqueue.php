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

$sql="UPDATE queue_table SET musicclass='$quemusic',announce='$queannounce',context='$quecontext',timeout='$quetimeout',monitor_type='$quemonitortype',monitor_format='$quemonitorformat',announce_frequency='$queannouncefreq',announce_holdtime='$queannouncehold',periodic_announce='$queannounceperi',periodic_announce_frequency='$queannounceperifreq',retry='$queretry',ringinuse='$queringuse',autofill='$queautofill',autopause='$queautopause',setinterfacevar='$quesetvar',wrapuptime='$quewrap',maxlen='$quemaxlen',servicelevel='$queservicelevel',strategy='$questrategy',joinempty='$quejoinempty',leavewhenempty='$queleaveempty',reportholdtime='$quereporthold',weight='$queweight' WHERE name='$quename'";

mysql_query($sql) or die(mysql_error());

}


?>
