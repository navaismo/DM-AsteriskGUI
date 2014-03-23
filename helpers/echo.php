<?php

//Get the new html template
$val = $_POST['val'];

//replace " with '
$val=preg_replace("/\"/","'",$val);

//Add to the new body the separators
$replacement = "//b1\n\"".$val."\";\n//b2";

//if empty dont do anything
if ($val == ''){
	echo 0;

}else{

	//get the script file
	$file = basename("/etc/asterisk/sendvm.php");
	$text = file_get_contents("/etc/asterisk/sendvm.php");

	// replace the old body with the new body
	$test = preg_replace("/\/\/b1(.*)\/\/b2/s",$replacement,$text);

	// write the changes
	file_put_contents('/etc/asterisk/'.$file, $test);

	//all is good now ¿?
	echo 1;
}

?>
