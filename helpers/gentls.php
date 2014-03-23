<?php
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
header ("Location: ../index.php");

}else{
	include "../include/loginsql.php";

	$type=$_GET['type'];
	$dns=$_GET['dns'];
	$name=$_GET['name'];
	$client=$_GET['client'];
	$pwd=$_GET['pwd'];

	if ( $type == 'peer' ){

		if ( $dns == '' || $name = '' || $client == '' || $pwd == '' ){
			echo 0;
		}else{
			//echo "type peer";
			exec("expect ../tlsscripts/create_peer_cert.exp $dns '$name' $client $pwd");
			echo 1;
		}

	}else if ( $type == 'server'){
		if ( $dns == '' || $name = '' || $pwd == '' ){
			echo 0;
		}else{
			//echo "type server";
			exec("expect ../tlsscripts/create_ast_cert.exp $dns '$name' $pwd");
			echo 1;

		}	


	}	



}
?>
