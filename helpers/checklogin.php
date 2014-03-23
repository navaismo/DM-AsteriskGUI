<?php
include "../include/loginsql.php";

$username = $_POST['username']; //Set UserName
$password = $_POST['password']; //Set Password

if(isset($username, $password)) {
    ob_start();

    $myusername = stripslashes($username);
    $mypassword = stripslashes($password);

    $sql="SELECT * FROM usuarios WHERE userid='$myusername' and password=SHA('$mypassword')";
    $result=mysql_query($sql);
    $count=mysql_num_rows($result);
    // If result matched $myusername and $mypassword, table row must be 1 row
    if($count==1){
        // Register $myusername, $mypassword and redirect to file "main.php"
        //session_register("admin");
        //session_register("password");
        session_start();
	$_SESSION['login'] = "1";
	$_SESSION['name']= $myusername;
//	echo "1";
        header("location:../main.php");
    }
    else {
	$msg = "Wrong Username or Password. Please retry&type=0";
//	echo "0";
        header("location:../../index.php?msg=$msg");
    }
    ob_end_flush();
}
else {
//	echo "0";
	$msg = "Wrong Username or Password. Please retry&type=0";
    header("location:../index.php?msg=$msg");
}
?>
	

