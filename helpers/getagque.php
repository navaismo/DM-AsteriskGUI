<?php
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
header ("Location: ../index.php");

}else{
include "../include/loginsql.php";

$filter=$_GET['filter'];

if ($filter != ''){


	$sql="SELECT agent_id, agent_pri from queue_agents where agent_queue='$filter'";


        $res=mysql_query($sql) or die(mysql_error());
	
					echo "<h3>Agents in the Queue $filter</h3>";
					echo "<div id='users-contain2' class='ui-widget'>";
					echo "<table id='tableagque' class='table table-condensed table-stripped table-bordered'>
                                        <thead>
                                        <tr class='ui-widget-header '>
                                        <th>Agent</th>
                                        <th>Priority</th>
                                        <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>";

                                        while($row = mysql_fetch_array($res)){
                                                
						echo "<tr id=". $row['agent_id'] .">";
                                                echo "<td>" . $row['agent_id'] . "</td>";
                                                echo "<td>" . $row['agent_pri'] . "</td>";
echo "<td><a class='btn btn-danger' href='delagque.php?id=". $row['agent_id'] ."&queue=$filter'><i class='icon-trash icon-white'></i>Delete</a></td>";
                }
                                echo "</tr>";
                                echo "</tbody></table></div>";


}

}
?>
