
<?php
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
header ("Location: ../index.php");

}else{

$cpus=exec("cat /proc/loadavg");
$cputime=explode(" ",$cpus);

/*
echo $cputime[0]."
";
echo $cputime[1]."
";
echo $cputime[2]."
";
*/
        $jsondata['cpu1'] = $cputime[0];
        $jsondata['cpu2'] = $cputime[1];
        $jsondata['cpu3'] = $cputime[2];
        echo json_encode($jsondata);

}
?>


