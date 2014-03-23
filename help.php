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
							<!--<form class="navbar-search pull-left">
								<input placeholder="Search" class="search-query span2" name="query" type="text">
							</form>-->
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
						<li><a class="ajax-link" href="cdr.php"><i class="icon-file"></i><span class="hidden-tablet"> CDR Reports</span></a></li>
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
						<a href="#">Dashboard</a>
					</li>
				</ul>
			</div>
<!------------------------------------------- All Pages end -------------------------------->
			
	<div class="row-fluid">
				<div class="box span12">
					<div class="box-header well">
						<h2><i class="icon-eye-open"></i><a name="sip">SIP HELP<a></h2>
						<div class="box-icon">
							<!--<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>-->
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
				                <span class="ui-icon ui-icon-info" style="float:left; margin:0 7px 20px 0;"></span>To add a new SIP device please press the Add New Tab.
					                Fill with the required  information:<br><br>
					                <b>Extension</b>. Required, set the name/number of the sip device.<br>
					                <b>Secret</b>. Required, set the password for the new device.<br>
					                <b>CallerID</b>. Required, set the name of the new device the format is: "TheName"<Identifier>;i.e."John Doe"<5000>.<br>
					                <b>Context</b>. Required, set the context of the dialplan rules for this device.<br>
					                <b>AccountCode</b>. Required, set the accountcode to find in CDR.<br>
					                <b>mailbox</b>. Required, set the mailbox for this device.<br>
					                <b>Email</b>. Optional, set the email to recieve the voicemails notifications.  <br>
					                <b>Type</b>. Required, Peer, User or Friend, usually is set to friend for a new device.<br>
					                <b>Host</b>. Required,  IP of new Device by default it's set Dynamic in order to register the new device.<br>
					                <b>Callgroup</b>. Required, set the callgroup for this device.<br>
					                <b>PickupGroup</b>. Required, set the pickgroup for this device. Devices in the same pickupgroup can pickup calls with dialing *8.<br>
					                <b>Qualify</b>. Required, set if the device must be monitored by the PBX.<br>
					                <b>Allow</b>. Required, set the codecs that device support.<br>
					                <b>Video Support</b>. Required, allow the device to use video or not.<br>
					                <b>NAT</b>. Required, define if the device its outside the LAN or not.<br><br><br>
		
                				<span class="ui-icon ui-icon-info" style="float:left; margin:0 7px 20px 0;"></span>To edit a  SIP device please press the Edit Button marked with the icon:
				                <br><i class="icon-edit"></i>  A popup form will appear and you can update your settings.<br><br><br>

				                <span class="ui-icon ui-icon-info" style="float:left; margin:0 7px 20px 0;"></span>To delete a  SIP device please press the Delete Button marked with the icon:
				                <br><i class="icon-trash"></i>  A dialog will ask if you are sure, if so press the Delete buton.<br><br><br>

						<div class="clearfix"></div>
						</div>
					</div>


				<div class="box span12">
					<div class="box-header well">
						<h2><i class="icon-eye-open"></i><a name="iax">IAX2 HELP</a></h2>
						<div class="box-icon">
							<!--<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>-->
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">

						<span class="ui-icon ui-icon-info" style="float:left; margin:0 7px 20px 0;"></span>To add a new IAX2 device please press the Add new Peer Button. A popup form will appear.
						Fill with the required  information:<br><br>
						<b>Extension</b>. Required, set the name/number of the sip device.<br>	
						<b>Secret</b>. Required, set the password for the new device.<br>	
						<b>CallerID</b>. Required, set the name of the new device the format is: "TheName"<Identifier>;i.e."John Doe"<5000>.<br>
						<b>Context</b>. Required, set the context of the dialplan rules for this device.<br>
						<b>AccountCode</b>. Required, set the accountcode to find in CDR.<br>
						<b>mailbox</b>. Required, set the mailbox for this device.<br>
						<b>Email</b>. Optional, set the email to recieve the voicemails notifications.	<br>
						<b>Type</b>. Required, Peer, User or Friend, usually is set to friend for a new device.<br>
						<b>Host</b>. Required,  IP of new Device by default it's set Dynamic in order to register the new device.<br>
						<b>Callgroup</b>. Required, set the callgroup for this device.<br>
						<b>PickupGroup</b>. Required, set the pickgroup for this device. Devices in the same pickupgroup can pickup calls with dialing *8.<br>
						<b>Qualify</b>. Required, set if the device must be monitored by the PBX.<br>
						<b>Allow</b>. Required, set the codecs that device support.<br>
						<b>Video Support</b>. Required, allow the device to use video or not.<br>
						<b>NAT</b>. Required, define if the device its outside the LAN or not.<br><br><br>
	
						<span class="ui-icon ui-icon-info" style="float:left; margin:0 7px 20px 0;"></span>To edit a IAX2 device please press the Edit Button marked with the icon:
						<br><i class="icon-edit"></i> A popup form will appear and you can update your settings.<br><br><br>
		
						<span class="ui-icon ui-icon-info" style="float:left; margin:0 7px 20px 0;"></span>To delete a  IAX2 device please press the Delete Button marked with the icon:
						<br><i class="icon-trash"></i> A dialog will ask if you are sure, if so press the Delete buton.<br><br><br>


						<div class="clearfix"></div>
						</div>
					</div>


				<div class="box span12">
					<div class="box-header well">
						<h2><i class="icon-eye-open"></i><a name="vm">VoiceMail HELP</a></h2>
						<div class="box-icon">
							<!--<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>-->
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<span class="ui-icon ui-icon-info" style="float:left; margin:0 7px 20px 0;"></span>To add a new VoiceMail please press the Add new Voicemail Button. A popup form will appear.
						Fill with the required  information:<br><br>

						<b>Voicemail</b>. Required, set the number of the voicemail.<br>
						<b>Mailbox</b>. Required, set the mailbox of the voicemail, same as above.<br>
						<b>Password</b>. Required, set the password in order to acces this voicemail.<br>
						<b>Owner</b>. Required, set the name of the owner of the voicemail.<br>
						<b>Email</b>. Required, set the email to send the notifications.<br>
						<b>Callback Context</b>. Requiered, set the context in order to make the callbacks from the voicemail prompt.<br><br><br>
		
						<span class="ui-icon ui-icon-info" style="float:left; margin:0 7px 20px 0;"></span>To edit the voicemial please press the Edit button marked with the icon:
						<br><i class="icon-edit"></i> A popup form will appear and you can update your settings.<br><br><br>
		
						<span class="ui-icon ui-icon-info" style="float:left; margin:0 7px 20px 0;"></span>To delete the voicemail please press the Delete Button marked with the icon:
						<br><i class="icon-trash"></i> A dialog will ask if you are sure, if so press the Delete buton.<br><br><br>


						<div class="clearfix"></div>
						</div>
					</div>


				<div class="box span12">
					<div class="box-header well">
						<h2><i class="icon-eye-open"></i><a name="meetme">Conference HELP</a></h2>
						<div class="box-icon">
							<!--<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>-->
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<span class="ui-icon ui-icon-info" style="float:left; margin:0 7px 20px 0;"></span>To add a new Conference Room please press the Add new Conference Button. A popup form will appear.
							Fill with the required  information:<br><br>

							<b>Room Number</b>. Required, set the number of the conference room.<br>
							<b>PIN</b>. Optional, set the password for this conference, members need to have it in order to join the room.<br>
							<b>Admin PIN</b>. Optional, set the password for the Administrator of the room.<br>
							<b>MaxUsers</b>. Optional, set the maximum number of user who can join the conference.<br><br><br>

							<span class="ui-icon ui-icon-info" style="float:left; margin:0 7px 20px 0;"></span>To edit the conference room please press the Edit button marked with the icon:
							<br><i class="icon-edit"></i> A popup form will appear and you can update your settings.<br><br><br>
		
							<span class="ui-icon ui-icon-info" style="float:left; margin:0 7px 20px 0;"></span>To delete the conference room please press the Delete Button marked with the icon:
							<br><i class="icon-trash"></i> A dialog will ask if you are sure, if so press the Delete buton.<br><br><br>


						<div class="clearfix"></div>
						</div>
					</div>



				<div class="box span12">
					<div class="box-header well">
						<h2><i class="icon-eye-open"></i><a name="pinset">Pinset HELP</a></h2>
						<div class="box-icon">
							<!--<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>-->
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<span class="ui-icon ui-icon-info" style="float:left; margin:0 7px 20px 0;"></span>To add a new Pin set  please press the Add new PIN Button. A popup form will appear.
						Fill with the required  information:<br><br>

						<b>Owner</b>. Required, set the name of the owner.<br>
						<b>PIN</b>. Requiered, set the password to make calls.<br>
						<b>Local</b>. Required, set yes or no to allow this type of calls.<br>
						<b>LD International</b>. Required, set yes or no to allow this type of calls.<br>
						<b>LD National</b>. Required, set yes or no to allow this type of calls.<br>
						<b>Cell Phone</b>. Required, set yes or no to allow this type of calls.<br><br><br>

						<span class="ui-icon ui-icon-info" style="float:left; margin:0 7px 20px 0;"></span>To edit a pin please press the Edit button marked with the icon:
						<br><i class="icon-edit"></i> A popup form will appear and you can update your settings.<br><br><br>
		
						<span class="ui-icon ui-icon-info" style="float:left; margin:0 7px 20px 0;"></span>To delete a pin  please press the Delete Button marked with the icon:
						<br><i class="icon-trash"></i> A dialog will ask if you are sure, if so press the Delete buton.<br><br><br>


						<div class="clearfix"></div>
						</div>
					</div>

				<div class="box span12">
					<div class="box-header well">
						<h2><i class="icon-eye-open"></i><a name="files">Configuration Files HELP</a></h2>
						<div class="box-icon">
							<!--<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>-->
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<span class="ui-icon ui-icon-info" style="float:left; margin:0 7px 20px 0;"></span>All the tabs with the document icon are configuration files related with asterisk.<br><br>

						<ul>
							<li>Dialplan: Is the backbone of your PBX here are the rules of inbound and outbound calls.</li>
							<li>SIP: Is the  configuration file for the settings of the SIP protocol.</li>
							<li>IAX2: Is the  configuration file for the settings of the IAX2 protocol.</li>
							<li>DAHDI: Is where your TDM or Digital Card spans are configured.</li>
						</ul>

						<h2><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Do Not Touch this files if you dont know how configure it!</h2><br><br>
						For more information go to <a href="http://www.asteriskdocs.org">http://wwww.Asteriskdocs.org</a> or Contact Us for Support.

						<div class="clearfix"></div>
						</div>
					</div>


				<div class="box span12">
					<div class="box-header well">
						<h2><i class="icon-eye-open"></i><a name="cdr">CDR HELP</a></h2>
						<div class="box-icon">
							<!--<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>-->
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<span class="ui-icon ui-icon-info" style="float:left; margin:0 7px 20px 0;"></span>Here you can get a report of the calls.<br><br>
						Select the date range of your desired report using the datepickers in the CDR SECTION. Then Choose the report Type:

						<ul>
							<li>ALL: Will show all the calls within the date range. </li>
							<li>Extension: You can choose a report per extension (Only Sip Devices).</li>
							<li>AccountCode: You can select an specific Accountcode to check the calls.</li>
						</ul><br><br>

						Finally press The Search button to show your report.<br><br>
		
						Also you can download the generated report to a xls file, just press the Download Report Button.

						<div class="clearfix"></div>
						</div>
					</div>






				<div class="box span12">
					<div class="box-header well">
						<h2><i class="icon-eye-open"></i><a name="Queues">Queues HELP</a></h2>
						<div class="box-icon">
							<!--<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>-->
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
	<span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>This section is divided in 3 sub-sections:.
		<br><br><br>

		<h3><span class="ui-icon ui-icon-tag" style="float:left; margin:0 7px 20px 0;"></span>Section Add Agent</h3>. To add a new agent press the "Add New Agent" button. A popup form will appear.
		Fill with the required  information:<br><br>

		<b>Agent Number</b>. Required, set the number of the Agent.<br>
		<b>Agent Pass</b>. Required, set the password for the agent in order to login.<br>
		<b>Agent Name</b>.Required, set the name of the agent.<br><br><br>

		<span class="ui-icon ui-icon-info" style="float:left; margin:0 7px 20px 0;"></span>To edit an Agent please press the Edit button marked with the icon:
		<br><i class="icon-edit"></i> A popup form will appear and you can update your settings.<br><br><br>
		
		<span class="ui-icon ui-icon-info" style="float:left; margin:0 7px 20px 0;"></span>To delete an Agent please press the Delete Button marked with the icon:
		<br><i class="icon-trash"></i> A dialog will ask if you are sure, if so press the Delete buton.<br><br><br>


		<h3><span class="ui-icon ui-icon-tag" style="float:left; margin:0 7px 20px 0;"></span>Section Add Queue</h3>. To add a new Queue press the "Add New Queue" button. A popup form will appear.
		Fill with the required  information:<br><br>

		<b>Name</b>. Required, set the name of the Queue.<br>
		<b>Music Class</b>. Optional, sets which music applies for this particular call queue.<br>
		<b>Announce</b>. Optional,  makes Asterisk play the XXX announcement to the member of the queue who picks up the call.<br>
		<b>Context</b>. Optional, A context may be specified, in which if the user types a SINGLE digit extension while they are in the queue, they will be taken out of the queue and sent to that extension in this context..<br>
		<b>TimeOut</b>. Optional, How long do we let the phone ring before we consider this a timeout. Timeout in seconds when calling an agent<br>
		<b>Monitor Type</b>. Optional, default MixMonitor<br>
		<b>Monitor Format</b>. Optional, default value wav. Possible Values: gsm,wav or wav49<br>
		<b>Announce frequency</b>. Optional, How often to announce queue position and/or estimated holdtime to caller (0=off)<br>
		<b>Announce HoldTime</b>. Optional,Should we include estimated hold time in position announcements? Either yes, no, or only once; hold time will not be announced if <1 minute <br>
		<b>Periodic Announce</b>. Optional, This allows a message like "Thank you for holding, your call is important to us." to be played at regular intervals while a caller is in the queue<br>
		<b>Periodic Announce frecuency</b>. Optional, How often we deliver the periodic announce.<br>
		<b>Retry</b>. Optional, How long do we wait before trying all the members again<br>
		<b>Ring In Use</b>. Optional, if you want the queue to avoid sending calls to members whose devices areknown to be 'in use' <br>
		<b>Autofill</b>. Optional, If yes, makes sure that when the waiting callers are connecting with available members in a parallel fashion until there are no more available members or no more waiting callers..<br>
		<b>AutoPause</b>. Optional, will pause a queue member if they fail to answer a call<br>
		<b>Set Interface Var</b>. Optional, If set to yes, just prior to the caller being bridged with a queue member the following variables will be set :MEMBERINTERFACE is the interface name (eg. Agent/1234), MEMBERNAME is the member name (eg. Joe Soap), MEMBERCALLS is the number of calls that interface has taken,, MEMBERLASTCALL is the last time the member took a call., MEMBERPENALTY is the penalty of the member, MEMBERDYNAMIC indicates if a member is dynamic or not, MEMBERREALTIME indicates if a member is realtime or not<br>
		<b>WrapUpTime</b>. Optional, After a successful call, how long to wait before sending a potentially free member another call (default is 0, or no delay)<br>
		<b>MaxLen</b>. Optional, Maximum number of people waiting in the queue (0 for unlimited)<br>
		<b>Service Level</b>. Optional, Second settings for service level (default 0) Used for service level statistics (calls answered within service level time frame)<br>
		<b>Strategy</b>. Required, Calls are distributed among the members handling a queue with one of several strategies:
			<ul><li>ringall: ring all available channels until one answers (default)/<li>
			<li>roundrobin: take turns ringing each available interface (depreciated in 1.4, use rrmemory)</li>
			<li>leastrecent: ring interface which was least recently called by this queue</li>
			<li>fewestcalls: ring the one with fewest completed calls from this queue</li>
			<li>random: ring random interface</li>
			<li>rrmemory: round robin with memory, remember where we left off last ring pass</li>
			<li>linear: Rings interfaces in the order they are listed in the configuration file. Dynamic members will be rung in the order in which they were added. (new in 1.6)</li>
			<li>wrandom: Rings a random interface, but uses the agent's penalty as a weight (new in 1.6)</li></ul><br>
		<b>join Empty</b>. Optional,  
			<ul><li>yes - callers can join a queue with no members or only unavailable members</li>
			<li>no - callers cannot join a queue with no members</li>
			<li>strict - callers cannot join a queue with no members or only unavailable members</li>
			<li>loose - same as strict, but paused queue members do not count as unavailable (new in 1.6)</li></ul><br>
		<b>Leave When Empty</b>. Optional, If you wish to remove callers from the queue when new callers cannot join set to yes<br>
		<b>Report Hold Time</b>. Optional, If you wish to report the caller's hold time to the member before they are connected to the caller, set this to yes<br>
		<b>Weight</b>. Required, Gives queues a 'weight' option, to ensure calls waiting in a higher priority queue will deliver its calls first.<br><br><br>

	 	<span class="ui-icon ui-icon-info" style="float:left; margin:0 7px 20px 0;"></span>To edit a Queue please press the Edit button marked with the icon:
		<br><i class="icon-edit"></i> A popup form will appear and you can update your settings.<br><br><br>
		
		<span class="ui-icon ui-icon-info" style="float:left; margin:0 7px 20px 0;"></span>To delete an Queue please press the Delete Button marked with the icon:
		<br><i class="icon-trash"></i> A dialog will ask if you are sure, if so press the Delete buton.<br><br><br>
	 

		<h3><span class="ui-icon ui-icon-tag" style="float:left; margin:0 7px 20px 0;"></span>Section manage Queues </h3>.<br><br>
		Select from the Drop Down List a Queue, if you want to add an Agent press in the icon marked with:
		<br><i class="icon-edit"></i> A popup form will appear and you can choose an agent from the list. The Priority must a numeric value, from 0 to 10, 0 is very very important agent so agents with priority 0 will receive calls. Agents with higher priority only will recieve call when agent with lowest priority are busy.<br><br><br>
		
		<span class="ui-icon ui-icon-info" style="float:left; margin:0 7px 20px 0;"></span>To delete an Agent please press the Delete hyperlink in the table


						<div class="clearfix"></div>
						</div>
					</div>




	</div>





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
	


