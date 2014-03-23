<?php
include "include/loginsql.php";
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
header ("Location: index.php");
}else{ //Continue to current page
header( 'Content-Type: text/html; charset=utf-8' );
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<!--
		Charisma v1.0.0

		Copyright 2012 Muhammad Usman
		Licensed under the Apache License v2.0
		http://www.apache.org/licenses/LICENSE-2.0

		http://usman.it
		http://twitter.com/halalit_usman
	-->
	<meta charset="utf-8">
	<title>Digital-Merge's Asterisk GUI</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
	<meta name="author" content="Muhammad Usman">

	<!-- The styles -->
	<link id="bs-css" href="css/bootstrap-cerulean.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
#fl_menu{position:absolute; top:75px; right:0px; z-index:9999; width:100px; height:30px;}
#fl_menu .label{padding-left:20px; line-height:20px; font-family:"Arial Black", Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; background:#5FB404; color:#fff; letter-spacing:2px;}
#fl_menu .menu{display:none;}
#fl_menu .menu .menu_item{display:block; background:#5FB404; color:#fff; border-top:1px solid #333; padding:10px 20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; text-decoration:none;}
#fl_menu .menu a.menu_item:hover{background:#82CAFA; color:#fff;}
#fl_menu .menu .inline{display:block; background:#5FB404; color:#fff; border-top:1px solid #333; padding:10px 20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; text-decoration:none;}
#fl_menu .menu a.inline:hover{background:#82CAFA; color:#fff;}


	</style>
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/charisma-app.css" rel="stylesheet">
	<link href="css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='css/fullcalendar.css' rel='stylesheet'>
	<link href='css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='css/chosen.css' rel='stylesheet'>
	<link href='css/uniform.default.css' rel='stylesheet'>
	<link href='css/colorbox.css' rel='stylesheet'>
	<link href='css/jquery.cleditor.css' rel='stylesheet'>
	<link href='css/jquery.noty.css' rel='stylesheet'>
	<link href='css/noty_theme_default.css' rel='stylesheet'>
	<link href='css/elfinder.min.css' rel='stylesheet'>
	<link href='css/elfinder.theme.css' rel='stylesheet'>
	<link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='css/opa-icons.css' rel='stylesheet'>
	<link href='css/uploadify.css' rel='stylesheet'>

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- The fav icon -->
	<link rel="shortcut icon" href="favicon.ico">
		
</head>

<body>
		<!-- topbar starts -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="http://www.digital-merge.com" target="_blank"> <img alt="DM LOGO" src="img/DMsmallbck.png" /> </a>
				
				<!-- HELP selector starts -->
				<div class="btn-group pull-right">
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-book"></i><span class="hidden-phone"> HELP</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a  href="help.php#sip">SIP</a></li>
                                                <li class="divider"></li>
                                                <li><a  href="help.php#iax">IAX2</a></li>
                                                <li class="divider"></li>
                                                <li><a  href="help.php#vm">VoiceMail</a></li>
                                                <li class="divider"></li>
                                                <li><a  href="help.php#meetme">Conference</a></li>
                                               	<li class="divider"></li>
                                               	<li><a  href="help.php#Queues">Queues</a></li>
                                                <li class="divider"></li>
                                                <li><a  href="help.php#pinset">Pinset</a></li>
                                                <li class="divider"></li>
                                                <li><a  href="help.php#files">Config Files</a></li>
                                                <li class="divider"></li>
                                                <li><a  href="help.php#cdr">CDR Reports</a></li>
                                                <li class="divider"></li>
                                                <li><a  href="mailto:info@digital-merge.com">Contact Us via Email</a></li>
                                                <li class="divider"></li>
                                                
                                               	<li class="divider"></li>
					</ul>
				</div>
				<!-- HELP selector ends -->
				

				<!-- user dropdown starts -->
				<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-user"></i><span class="hidden-phone"> <?php echo $_SESSION[name];?></span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<!--<li><a href="#">Profile</a></li>-->
						<li><a  href="helpers/logout.php">Logout</a></li>
						<li class="divider"></li>

					</ul>
				</div>
				<!-- user dropdown ends -->
				
				<div class="top-nav nav-collapse">
					<ul class="nav">
						<li><a href="http://www.digital-merge.com" target="_blank"><b>Visit Our Site</b></a></li>
						<li>
							&nbsp;						
							<audio id='audio-remote'></audio>
				                        <button class="btn btn-primary hide" id="callBtn" onclick="call()" >Call Us </button>
				                        <button class="btn btn-danger hide" id="hangUpBtn" onclick="hangUp()" >Hang Up </button>
				                        <span class="label hide" id="callStatusLabel">Calling...</span>
							<span class="label label-inverse" id="statusLabel">If you see this, you need to download Chrome</span>

						</li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>
	<!-- topbar ends -->
		<div class="container-fluid">
		<div class="row-fluid">
				
			<!-- left menu starts -->
			<div class="span2 main-menu-span">
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li class="nav-header hidden-tablet">Main</li>
						<li><a class="ajax-link" href="main.php"><i class="icon-home"></i><span class="hidden-tablet"> Dashboard</span></a></li>
						<li><a class="ajax-link" href="sip.php"><i class="icon-user"></i><span class="hidden-tablet"> SIP Peers</span></a></li>
						<li><a class="ajax-link" href="iax.php"><i class="icon-user"></i><span class="hidden-tablet"> IAX2 Peers</span></a></li>
						<li><a class="ajax-link" href="voicemail.php"><i class="icon-envelope"></i><span class="hidden-tablet"> Voicemail</span></a></li>
						<li><a class="ajax-link" href="meetme.php"><i class="icon-screenshot"></i><span class="hidden-tablet"> Conferences</span></a></li>
						<li><a class="ajax-link" href="queue.php"><i class="icon-align-justify"></i><span class="hidden-tablet"> Queues</span></a></li>
						<li><a class="ajax-link" href="pinset.php"><i class="icon-lock"></i><span class="hidden-tablet"> Pinset</span></a></li>
						<li class="nav-header hidden-tablet">Configuration Files</li>
						<li><a class="ajax-link" href="dialplan.php"><i class="icon-file"></i><span class="hidden-tablet"> Dialplan</span></a></li>
						<li><a class="ajax-link" href="iaxf.php"><i class="icon-file"></i><span class="hidden-tablet"> IAX2</span></a></li>
						<li><a class="ajax-link" href="sipf.php"><i class="icon-file"></i><span class="hidden-tablet"> SIP</span></a></li>
						<li><a class="ajax-link" href="dahdif.php"><i class="icon-file"></i><span class="hidden-tablet"> DAHDI</span></a></li>
						<li class="nav-header hidden-tablet">Reports</li>
						<li><a class="ajax-link" href="cdr.php"><i class="icon-list-alt"></i><span class="hidden-tablet"> CDR Reports</span></a></li>
<li><a class="ajax-link" href="recordings.php"><i class="icon-headphones"></i><span class="hidden-tablet"> Recordings</span></a></li>
<li class="nav-header hidden-tablet">Tools</li>
<li><a class="ajax-link" href="webrtc2sip.php"><i class="icon-wrench"></i><span class="hidden-tablet"> WebRTC2SIP</span></a></li>
<li><a class="ajax-link" href="tls.php"><i class="icon-wrench"></i><span class="hidden-tablet"> TLS Tools</span></a></li>
<li><a class="ajax-link" href="vmt.php"><i class="icon-wrench"></i><span class="hidden-tablet"> Voicemail Template</span></a></li>

					</ul>
						
					
							
				</div><!--/.well -->
			</div><!--/span-->
			<!-- left menu ends -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<div id="content" class="span10">
			<!-- content starts -->
			

			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">WebRTC2SIP</a>
					</li>
				</ul>
			</div>
<!------------------------------------------- All Pages end -------------------------------->

<div class="sortable row-fluid">

				
</div>

	<div class="row-fluid sortable">	
		<div class="box span12">
			<div class="box-header well" data-original-title>
				<h2>WebRTC2SIP Gateway Configuration</h2>
				<div class="box-icon">
					<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				</div>
			</div>

			<div class="box-content">
				<ul class="nav nav-tabs" id="myTab">
					<li class="active"><a href="#webrtcconfig">Config</a></li>
				</ul>
					 

				<div id="myTabContent" class="tab-content">
					<div class="tab-pane active" id="webrtcconfig">







<?php

if (isset($_POST['start_button']))
    {
         exec('screen -dmS wrtc /usr/local/sbin/webrtc2sip --config=/usr/local/sbin/config.xml');
    }

if (isset($_POST['stop_button']))
    {
         exec('killall webrtc2sip');
    }



if(isset($_POST['button'])){
        $pinfo=$_POST['info']; 
        $ptr1=$_POST['tr1']; 
        $ptr2=$_POST['tr2']; 
        $ptr3=$_POST['tr3'];
	$prel=$_POST['rel'] ;
	$prtps=$_POST['rtps'];
	$pmediac=$_POST['mediac'];
	$pvjb=$_POST['vjb'];
	$pvsize=$_POST['vsize'];
	$pbuffs=$_POST['buffs'];
	$pavpf=$_POST['avpf'];
	$psrtpm=$_POST['srtpm'];
	$psrtpt=$_POST['srtpt'];
	$pdtmf=$_POST['dtmf'];
	$pcodecs=$_POST['codecs'];
	$popus=$_POST['opus'];
	$pns=$_POST['ns'];
	$pns2=$_POST['ns2'];
	$pssl=$_POST['ssl'];
	
	//erase the file	
	file_put_contents("/usr/local/sbin/config.xml", "");
	
	//create the new XML
	$fp = fopen("/usr/local/sbin/config.xml", "w");
	fputs($fp, "<?xml version='1.0' encoding='utf-8' ?>");
	fputs($fp, "\n");
	fputs($fp, "<!-- Please check the technical guide (http://webrtc2sip.org/technical-guide-1.0.pdf) for more information on how to adjust this file -->");
	fputs($fp, "\n");
	fputs($fp, "<config>");
	fputs($fp, "\n");
	fputs($fp, "	<debug-level>".$pinfo."</debug-level>");
	fputs($fp, "\n");
	fputs($fp, "	<transport id='1'>".$ptr1."</transport>");
	fputs($fp, "\n");
	fputs($fp, "	<transport id='2'>".$ptr2."</transport>");
	fputs($fp, "\n");
	fputs($fp, "	<transport id='3'>".$ptr3."</transport>");
	fputs($fp, "\n");
	fputs($fp, "	<enable-media-coder>".$pmediac."</enable-media-coder>");
	fputs($fp, "\n");
	fputs($fp, "	<enable-100rel>".$prel."</enable-100rel>");
	fputs($fp, "\n");
	fputs($fp, "	<enable-videojb>".$pvjb."</enable-videojb>");
	fputs($fp, "\n");
	fputs($fp, "	<video-size-pref>".$pvsize."</video-size-pref>");
	fputs($fp, "\n");
	fputs($fp, "	<rtp-buffsize>".$pbuffs."</rtp-buffsize>");
	fputs($fp, "\n");
	fputs($fp, "	<avpf-tail-length>".$pavpf."</avpf-tail-length>");
	fputs($fp, "\n");
	
	if ( $psrtpm == 'disabled'){
		fputs($fp, "	<!--<srtp-mode>".$psrtpm."</srtp-mode>");
		fputs($fp, "\n");
		fputs($fp, "	<srtp-type>".$psrtpt."</srtp-type>-->");
		fputs($fp, "\n");
	}else{
		fputs($fp, "	<srtp-mode>".$psrtpm."</srtp-mode>");
		fputs($fp, "\n");
		fputs($fp, "	<srtp-type>".$psrtpt."</srtp-type>");
		fputs($fp, "\n");
	}		
	fputs($fp, "	<dtmf-type>".$pdtmf."</dtmf-type>");
	fputs($fp, "\n");
	fputs($fp, "	<codecs>".$pcodecs."</codecs>");
	fputs($fp, "\n");
	fputs($fp, "	<codec-opus-maxrates>".$popus."</codec-opus-maxrates>");
	fputs($fp, "\n");
	fputs($fp, "	<nameserver id='1'>".$pns."</nameserver>");
	fputs($fp, "\n");
	fputs($fp, "	<nameserver id='2'>".$pns2."</nameserver>");
	fputs($fp, "\n");
	fputs($fp, "	<ssl-certificates>".$pssl."</ssl-certificates>");
	fputs($fp, "\n");
	fputs($fp, "</config>");
	fputs($fp, "\n");

	fclose($fp);
}

?>

<?php


$myfile = '/usr/local/sbin/config.xml';

if (file_exists($myfile)){
	//Load XML and set some config
	$xml = new DOMDocument('1.0', 'utf-8');
	$xml->validateOnParse = true;
	$xml->formatOutput = true;
	$xml->preserveWhiteSpace = false;
	$xml->load('/usr/local/sbin/config.xml');

	//Get item Element
	$element = $xml->getElementsByTagName('config')->item(0);

	//Load child elements
	$debug = $element->getElementsByTagName('debug-level')->item(0);
	$t1 = $element->getElementsByTagName('transport')->item(0);
	$t2 = $element->getElementsByTagName('transport')->item(1);
	$t3 = $element->getElementsByTagName('transport')->item(2);
	$ertps = $element->getElementsByTagName('enable-rtp-symetric')->item(0);
	$e100 = $element->getElementsByTagName('enable-100rel')->item(0);
	$emc = $element->getElementsByTagName('enable-media-coder')->item(0);
	$evjb = $element->getElementsByTagName('enable-videojb')->item(0);
	$vsize = $element->getElementsByTagName('video-size-pref')->item(0);
	$rtpbuff = $element->getElementsByTagName('rtp-buffsize')->item(0);
	$avpftl = $element->getElementsByTagName('avpf-tail-length')->item(0);
	$srtpmd = $element->getElementsByTagName('srtp-mode')->item(0);
	$srtpty = $element->getElementsByTagName('srtp-type')->item(0);
	$avpftl = $element->getElementsByTagName('avpf-tail-length')->item(0);
	$codecs = $element->getElementsByTagName('codecs')->item(0);
	$dtmft = $element->getElementsByTagName('dtmf-type')->item(0);
	$nameserver = $element->getElementsByTagName('nameserver')->item(0);
	$nameserver2 = $element->getElementsByTagName('nameserver')->item(1);
	$opust = $element->getElementsByTagName('codec-opus-maxrates')->item(0);
	$sslc = $element->getElementsByTagName('ssl-certificates')->item(0);

}else{
	echo "<br><div style='background-color:#f8f8ff; border: 1px solid #aaaaff; padding:10px;font-family:arial;color:red;font-size:12px;text-align:center'>
		<b>
			The configuration file doesn not exist. You must install first the webrtc2sip media gateway: <a href='https://dl.dropboxusercontent.com/u/1277237/webrtc.sh'>Download Here the script for installing it.</a>
		</b>
	</div>";
}
?>
<!--/****************************** html/php code *************************************/-->
	<!--<div id="sysinfo-left" class='infobox ui-corner-all'>-->
	<!--<div>-->
		<form method="post" action="" id="hmm-idk">		
                <table width="60%" align=left>
			<tr>
				<td width="50%">
					<label  data-rel="popover" data-content="Define the minimum debug-level to display.<br> Format: debug-level-value. <br>Debug-level-value = INFO | WARN | ERROR | FATAL" for='info'>Debug Level</label>
					
				</td>
				<td>
					<select name='info' id='info' class="text ui-widget-content ui-corner-all">
						<option value='INFO' <?php if( $debug->textContent == 'INFO' ){ echo "selected='selected'"; } ?> >INFO</option>
						<option value='WARN' <?php if( $debug->textContent == 'WARN' ){ echo "selected='selected'"; } ?> >WARN</option>
						<option value='ERROR' <?php if( $debug->textContent == 'ERROR' ){ echo "selected='selected'"; } ?> >ERROR</option>
						<option value='FATAL' <?php if( $debug->textContent == 'FATAL' ){ echo "selected='selected'"; } ?> >FATAL</option>
					</select>
			</tr>

			<tr>
				<td>
					<label data-rel="popover" data-content=
						"Each entry defines a protocol, local IP address and port to bind to.<br>
						Format: proto-value;local-ip-value;local-port-value<br>
						proto-value: udp | tcp | tls | ws | wss | c2c | c2cs<br>
						'ws' protocol defines WebSocket and 'wss' the secure version. At least one WebSocket transport must be added to allow the web browser to connect to the server. 
								The other protocols (tcp, tls and udp) are used to forward the request from the web browser to
								the SIP-legacy network. 'C2c' and 'c2cs' are used for the click-to-call service and
								runs on top of HTTP or HTTPS protocols respectively.<br>
								local-ip-value: Any valid IP address. Use star (*) to let the server choose the best<br>
								local-ip-value:<br>
								local IP address to bind to. Examples: udp;*;5060 or ws;*;5061 or wss;192.168.0.10;5062<br>
								local-port-value: Any local free port to bind to. Use star (*) to let the server choose the best free port to bind to. Examples: udp;*;*, ws;*;*, wss;*;5062<br>
								" for='trasnport1'>Transport</label>

				</td>
				<td><input type='text' placeholder='udp;*;10060' name='tr1' id='tr1' class="text ui-widget-content ui-corner-all" value="<?php echo $t1->textContent; ?>" /></td>

			</tr>
			<tr>
				<td>

					<label data-rel="popover" data-content=
						"Each entry defines a protocol, local IP address and port to bind to.<br>
						Format: proto-value;local-ip-value;local-port-value<br>
						proto-value: udp | tcp | tls | ws | wss | c2c | c2cs<br>
						'ws' protocol defines WebSocket and 'wss' the secure version. At least one WebSocket transport must be added to allow the web browser to connect to the server. 
								The other protocols (tcp, tls and udp) are used to forward the request from the web browser to
								the SIP-legacy network. 'C2c' and 'c2cs' are used for the click-to-call service and
								runs on top of HTTP or HTTPS protocols respectively.<br>
								local-ip-value: Any valid IP address. Use star (*) to let the server choose the best<br>
								local-ip-value:<br>
								local IP address to bind to. Examples: udp;*;5060 or ws;*;5061 or wss;192.168.0.10;5062<br>
								local-port-value: Any local free port to bind to. Use star (*) to let the server choose the best free port to bind to. Examples: udp;*;*, ws;*;*, wss;*;5062<br>
								" for='trasnport2'>Transport</label>

				</td>
				<td><input type='text' placeholder='ws;*;10060' name='tr2' id='tr2' class='text ui-widget-content ui-corner-all' value="<?php echo $t2->textContent; ?>" /></td>
			</tr>
			<tr>
				<td>
					<label data-rel="popover" data-content=
						"Each entry defines a protocol, local IP address and port to bind to.<br>
						Format: proto-value;local-ip-value;local-port-value<br>
						proto-value: udp | tcp | tls | ws | wss | c2c | c2cs<br>
						'ws' protocol defines WebSocket and 'wss' the secure version. At least one WebSocket transport must be added to allow the web browser to connect to the server. 
								The other protocols (tcp, tls and udp) are used to forward the request from the web browser to
								the SIP-legacy network. 'C2c' and 'c2cs' are used for the click-to-call service and
								runs on top of HTTP or HTTPS protocols respectively.<br>
								local-ip-value: Any valid IP address. Use star (*) to let the server choose the best<br>
								local-ip-value:<br>
								local IP address to bind to. Examples: udp;*;5060 or ws;*;5061 or wss;192.168.0.10;5062<br>
								local-port-value: Any local free port to bind to. Use star (*) to let the server choose the best free port to bind to. Examples: udp;*;*, ws;*;*, wss;*;5062<br>
								" for='trasnport2'>Transport</label>


				</td>
				<td><input type='text' placeholder='wss;*;10062' name='tr3' id='tr3' class="text ui-widget-content ui-corner-all" value="<?php echo $t3->textContent; ?>" /></td>
			</tr>
			<tr>
				<td>
					<label data-rel="popover" data-content=
						"Format: enable-rtp-symetric-value<br>
						enable-rtp-symetric-value: yes | no<br><br>
						This option is used to force symmetric RTP and RTCP streams to help NAT and firewall
								traversal. It only applies on remote RTP/RTCP as local stream is always symmetric. If
								both parties (remote and local) have successfully negotiated ICE candidates then, none
								will be forced to use symmetric RTP/RTCP.
								An RTP/RTCP stream is symmetric if the same port is used to send and receive packets.
								This helps for NAT and firewall traversal as the outgoing packets open a pinhole for the ongoing ones.
								" for='info'>RTP Symetric</label>


				</td>
				<td>
					<select name='rtps' id='rtps' class="text ui-widget-content ui-corner-all">
						<option value='yes' <?php if( $ertps->textContent == 'yes' ){ echo "selected='selected'"; } ?> >Yes</option>
						<option value='no' <?php if( $ertps->textContent == 'no' ){ echo "selected='selected'"; } ?> >No</option>
					</select>
				
			</tr>
			<tr>
				<td>
					<label data-rel="popover" data-content=
						"Format: enable-100rel-value<br>
						enable-100rel-value: yes|no<br><br>
						Indicates whether to enable SIP 100rel extension.

								" for='info'>Enable 100rel</label>


				</td>
				<td>
					<select name='rel' id='rel' class="text ui-widget-content ui-corner-all" >
						<option value='yes' <?php if ( $e100->textContent == 'yes' ){ echo "selected='selected'";} ?> >Yes</option>
						<option value='no' <?php if ( $e100->textContent == 'no' ){ echo "selected='selected'";} ?> >No</option>
					</select>

			</tr>
			<tr>
				<td>
					<label data-rel="popover" data-content=
						"Format: enable-media-coder-value<br>
						enable-media-coder-value: yes|no<br><br>
						Indicates whether to enable the Media Coder module or not. This option requires the
								RTCWeb Breaker to be enabled at the web browser level. When the Media Coder is enabled
								the gateway acts as a b2bua and both audio and video streams are transcoded if the
								remote peers don’t share same codecs.
								" for='info'>Enable Media Coder</label>
					
				</td>
				<td>
					<select name='mediac' id='mediac' class="text ui-widget-content ui-corner-all">
						<option value='yes' <?php if ( $emc->textContent == 'yes' ){ echo "selected='selected'";} ?> >Yes</option>
						<option value='no' <?php if ( $emc->textContent == 'no' ){ echo "selected='selected'";} ?> >No</option>
					</select>

			</tr>
			<tr>
				<td>
					<label  data-rel="popover" data-content= 
						"Format: enable-videojb-value<br>
						enable-videojb-value : yes | no<br><br>
						
								This option is only useful if the RTCWeb Breaker module is enabled at the web browser
								side. Enabling video jitter buffer gives better quality and improve smoothness. No
								RTCP-NACK messages will be sent to request dropped RTP packets if this option is disabled.
								"  for='info'>Enable VideoJB</label>
				</td>
				<td>
					<select name='vjb' id='vjb' class="text ui-widget-content ui-corner-all">
						<option value='yes' <?php if ( $evjb->textContent == 'yes' ){ echo "selected='selected'";} ?> >Yes</option>
						<option value='no' <?php if ( $evjb->textContent == 'no' ){ echo "selected='selected'";} ?> >No</option>
					</select>

			</tr>
			<tr>
				<td>
					<label  data-rel="popover" data-content= 
						"Format: video-size-pref-value<br>
						video-size-pref-value: sqcif | qcif | qvga | cif | hvga | vga | 4cif | svga | 480p | 720p | 16cif | 1080p<br><br>
						
								This option defines the preferred video size to negotiate with the peers. There is no
								guarantee that the exact size will be used: video size to use = Min (Preferred, Pro-
								Pro-posed

								" for='info'>Video Size</label>


				</td>
				<td>
					<select name='vsize' id='vsize' class="text ui-widget-content ui-corner-all">
						<option value='sqcif' <?php if ( $vsize->textContent == 'sqcif' ){ echo "selected='selected'";} ?> >sqcif</option>
						<option value='qcif' <?php if ( $vsize->textContent == 'qcif' ){ echo "selected='selected'";} ?> >qcif</option>
						<option value='qvga' <?php if ( $vsize->textContent == 'qvga' ){ echo "selected='selected'";} ?> >qvga</option>
						<option value='cif' <?php if ( $vsize->textContent == 'cif' ){ echo "selected='selected'";} ?> >cif</option>
						<option value='hvga' <?php if ( $vsize->textContent == 'hvga' ){ echo "selected='selected'";} ?> >hvga</option>
						<option value='vga' <?php if ( $vsize->textContent == 'vga' ){ echo "selected='selected'";} ?> >vga</option>
						<option value='4cif <?php if ( $vsize->textContent == '4cif' ){ echo "selected='selected'";} ?> '>4cif</option>
						<option value='svga' <?php if ( $vsize->textContent == 'svga' ){ echo "selected='selected'";} ?> >svga</option>
						<option value='480p' <?php if ( $vsize->textContent == '480p' ){ echo "selected='selected'";} ?> >480p</option>
						<option value='720p' <?php if ( $vsize->textContent == '720p' ){ echo "selected='selected'";} ?> >720p</option>
						<option value='16cif' <?php if ( $vsize->textContent == '16cif' ){ echo "selected='selected'";} ?> >16cif</option>
						<option value='1080p' <?php if ( $vsize->textContent == '1080p' ){ echo "selected='selected'";} ?> >1080p</option>
					</select>

			</tr>
			<tr>
				<td>
					<label data-rel="popover" data-content= 
						"Format: rtp-buffsize-value<br>
						rtp-buffsize-value: Any positive 32 bits integer value. Recommended: 65535.<br><br>
						
								Defines the internal buffer size to use for RTP sockets. The higher this value is, the
								lower will be the RTP packet loss. Please note that the maximum value depends on your
								system (e.g. 65535 on Windows). A very high value could introduce delay on video stream
								and it’s highly recommended to also enable videojb option.
								" for='buffs'>Buffer Size</label>



				</td>
				<td><input type='text' placeholder='65535' name='buffs' id='buffs' class="text ui-widget-content ui-corner-all" value="<?php echo $rtpbuff->textContent; ?>" /></td>
			</tr>
			<tr>
				<td>
					<label  data-rel="popover" data-content= 
						"Format: avpf-tail-length-min;avpf-tail-length-max<br>
						avpf-tail-length-min: Any positive 32 bits integer. avpf-tail-length-max: Any positive 32 bits integer.<br><br>
						
								Defines the minimum and maximum tail length used to honor RTCP-NACK requests. This
								option require the Media Breaker module to be enabled on the web browser size. The
								higher this value is, the better will be the video quality. The default length will be
								equal to the minimum value and it’s up to the server to increase this value depending
								on the number of unrecoverable packet loss. The final value will be at most equal to
								the maximum defined in the xml file. Unrecoverable packet loss occures when the b2bua
								receive an RTCP-NACK for a sequence number already removed (very common when network RTT is very high or bandwidth very low).
								" for='avpf'>AVPF tail Lenght</label>


				</td>
				<td><input type='text' placeholder='100;400' name='avpf' id='avpf' class="text ui-widget-content ui-corner-all" value="<?php echo $avpftl->textContent; ?>" /></td>

			</tr>
			<tr>
				<td>
					<label  data-rel="popover" data-content= 
						"Format: srtp-mode-value<br>
						srtp-mode-value: none | optional | mandatory<br><br>
						
								Defines the SRTP mode to use for negotiation when the RTCWeb Breaker is enabled. Please
								note that only optional and mandatory modes will work when the call is to a WebRTC
								endpoint.
								Based on the mode, the SDP for the outgoing INVITEs will be formed like this:
								none: pofile = RTP/AVP ||| neither crypto lines or certificate fingerprints
								optional: profile = RTP/AVP ||| two crypto lines if <srtp-type /> includes
								‘SDES’ plus certificate fingerprints if <srtp-type /> include ‘DTLS’.
								mandatory: profile = RTP/SAVP if <srtp-type /> is eaqual to ‘SDES’ or
								UDP/TLS/RTP/SAVP if <srtp-type /> is equal to ‘DTLS’ ||| two crypto lines if <srtp-type
								/> is eaqual to ‘SDES’ or certificate fingerprints if <srtp-type /> is equal to ‘DTLS’

								" for='info'>SRTP Mode</label>



				</td>
				<td>
					<select name='srtpm' id='srtpm' class="text ui-widget-content ui-corner-all">
						<option value='disabled' <?php if ( $srtpmd->textContent == 'disabled' ){ echo "selected='selected'";} ?> >-- Disable --</option>
						<option value='none' <?php if ( $srtpmd->textContent == 'none' ){ echo "selected='selected'";} ?> >None</option>
						<option value='optional' <?php if ( $srtpmd->textContent == 'optional' ){ echo "selected='selected'";} ?> >Optional</option>
						<option value='mandatory' <?php if ( $srtpmd->textContent == 'mandatory' ){ echo "selected='selected'";} ?> >Mandatory</option>
					</select>
					<script>


						$("#srtpm").change(function(){
							if ( $("#srtpm").val() == 'disabled'){
								$("#srtpt").attr('disabled',true);
								$("#ssl").attr('disabled',true);
								$("#srtpt").attr('value','');
								$("#ssl").attr('value','');
							}else{

								$("#srtpt").removeAttr('disabled');
								$("#ssl").removeAttr('disabled');
							}
						
						});	
					</script>

			</tr>
			<tr>
				<td>
					<label data-rel="popover" data-content= 
						"Format: srtp-type-value; (srtp-type-value)*<br>
						srtp-type-value: sdes | dtls<br><br>
						
								Defines the list of all supported SRTP types. Defining multiple values only make sense
								if the <srtp-mode /> value is optional which means we want to negotiate the best one.
								Please note that DTLS-SRTP requires valid TLS certificates and source code must be
								compiled with OpenSSL version 1.0.1 or later.

								" for='srtpt'>SRTP Type</label>


				</td>
				<td>
					 <?php 
						if ( $srtpmd->textContent == '' ){
							echo "<input disabled type='text' placeholder='dtls;sdes' name='srtpt' id='srtpt' class='text ui-widget-content ui-corner-all' value='$srtpty->textContent'    />";
						}else{
							echo "<input type='text' placeholder='dtls;sdes' name='srtpt' id='srtpt' class='text ui-widget-content ui-corner-all' value='$srtpty->textContent' />";
						}						
					?>
				</td>

			</tr>
			<tr>
				<td>
					<label data-rel="popover" data-content= 
						"Format: dtmf-type-value<br>
						dtmf-type-value: rfc4733 | rfc2833<br><br>
						
								Defines the DTMF type to use when relaying the digits. Requires the RTCWeb Breaker to
								be enabled. rfc4733 will sends the DTMF digits using RTP packets while rfc2833 uses SIP
								INFO.
								
								" for='dtmf'>DTMF Type</label>


				</td>
				<td>
					<select name='dtmf' id='dtfm' class="text ui-widget-content ui-corner-all">
						<option value='rfc4733' <?php if ( $dtmft->textContent == 'rfc4733' ){ echo "selected='selected'";} ?> >RFC4733</option>
						<option value='rfc2833' <?php if ( $dtmft->textContent == 'rfc2833' ){ echo "selected='selected'";} ?> >RFC2833</option>
					</select>

			</tr>
			<tr>
				<td>
					<label data-rel="popover" data-content= 
						"Format: codec-name (; codec-name)*<br>
						codec-name: opus|pcma|pcmu|amr-nb-be|amr-nb-oa|speex-nb|speex-wb|speex-uwb|g729|gsm|g722|ilbc|h264-bp|h264-mp|vp8|h263|h263+|theora|mp4v-es<br><br>
						
								Defines the list of all supported codecs. Only G.711 is natively supported and all
								other codecs have to be enabled when building the Doubango IMS Framework source code.
								Each codec priority is equal to its position in the list. First codecs have highest
								priority.
								
								" for='codecs'>Codecs</label>


				</td>
				<td><input type='text' placeholder='pcma;pcmu;gsm;h264-bp;h264-mp;h263;h263+;h264' name='codecs' id='codecs' class='text ui-widget-content ui-corner-all' value='<?php echo $codecs->textContent; ?>' /></td>
			</tr>
			<tr>
				<td>
					<label data-rel="popover" data-content= 
						"Format: maxrate-playback-value; maxrate-capture-value<br>
						maxrate-playback-value: 8000|12000|16000|24000|48000  maxrate-capture-value: 8000|12000|16000|24000|48000<br><br>
						
								Defines the maximum playback and capture rates to negotiate. The final rates to use
								will be min(offer, answer). Default value = 48000 for both.
								The higher this value is, the better will be the voice quality. The bandwidth usage is
								proportional to the value. In short: high value = high bandwidth usage = good voice quality.
								
								" for='opus'>Opus Max Rate</label>

				</td>
				<td><input type='text' placeholder='4800;4800' name='opus' id='opus' class="text ui-widget-content ui-corner-all" value="<?php echo $opust->textContent; ?>" /></td>

			</tr>
			<tr>
				<td>
					<label data-rel="popover" data-content= 
						"Format: nameserver-value<br>
						nameserver-value: Any IPv4 or IPv6 address.<br><br>
						
								Defines additional entries for DNS servers to use for SRV and NAPTR queries. Please
								note that this option is optional and should be used carefully.
								On Windows and OS X the server will automatically load these values using APIs provided
								by the OS. On linux, the values come from /etc/resolv.conf. The port must not be
								defined and the gateway will always use 53.
								
								" for='ns'>NameServer</label>


				</td>
				<td><input type='text'  name='ns' id='ns' class="text ui-widget-content ui-corner-all" value="<?php echo $nameserver->textContent; ?>" /></td>

			</tr>
			<tr>
				<td>
					<label data-rel="popover" data-content= 
						"Format: nameserver-value<br>
						nameserver-value: Any IPv4 or IPv6 address.<br><br>
						
								Defines additional entries for DNS servers to use for SRV and NAPTR queries. Please
								note that this option is optional and should be used carefully.
								On Windows and OS X the server will automatically load these values using APIs provided
								by the OS. On linux, the values come from /etc/resolv.conf. The port must not be
								defined and the gateway will always use 53.
								
								" for='ns'>NameServer</label>


				</td>
				<td><input type='text'  name='ns2' id='ns2' class="text ui-widget-content ui-corner-all" value="<?php echo $nameserver2->textContent; ?>" /></td>

			</tr>
			<tr>
				<td>
					<label data-rel="popover" data-content= 
						"Format: private-key-value;public-key-value;cacert-key-value; verify-value<br>
						private-key-value: A valid path to a PEM file.
							      public-key-value: A valid path to a PEM file.
								cacert-key-value: A valid path to a certificate autority file. Should be equal to *.
								Verify-value: Yes | No. This additional option is only available since version 2.1.0.
								<br><br>
								It indicates whether the connection should fail if the remote peer certificate are
								missing or do not match.This option only applies to TLS/SIP or WSS and is useless for
								DTLS-SRTP as certificates are required.
								
								" for='ssl'>SSL Certs</label>


				</td>
				<td>
					 <?php 
						if ( $srtpmd->textContent == '' ){
							echo "<input disabled type='text'  placeholder='private-key-value;public-key-value;cacert-key-value; verify-value' name='ssl' id='ssl' class='text ui-widget-content ui-corner-all' value='$sslc->textContent' />";
						}else{
							echo "<input type='text'  placeholder='private-key-value;public-key-value;cacert-key-value; verify-value' name='ssl' id='ssl' class='text ui-widget-content ui-corner-all' value='$sslc->textContent' />";
						}
					?>	
				</td>

			</tr>
			<tr></tr>
		</table><br>
		<div align=center>
			<br>
			<input name="button" type="submit" class="btn-primary" value="Save Settings" id="save"/>

			<p style='Font-size: 10px;'>For more information about configuring webrtc2sip check <a href='http://webrtc2sip.org/technical-guide-1.0.pdf'>http://webrtc2sip.org/technical-guide-1.0.pdf</a></p>

			<?php
				$isopen = exec("ps -fea | grep -c '\/usr\/local\/sbin\/webrtc2sip'");
				
				if( $isopen == '2' ){
					echo "<br><br><br><h4>Status of the Gateway</h4>
					<div style='width:250px; height:40px; overflow:hidden; background-color:#f8f8ff; border: 1px solid #aaaaff; padding:10px;font-family:arial;color:Green;font-size:12px;' class='ui-corner-all'>
						<b>
							The WebRTC2SIP Gateway Is Running 
						</b>
						<form method='post'>
							<br><input class='btn-primary' name='stop_button' type='submit'  value='Stop' />
						</form>
					</div>";
				}else{
					echo "<br><br><br><h4>Status of	 the Gateway</h4>
					<div style='width:250px; height:150px; overflow:hidden; background-color:#f8f8ff; border: 1px solid #aaaaff; padding:10px;font-family:arial;color:red;font-size:12px;' class='ui-corner-all'>
						<p style='font-size:11px'>
							The WebRTC2SIP Gateway Is Not Running you must run the command:<br><br> 
							<b>screen -dmS wrtc /usr/local/sbin/webrtc2sip --config=/usr/local/sbin/config.xml </b></p>
						
						<form method='post'>
							<br><input class='btn-primary' name='start_button' type='submit'  value='Start' />
						</form>

					</div>";
				}
					

			?> 

	
		</div>

		</form>



					</div>
				</div>
			</div>
		</div><!--/span-->
	</div><!--/row-->
   

<!-------------------------------------------- all pages botton -------------------------->
<!--- Commented section!!!

			<!--<div class="row-fluid sortable">
				<div class="box span4">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-list"></i> Buttons</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content buttons">
						<p class="btn-group">
							  <button class="btn">Left</button>
							  <button class="btn">Middle</button>
							  <button class="btn">Right</button>
						</p>
						<p>
							<button class="btn btn-small"><i class="icon-star"></i> Icon button</button>
							<button class="btn btn-small btn-primary">Small button</button>
							<button class="btn btn-small btn-danger">Small button</button>
						</p>
						<p>
							<button class="btn btn-small btn-warning">Small button</button>
							<button class="btn btn-small btn-success">Small button</button>
							<button class="btn btn-small btn-info">Small button</button>
						</p>
						<p>
							<button class="btn btn-small btn-inverse">Small button</button>
							<button class="btn btn-large btn-primary btn-round">Round button</button>
							<button class="btn btn-large btn-round"><i class="icon-ok"></i></button>
							<button class="btn btn-primary"><i class="icon-edit icon-white"></i></button>
						</p>
						<p>
							<button class="btn btn-mini">Mini button</button>
							<button class="btn btn-mini btn-primary">Mini button</button>
							<button class="btn btn-mini btn-danger">Mini button</button>
							<button class="btn btn-mini btn-warning">Mini button</button>
						</p>
						<p>
							<button class="btn btn-mini btn-info">Mini button</button>
							<button class="btn btn-mini btn-success">Mini button</button>
							<button class="btn btn-mini btn-inverse">Mini button</button>
						</p>
					</div>
				</div>--><!--/span-->
					
				<!--<div class="box span4">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-list"></i> Buttons</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content  buttons">
						<p>
							<button class="btn btn-large">Large button</button>
							<button class="btn btn-large btn-primary">Large button</button>
						</p>
						<p>
							<button class="btn btn-large btn-danger">Large button</button>
							<button class="btn btn-large btn-warning">Large button</button>
						</p>
						<p>
							<button class="btn btn-large btn-success">Large button</button>
							<button class="btn btn-large btn-info">Large button</button>
						</p>
						<p>
							<button class="btn btn-large btn-inverse">Large button</button>
						</p>
						<div class="btn-group">
							<button class="btn btn-large">Large Dropdown</button>
							<button class="btn btn-large dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="icon-star"></i> Action</a></li>
								<li><a href="#"><i class="icon-tag"></i> Another action</a></li>
								<li><a href="#"><i class="icon-download-alt"></i> Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#"><i class="icon-tint"></i> Separated link</a></li>
							</ul>
						</div>
						
					</div>
				</div>--><!--/span-->
					
				<!--<div class="box span4">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-list"></i> Weekly Stat</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<ul class="dashboard-list">
							<li>
								<a href="#">
									<i class="icon-arrow-up"></i>                               
									<span class="green">92</span>
									New Comments                                    
								</a>
							</li>
						  <li>
							<a href="#">
							  <i class="icon-arrow-down"></i>
							  <span class="red">15</span>
							  New Registrations
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="icon-minus"></i>
							  <span class="blue">36</span>
							  New Articles                                    
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="icon-comment"></i>
							  <span class="yellow">45</span>
							  User reviews                                    
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="icon-arrow-up"></i>                               
							  <span class="green">112</span>
							  New Comments                                    
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="icon-arrow-down"></i>
							  <span class="red">31</span>
							  New Registrations
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="icon-minus"></i>
							  <span class="blue">93</span>
							  New Articles                                    
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="icon-comment"></i>
							  <span class="yellow">254</span>
							  User reviews                                    
							</a>
						  </li>
						</ul>
					</div>
				</div>--><!--/span-->
			</div><!--/row-->
				  

		  
       
					<!-- content ends -->
			</div><!--/#content.span10-->
				</div><!--/fluid-row-->
				
		<hr>

		<div class="modal hide fade" id="myModal">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h3>Settings</h3>
			</div>
			<div class="modal-body">
				<p>Here settings can be configured...</p>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn" data-dismiss="modal">Close</a>
				<a href="#" class="btn btn-primary">Save changes</a>
			</div>
		</div>

		<footer>
			<p class="pull-left">&copy; <a href="http://usman.it" target="_blank">Design by Muhammad Usman</a> 2012 / Adapted for Digital-Merge</p>
			<p class="pull-right">Powered by: <a href="http://usman.it/free-responsive-admin-template">Charisma</a> Modified by Navaismo</p>
		</footer>
		
	</div><!--/.fluid-container-->

	<!-- external javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

	<!-- jQuery -->
	<script src="js/jquery-1.7.2.min.js"></script>
	<!-- jQuery UI -->
	<script src="js/jquery-ui-1.8.21.custom.min.js"></script>
	<!-- transition / effect library -->
	<script src="js/bootstrap-transition.js"></script>
	<!-- alert enhancer library -->
	<script src="js/bootstrap-alert.js"></script>
	<!-- modal / dialog library -->
	<script src="js/bootstrap-modal.js"></script>
	<!-- custom dropdown library -->
	<script src="js/bootstrap-dropdown.js"></script>
	<!-- scrolspy library -->
	<script src="js/bootstrap-scrollspy.js"></script>
	<!-- library for creating tabs -->
	<script src="js/bootstrap-tab.js"></script>
	<!-- library for advanced tooltip -->
	<script src="js/bootstrap-tooltip.js"></script>
	<!-- popover effect library -->
	<script src="js/bootstrap-popover.js"></script>
	<!-- button enhancer library -->
	<script src="js/bootstrap-button.js"></script>
	<!-- accordion library (optional, not used in demo) -->
	<script src="js/bootstrap-collapse.js"></script>
	<!-- carousel slideshow library (optional, not used in demo) -->
	<script src="js/bootstrap-carousel.js"></script>
	<!-- autocomplete library -->
	<script src="js/bootstrap-typeahead.js"></script>
	<!-- tour library -->
	<script src="js/bootstrap-tour.js"></script>
	<!-- library for cookie management -->
	<script src="js/jquery.cookie.js"></script>
	<!-- calander plugin -->
	<script src='js/fullcalendar.min.js'></script>
	<!-- data table plugin -->
	<script src='js/jquery.dataTables.min.js'></script>

	<!-- chart libraries start -->
	<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.min.js"></script>
	<script src="js/jquery.flot.pie.min.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
	<!-- chart libraries end -->

	<!-- select or dropdown enhancer -->
	<script src="js/jquery.chosen.min.js"></script>
	<!-- checkbox, radio, and file input styler -->
	<script src="js/jquery.uniform.min.js"></script>
	<!-- plugin for gallery image view -->
	<script src="js/jquery.colorbox.min.js"></script>
	<!-- rich text editor library -->
	<script src="js/jquery.cleditor.min.js"></script>
	<!-- notification plugin -->
	<script src="js/jquery.noty.js"></script>
	<!-- file manager library -->
	<script src="js/jquery.elfinder.min.js"></script>
	<!-- star rating plugin -->
	<script src="js/jquery.raty.min.js"></script>
	<!-- for iOS style toggle switch -->
	<script src="js/jquery.iphone.toggle.js"></script>
	<!-- autogrowing textarea plugin -->
	<script src="js/jquery.autogrow-textarea.js"></script>
	<!-- multiple file upload plugin -->
	<script src="js/jquery.uploadify-3.1.min.js"></script>
	<!-- history.js for cross-browser state change on ajax -->
	<script src="js/jquery.history.js"></script>
	<!-- application script for Charisma demo -->
	<script src="js/charisma.js"></script>

	<!-- SIPMl5 API for WEBRTC calls -->
        <script src="js/SIPml-api.js"></script>
	<script src="js/click2call.js"></script>

			
</body>
</html>
