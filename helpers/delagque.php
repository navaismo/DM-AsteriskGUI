<?php
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
header ("Location: ../index.php");

}else{
include '../include/loginsql.php';


$id=$_GET['id'];
$queue=$_GET['queue'];


$sql1="Delete from queue_agents where agent_id='$id' AND agent_queue='$queue'";
mysql_query($sql1) or die(mysql_error());

header("location:queue.php");

}		
?>
