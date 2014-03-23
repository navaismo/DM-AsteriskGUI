<?php

//Get the new values
$from = $_POST['from'];
$fromname = $_POST['fromname'];
$host = $_POST['host'];
$pwd = $_POST['pwd'];
$usn = $_POST['username'];
$port = $_POST['port'];
$subject = $_POST['subject'];


//if empty dont do anything
if ($from == '' || $fromname == '' || $host == '' || $pwd == '' || $usn == '' || $port == '' || $subject == ''){
	echo 0;

}else{


$from = "//f1\n\"".$_POST['from']."\";\n//f2";
$fromname = "//n1\n\"".$_POST['fromname']."\";\n//n2";
$host = "//h1\n\"".$_POST['host']."\";\n//h2";
$pwd = "//p1\n\"".$_POST['pwd']."\";\n//p2";
$usn = "//u1\n\"".$_POST['username']."\";\n//u2";
$port = "//o1\n\"".$_POST['port']."\";\n//o2";
$subject = "//s1\n\"".$_POST['subject']."\";\n//s2";


	//get the script file
	$file = basename("/etc/asterisk/sendvm.php");
	$text = file_get_contents("/etc/asterisk/sendvm.php");

	// replace the old body with the new body
	$test = preg_replace("/\/\/f1(.*)\/\/f2/s",$from,$text);
	$test1 = preg_replace("/\/\/n1(.*)\/\/n2/s",$fromname,$test);
	$test2 = preg_replace("/\/\/h1(.*)\/\/h2/s",$host,$test1);
	$test3 = preg_replace("/\/\/p1(.*)\/\/p2/s",$pwd,$test2);
	$test4 = preg_replace("/\/\/u1(.*)\/\/u2/s",$usn,$test3);
	$test5 = preg_replace("/\/\/o1(.*)\/\/o2/s",$port,$test4);
	$test6 = preg_replace("/\/\/s1(.*)\/\/s2/s",$subject,$test5);

	//echo $test6;

	// write the changes
	file_put_contents('/etc/asterisk/'.$file, $test6);

	//all is good now ¿?
	echo 1;
}

?>