<!------------------------------------------------------------------ Menu ayuda ----------------------------------------->

<!-- ayuda sip -->
<div style='display:none'>
        <div id="dialog-hsip" title="SIP Peers Help">
                <span class="ui-icon ui-icon-info" style="float:left; margin:0 7px 20px 0;"></span>To add a new SIP device please press the Add new Peer Button. A popup form will appear.
                Fill with the required  information:<br><br>
                <b>Extension</b>. Required, set the name/number of the sip device.<br>
                <b>Secret</b>. Required, set the password for the new device.<br>
                <b>CallerID</b>. Required, set the name of the new device the format is: "TheName"<Identifier>;i.e."John Doe"<5000>.<br>
                <b>Context</b>. Required, set the context of the dialplan rules for this device.<br>
                <b>AccountCode</b>. Required, set the accountcode to find in CDR.<br>
                <b>mailbox</b>. Required, set the mailbox for this device.<br>
                <b>Email</b>. Optional, set the email to recieve the voicemails notifications.  <br>
                <b>Type</b>. Required, Peer, User or Friend, usually is set to friend for a new device.<br>
                <b>Host</b>. Required,  IP of new Device by default it's set Dynamic in order to register the new device.<br>
                <b>Callgroup</b>. Required, set the callgroup for this device.<br>
                <b>PickupGroup</b>. Required, set the pickgroup for this device. Devices in the same pickupgroup can pickup calls with dialing *8.<br>
                <b>Qualify</b>. Required, set if the device must be monitored by the PBX.<br>
                <b>Allow</b>. Required, set the codecs that device support.<br>
                <b>Video Support</b>. Required, allow the device to use video or not.<br>
                <b>NAT</b>. Required, define if the device its outside the LAN or not.<br><br><br>

                <span class="ui-icon ui-icon-info" style="float:left; margin:0 7px 20px 0;"></span>To edit a  SIP device please press the Edit Button marked with the icon:
                <br><i class="icon-edit"></i> A popup form will appear and you can update your settings.<br><br><br>

                <span class="ui-icon ui-icon-info" style="float:left; margin:0 7px 20px 0;"></span>To delete a  SIP device please press the Delete Button marked with the icon:
                <br><i class="icon-trash"></i> A dialog will ask if you are sure, if so press the Delete buton.<br><br><br>
         </div>
</div>


		
</body>
</html>

