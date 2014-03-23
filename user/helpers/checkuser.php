<?php
include "loginsql.php";

$username = $_POST['username']; //Set UserName
$password = $_POST['password']; //Set Password

if(isset($username, $password)) {
    ob_start();

    $myusername = stripslashes($username);
    $mypassword = stripslashes($password);

    $sql="SELECT * FROM voicemail_users WHERE customer_id='$myusername' and password='$mypassword'";
    $result=mysql_query($sql);
    $count=mysql_num_rows($result);
    $row = mysql_fetch_array($result);
    // If result matched $myusername and $mypassword, table row must be 1 row
    if($count==1){
        // Register $myusername, $mypassword and redirect to file "main.php"
        //session_register("admin");
        //session_register("password");
        session_start();
	$_SESSION['login'] = "1";
	$_SESSION['name']= $row['fullname'];
	$_SESSION['peer']= $row['customer_id'];
//	echo "1";
        header("location:../user.php");
    }
    else {
	$msg = "Wrong Username or Password. Please retry&type=0";
//	echo "0";
        header("location:../userlog.php?msg=$msg");
    }
    ob_end_flush();
}
else {
//	echo "0";
	$msg = "Wrong Username or Password. Please retry&type=0";
    header("location:../index.php?msg=$msg");
}
?>
	

