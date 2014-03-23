<?php
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
header ("Location: ../index.php");

}else{
include '../include/loginsql.php';


$id=$_GET['id'];

$sql="select agent_id from queue_agents where agent_queue='$id'";
$result = mysql_query($sql)or die(mysql_error());
	
echo "	<br>
 	<p>Select the Agent</p>
	 <form>
	 <table align=center class='ui-widget ui-widget-content'>
	 <tr><td><label for='agentid'>Agent</label></td><td>";

echo "	<select name=selagented id='selagented' class='text ui-widget-content ui-corner-all'>";

while($row = mysql_fetch_array($result)){
	echo "<option value =". $row['agent_id'] .">". $row['agent_id'] ."</option>";
}

echo "	</select>
	</table>
	</form>";

}		
?>
