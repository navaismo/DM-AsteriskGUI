<?php
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
header ("Location: ../index.php");

}else{

include "../include/loginsql.php";

$agentid=$_GET['agent_id'];
$agentname=$_GET['agent_name'];
$agentpass=$_GET['agent_pass'];

if($agentid==''){
	echo "0";

}else if($agentname==''){
	echo "0";

}else if($agentpass==''){
	echo "0";

}else{

 echo "1";


$sql="INSERT INTO agents(agent_id,agent_name,agent_pass) Values('$agentid','$agentname','$agentpass')";
mysql_query($sql) or die(mysql_error());


}
}
?>
