<?php
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
header ("Location: ../index.php");

}else{




require_once('/var/lib/asterisk/agi-bin/phpagi/phpagi-asmanager.php');
include "../include/loginsql.php";

$extension=$_GET['extension'];
$secret=$_GET['secret'];
$callerid=$_GET['callerid'];
$context=$_GET['context'];
$mailbox=$_GET['mailbox'];
$email=$_GET['email'];
$nat=$_GET['nat'];
$host=$_GET['host'];
$callgroup=$_GET['callgroup'];
$pickupgroup=$_GET['pickupgroup'];
$qualify=$_GET['qualify'];
$allow=$_GET['allow'];
$videosupport=$_GET['videosupport'];
$type=$_GET['type'];
$account=$_GET['account'];
$editpin=$_GET['editpin'];
$permit=$_GET['permit'];
$deny=$_GET['deny'];
$transport=$_GET['transport'];
$dtmfmode=$_GET['dtmfmode'];
$directmedia=$_GET['directmedia'];
$encryption=$_GET['encryption'];

if($extension==''){
	echo "0";
}elseif( $secret==''){ 
	echo "0";
}elseif( $callerid==''){ 
	echo "0";
}elseif( $context==''){ 
	echo "0";

}elseif( $mailbox==''){ 
	echo "0";

}elseif( $email==''){ 
	echo "0";

}elseif( $nat==''){ 
	echo "0";

}elseif( $host==''){ 
	echo "0";

}elseif( $callgroup==''){ 
	echo "0";

}elseif( $pickupgroup==''){ 
	echo "0";

}elseif( $qualify==''){ 
	echo "0";

}elseif( $allow==''){ 
	echo "0";

}elseif( $videosupport==''){ 
	echo "0";

}elseif( $type=='' ){

	echo "0";
}elseif( $editpin=='' ){

	echo "0";

}else{

 echo "1";
$fname=explode('<',$callerid);
$cid=$fname[0];

$dname=explode('"',$cid);
$name=$dname[1];

$sql="INSERT INTO sip_buddies(name,accountcode,secret,callerid,context,mailbox,nat,host,callgroup,pickupgroup,qualify,allow,videosupport,type,permit,deny,transport,dtmfmode,directmedia,encryption) Values('$extension','$account','$secret','$callerid','$context','$mailbox','$nat','$host','$callgroup','$pickupgroup','$qualify','$allow','$videosupport','$type','$permit','$deny','$transport','$dtmfmode','$directmedia','$encryption')";
mysql_query($sql) or die(mysql_error());

$sql1="INSERT INTO claves(clave_nombre,user_edit,user_exten) Values('$name','$editpin','$mailbox')";
mysql_query($sql1) or die(mysql_error());


$sql2="INSERT INTO voicemail_users(customer_id,context,mailbox,password,fullname,email) Values('$extension','default','$mailbox','$extension','$name','$email')";
mysql_query($sql2) or die(mysql_error());

$file = basename("/etc/asterisk/extensions.conf");
$text = file_get_contents("/etc/asterisk/extensions.conf"); 
$text = str_replace(';;last line extensions', 'exten => '.${extension}.',1,GoSub(subSTDExten,internalcall,1(${EXTEN}))\r;;last line extensions', $text); 
$text = str_replace(';;last line hints', 'exten => '.${extension}.',hint,SIP/'.${extension}.'\r;;last line hints', $text); 
file_put_contents('/etc/asterisk/'.$file, $text);


$asm = new AGI_AsteriskManager();
if($asm->connect('localhost','admin','managerpwd')){
        $peer = $asm->command("sip reload");
        sleep(1);
        $peer = $asm->command("dialplan reload");
        sleep(1);
}
$asm->disconnect();



exec("sh /etc/asterisk/rn.sh");
}
}
?>
