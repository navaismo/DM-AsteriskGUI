<?php
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
header ("Location: ../index.php");

}else{
include "../include/loginsql.php";

$range1=$_GET['range1'];
$range2=$_GET['range2'];
$filter1=$_GET['filter1'];
$filter2=$_GET['filter2'];

if ($filter1=='All'){


	$sql="SELECT calldate, clid, src, dst, channel,duration, billsec, accountcode, userfield, disposition, uniqueid from cdr WHERE calldate >='" . $range1 . " 00:00:00' AND calldate <='" . $range2 . " 23:59:59'  order by calldate asc";


        $res=mysql_query($sql) or die(mysql_error());

//	                                echo "<br><br><div class='downbtn'><a href=''>Download Report</button></div>";
					echo "<div id='users-contain2' class='ui-widget'>";
					echo "<br><table id='tablefilt'  class='table  table-bordered table-striped table-condensed'>
                                        <thead>
                                        <tr class='ui-widget-header '>
                                        <th>Calldate</th>
                                        <th>CallerID</th>
                                        <th>Source</th>
                                        <th>Destination</th>
                                        <th>Duration</th>
                                        <th>BillTime</th>
                                        <th>Status</th>
                                        <th>Accountcode</th>
                                        <th>Userfield</th>
                                        <th>UniqueID</th>
                                        </tr>
                                        </thead>
                                        <tbody>";

                                        while($row = mysql_fetch_array($res)){
                                                
						$dur=gmdate("H:i:s", $row['duration']);
						$bill=gmdate("H:i:s", $row['billsec']);
						
						echo "<tr id=". $row['id'] .">";
                                                echo "<td><p>" . $row['calldate'] . "</p></td>";
                                                echo "<td>" . $row['clid'] . "</td>";
                                                echo "<td>" . $row['src'] . "</td>";
                                                echo "<td>" . $row['dst'] . "</td>";
                                                echo "<td>" . $dur . "</td>";
                                                //echo "<td>" . $row['duration'] . "</td>";
                                                //echo "<td>" . $row['billsec'] . "</td>";
                                                echo "<td>" . $bill . "</td>";
                                                echo "<td>" . $row['disposition'] . "</td>";
                                                echo "<td>" . $row['accountcode'] . "</td>";
                                                echo "<td>" . $row['userfield'] . "</td>";
                                                echo "<td>" . $row['uniqueid'] . "</td>";

                }
                                echo "</tr>";
                                echo "</tbody></table></div>";

}else if($filter1=='extension'){

	//$sql="SELECT calldate, clid, src, dst, channel,duration, billsec, accountcode, userfield, disposition, uniqueid from cdr WHERE calldate >='" . $range1 . " 00:00:00' AND calldate <='" . $range2 . " 23:59:59' AND src='$filter2'  OR  dst='$filter2' order by calldate asc";
	$sql="SELECT calldate, clid, src, dst, channel,duration, billsec, accountcode, userfield, disposition, uniqueid from cdr WHERE calldate >='" . $range1 . " 00:00:00' AND calldate <='" . $range2 . " 23:59:59' AND src='$filter2'  OR  calldate >='" . $range1 . " 00:00:00' AND calldate <='" . $range2 . " 23:59:59' AND userfield like '\"%$filter2\"' order by calldate asc";
//	echo $sql;
        $res=mysql_query($sql) or die(mysql_error());

					echo "<br><div id='users-contain2' class='ui-widget'>";
                                        echo "<table id='tablefilt' class='table table-bordered table-striped table-condensed'>
                                        <thead>
                                        <tr class='ui-widget-header '>
                                        <th>Calldate</th>
                                        <th>CallerID</th>
                                        <th>Source</th>
                                        <th>Destination</th>
                                        <th>Duration</th>
                                        <th>BillTime</th>
                                        <th>Status</th>
                                        <th>Accountcode</th>
                                        <th>Userfield</th>
                                        <th>UniqueID</th>
                                        </tr>
                                        </thead>
                                        <tbody>";

                                        while($row = mysql_fetch_array($res)){
                                                
						$dur=gmdate("H:i:s", $row['duration']);
						$bill=gmdate("H:i:s", $row['billsec']);
						
						echo "<tr id=". $row['id'] .">";
                                                echo "<td>" . $row['calldate'] . "</td>";
                                                echo "<td>" . $row['clid'] . "</td>";
                                                echo "<td>" . $row['src'] . "</td>";
                                                echo "<td>" . $row['dst'] . "</td>";
                                                echo "<td>" . $dur . "</td>";
                                                //echo "<td>" . $row['duration'] . "</td>";
                                                //echo "<td>" . $row['billsec'] . "</td>";
                                                echo "<td>" . $bill . "</td>";
                                                echo "<td>" . $row['disposition'] . "</td>";
                                                echo "<td>" . $row['accountcode'] . "</td>";
                                                echo "<td>" . $row['userfield'] . "</td>";
                                                echo "<td>" . $row['uniqueid'] . "</td>";

                }
                                echo "</tr>";
                                echo "</tbody></table></div>";

}else if($filter1=='accountcode'){
	$sql="SELECT calldate, clid, src, dst, channel,duration, billsec, accountcode, userfield, disposition, uniqueid from cdr WHERE calldate >='" . $range1 . " 00:00:00' AND calldate <='" . $range2 . " 23:59:59'  AND accountcode='$filter2' order by calldate asc";


        $res=mysql_query($sql) or die(mysql_error());

					echo "<br><div id='users-contain2' class='ui-widget'>";
                                        echo "<table id='tablefilt' class='table  table-bordered table-striped table-condensed''>
                                        <thead>
                                        <tr class='ui-widget-header '>
                                        <th>Calldate</th>
                                        <th>CallerID</th>
                                        <th>Source</th>
                                        <th>Destination</th>
                                        <th>Duration</th>
                                        <th>BillTime</th>
                                        <th>Status</th>
                                        <th>Accountcode</th>
                                        <th>Userfield</th>
                                        <th>UniqueID</th>
                                        </tr>
                                        </thead>
                                        <tbody>";

                                        while($row = mysql_fetch_array($res)){
                                                
						$dur=gmdate("H:i:s", $row['duration']);
						$bill=gmdate("H:i:s", $row['billsec']);
						
						echo "<tr id=". $row['id'] .">";
                                                echo "<td>" . $row['calldate'] . "</td>";
                                                echo "<td>" . $row['clid'] . "</td>";
                                                echo "<td>" . $row['src'] . "</td>";
                                                echo "<td>" . $row['dst'] . "</td>";
                                                echo "<td>" . $dur . "</td>";
                                                //echo "<td>" . $row['duration'] . "</td>";
                                                //echo "<td>" . $row['billsec'] . "</td>";
                                                echo "<td>" . $bill . "</td>";
                                                echo "<td>" . $row['disposition'] . "</td>";
                                                echo "<td>" . $row['accountcode'] . "</td>";
                                                echo "<td>" . $row['userfield'] . "</td>";
                                                echo "<td>" . $row['uniqueid'] . "</td>";

                }
                                echo "</tr>";
                                echo "</tbody></table></div>";

}

}
?>
