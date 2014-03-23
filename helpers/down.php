<?php
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
header ("Location: index.php");

}else{
include "loginsql.php";

date_default_timezone_set('America/Mexico_City');
$range1=$_GET['range1'];
$range2=$_GET['range2'];
$filter1=$_GET['filter1'];
$filter2=$_GET['filter2'];
$q =date("Y-M-d");
echo $q;
if ($filter1=='All'){

 //       $sql="SELECT calldate, clid, src, dst, channel,duration, billsec, accountcode, userfield, uniqueid from cdr WHERE calldate >='" . $range1 . " 00:00:00' AND calldate <='" . $range2 . " 23:59:59'  order by calldate asc";
        $sql="SELECT * from cdr WHERE calldate >='" . $range1 . " 00:00:00' AND calldate <='" . $range2 . " 23:59:59'  order by calldate asc";
        $result=mysql_query($sql) or die(mysql_error());
	$count = mysql_num_fields($result);

	for ($i = 0; $i < $count; $i++){ 
	    $header .= mysql_field_name($result, $i)."\t"; 
	} 

	while($row = mysql_fetch_row($result)){ 
		$line = ''; 
 			foreach($row as $value){ 
				if(!isset($value) || $value == ""){ 
					$value = "\t"; 
				}else{ 
					# important to escape any quotes to preserve them in the data. 
					$value = str_replace('"', '""', $value); 
					# needed to encapsulate data in quotes because some data might be multi line. 
					# the good news is that numbers remain numbers in Excel even though quoted. 
					$value = '"' . $value . '"' . "\t"; 
				} 
				
				$line .= $value; 
 			} 
		$data .= trim($line)."\n"; 
	} 


	# this line is needed because returns embedded in the data have "\r" 
	# and this looks like a "box character" in Excel 
  	$data = str_replace("\r", "", $data); 


	# Nice to let someone know that the search came up empty. 
	# Otherwise only the column name headers will be output to Excel. 
	//if ($data == "") { 
	//  $data = "\nno matching records found\n"; 
	//} 

	# This line will stream the file to the user rather than spray it across the screen 
	header("Content-type: application/octet-stream"); 

	# replace $dbname.xls with whatever you want the filename to default to 
	# Default $dbname uses the Database name you are exporting from 
	header("Content-Disposition: attachment; filename=" .$q. "_CDR_Report.xls"); 
	header("Pragma: no-cache"); 
	header("Expires: 0"); 

	echo $header."\n".$data;  

}else if($filter1=='extension'){

//        $sql="SELECT calldate, clid, src, dst, channel,duration, billsec, accountcode, userfield, uniqueid from cdr WHERE calldate >='" . $range1 . " 00:00:00' AND calldate <='" . $range2 . " 23:59:59' AND src='$filter2'  order by calldate asc";
//        $sql="SELECT * from cdr WHERE calldate >='" . $range1 . " 00:00:00' AND calldate <='" . $range2 . " 23:59:59' AND src='$filter2'  order by calldate asc";
	
	$sql="SELECT * from cdr WHERE calldate >='" . $range1 . " 00:00:00' AND calldate <='" . $range2 . " 23:59:59' AND src='$filter2'  OR  calldate >='" . $range1 . " 00:00:00' AND calldate <='" . $range2 . " 23:59:59' AND userfield like '\"%$filter2\"' order by calldate asc";
        $result=mysql_query($sql) or die(mysql_error());
	$count = mysql_num_fields($result);

	for ($i = 0; $i < $count; $i++){ 
	    $header .= mysql_field_name($result, $i)."\t"; 
	} 

	while($row = mysql_fetch_row($result)){ 
		$line = ''; 
 			foreach($row as $value){ 
				if(!isset($value) || $value == ""){ 
					$value = "\t"; 
				}else{ 
					# important to escape any quotes to preserve them in the data. 
					$value = str_replace('"', '""', $value); 
					# needed to encapsulate data in quotes because some data might be multi line. 
					# the good news is that numbers remain numbers in Excel even though quoted. 
					$value = '"' . $value . '"' . "\t"; 
				} 
				
				$line .= $value; 
 			} 
		$data .= trim($line)."\n"; 
	} 


	# this line is needed because returns embedded in the data have "\r" 
	# and this looks like a "box character" in Excel 
  	$data = str_replace("\r", "", $data); 


	# Nice to let someone know that the search came up empty. 
	# Otherwise only the column name headers will be output to Excel. 
	//if ($data == "") { 
	//  $data = "\nno matching records found\n"; 
	//} 

	# This line will stream the file to the user rather than spray it across the screen 
	header("Content-type: application/octet-stream"); 

	# replace $dbname.xls with whatever you want the filename to default to 
	# Default $dbname uses the Database name you are exporting from 
	header("Content-Disposition: attachment; filename=" .$q. "_CDR_Report.xls"); 
	header("Pragma: no-cache"); 
	header("Expires: 0"); 

	echo $header."\n".$data;  

}else if($filter1=='accountcode'){

//        $sql="SELECT calldate, clid, src, dst, channel,duration, billsec, accountcode, userfield, uniqueid from cdr WHERE calldate >='" . $range1 . " 00:00:00' AND calldate <='" . $range2 . " 23:59:59'  AND accountcode='$filter2' order by calldate asc";
        $sql="SELECT * from cdr WHERE calldate >='" . $range1 . " 00:00:00' AND calldate <='" . $range2 . " 23:59:59'  AND accountcode='$filter2' order by calldate asc";
        $result=mysql_query($sql) or die(mysql_error());
	$count = mysql_num_fields($result);

	for ($i = 0; $i < $count; $i++){ 
	    $header .= mysql_field_name($result, $i)."\t"; 
	} 

	while($row = mysql_fetch_row($result)){ 
		$line = ''; 
 			foreach($row as $value){ 
				if(!isset($value) || $value == ""){ 
					$value = "\t"; 
				}else{ 
					# important to escape any quotes to preserve them in the data. 
					$value = str_replace('"', '""', $value); 
					# needed to encapsulate data in quotes because some data might be multi line. 
					# the good news is that numbers remain numbers in Excel even though quoted. 
					$value = '"' . $value . '"' . "\t"; 
				} 
				
				$line .= $value; 
 			} 
		$data .= trim($line)."\n"; 
	} 


	# this line is needed because returns embedded in the data have "\r" 
	# and this looks like a "box character" in Excel 
  	$data = str_replace("\r", "", $data); 


	# Nice to let someone know that the search came up empty. 
	# Otherwise only the column name headers will be output to Excel. 
	//if ($data == "") { 
	//  $data = "\nno matching records found\n"; 
	//} 

	# This line will stream the file to the user rather than spray it across the screen 
	header("Content-type: application/octet-stream"); 

	# replace $dbname.xls with whatever you want the filename to default to 
	# Default $dbname uses the Database name you are exporting from 
	
	header("Content-Disposition: attachment; filename=" .$q. "_CDR_Report.xls"); 
	header("Pragma: no-cache"); 
	header("Expires: 0"); 

	echo $header."\n".$data;  
}
}
?>
