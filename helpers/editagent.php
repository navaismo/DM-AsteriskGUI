<?php
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
header ("Location: ../index.php");

}else{
include "../include/loginsql.php";


$agentid=$_GET['agent_id'];
$agentname=$_GET['agent_name'];
$agentpass=$_GET['agent_pass'];

$sql="UPDATE agents SET  agent_name='$agentname', agent_pass='$agentpass' WHERE agent_id='$agentid'";
mysql_query($sql) or die(mysql_error());



}
?>
