
<?php
 require_once('/var/lib/asterisk/agi-bin/phpagi/phpagi-asmanager.php');
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
header ("Location: ../index.php");

}else{

      	$asm = new AGI_AsteriskManager();
          if($asm->connect('localhost','admin','managerpwd')){
                $peer = $asm->command("core show channels");
		preg_match('/(.*) active call/',$peer['data'],$res);
	        //print_r($res);
        	$calls=explode(" ",$res[0]);
          }

    $asm->disconnect();



        $jsondata['calls'] = $calls[0];
        echo json_encode($jsondata);
	
}
?>


