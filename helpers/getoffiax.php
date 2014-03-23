
<?php
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
header ("Location: ../index.php");

}else{
require_once('/var/lib/asterisk/agi-bin/phpagi/phpagi-asmanager.php');

        $asm = new AGI_AsteriskManager();
          if($asm->connect('localhost','admin','m4nag3rt3ts')){
                $peer = $asm->command("sip show peers");
                //print_r($peer);
                preg_match('/\[(.*)/', $peer['data'], $val);
                //print_r($val);
                $online = explode(",",$val[1]);
                $offline = explode(",",$val[1]);
                $offline = explode("Unmonitored",$offline[1]);

                echo "ONline: ".$online[0];
                echo "\noffline: ".$offline[0];

       	  }

    $asm->disconnect();



        $jsondata['offiax'] = $offline[0];
        echo json_encode($jsondata);

}
?>

