<?php
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
header ("Location: ../index.php");

}else{

include "../include/loginsql.php";

$agent_id=$_GET['agent_id'];
$agent_pri=$_GET['agent_pri'];
$queue=$_GET['queue'];

if($agent_id==''){
	echo "0";

}else if($agent_pri==''){
	echo "0";

}else if($queue==''){
	echo "0";

}else{

 echo "1";


$sql="INSERT INTO queue_agents(agent_id,agent_queue,agent_pri) Values('$agent_id','$queue','$agent_pri')";
mysql_query($sql) or die(mysql_error());


}
}
?>
