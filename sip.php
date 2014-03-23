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
						<a href="#">SIP Peers</a>
					</li>
				</ul>
			</div>
<!------------------------------------------- All Pages end -------------------------------->

<div class="sortable row-fluid">

				
				<!--<a data-rel="tooltip" title="Create New  Peer" class="well span3 top-block" href="#">
					<div><br><button class="btn btn-primary" id="addpeer"><i class='icon-plus icon-white'></i>New SIP Peer</button></div><br>
					<span class="notification">!</span>
				</a>-->


				<a data-rel="tooltip" title="Created  Peers" class="well span3 top-block" href="#">
					<span class="icon32 icon-blue icon-user"></span>
					<div>Total SIP Peers</div>
					<?php
						$res=mysql_query("select * from sip_buddies") or die(mysql_error());
						$sipdevices=mysql_num_rows($res);
						echo "<div>$sipdevices</div>";
					?>
					<span class="notification">!</span>
				</a>

				<a data-rel="tooltip" title="Registered Peers" class="well span3 top-block" href="#">
					<span class="icon32 icon-green icon-user"></span>
					<div>Registered Peers</div>
					<div id="regsip"></div>
							
					</script>
					<span class="notification">!</span>
				</a>

				<a data-rel="tooltip" title="Offline Peers" class="well span3 top-block" href="#">
					<span class="icon32 icon-red icon-user"></span>
					<div>Offline Peers</div>
					<div id="offsip"></div>
					<span class="notification">!</span>
				</a>


</div>

	<div class="row-fluid sortable">	
		<div class="box span12">
			<div class="box-header well" data-original-title>
				<h2>SIP</h2>
				<div class="box-icon">
					<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				</div>
			</div>

			<div class="box-content">
				<ul class="nav nav-tabs" id="myTab">
					<li class="active"><a href="#createdsip">Created Peers</a></li>
					<li><a href="#addnewsip">Add New</a></li>
				</ul>
					 

				<div id="myTabContent" class="tab-content">
					<div class="tab-pane active" id="createdsip">


                                <div id="dialog-delete" Title="Alert">
                                        <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Delete this peer?</p>
                                </div>


    				<!-- form to edit peers -->
                                <div id="dialog-form2" title="Edit Peer">
                                        <br>
                                        <form>
                                              	<table align=center class='ui-widget ui-widget-content'>
                                                <tr><td><label for="extension">Extension</label></td><td><input type="text" name="extension" id="extensioned" class="input-large ui-widget-content ui-corner-all" READONLY/></td></tr>
                                                <tr><td><label for="secret">Secret</label></td><td><input type="text" name="secret" id="secreted" value="" class="input-large ui-widget-content ui-corner-all" /></td></tr>
                                                <tr><td><label for="callerid">CallerID</label></td><td><input type="text" name="callerid" id="callerided" value="&quot;name&quot;<0000>" class="input-large ui-widget-content ui-corner-all" /></td></tr>
                                                <tr><td><label for="context">Context</label></td><td><input type="text" name="context" id="contexted" value="" class="input-large ui-widget-content ui-corner-all" /></td></tr>
                                                <tr><td><label for="accountcode">AccountCode</label></td><td><input type="text" name="accountcodeed" id="accountcodeed" value="" class="input-large ui-widget-content ui-corner-all" /></td></tr>
                                                <tr><td><label for="mailbox">mailbox</label></td><td><input type="text" name="mailbox" id="mailboxed" value="" class="input-large ui-widget-content ui-corner-all" /></td></tr>
                                                <tr><td><label for="type">Type</label></td><td><select name="type" id="typeed" class="input-large ui-widget-content ui-corner-all"><option value="peer">peer</option><option value="friend">friend</option><option value="user">user</option></select></td></tr>
                                                <tr><td><label for="host">Host</label></td><td><input type="text" name="host" id="hosted" value="" class="input-large ui-widget-content ui-corner-all" /></td></tr>
                                                <tr><td><label for="callgroup">Callgroup</label></td><td><input type="text" name="callgroup" id="callgrouped" value="" class="input-large ui-widget-content ui-corner-all" /></td></tr>
                                                <tr><td><label for="pickupgroup">PickupGroup</label></td><td><input type="text" name="pickupgroup" id="pickupgrouped" value="" class="input-large ui-widget-content ui-corner-all" /></td></tr>
                                                <tr><td><label for="qualify">Qualify</label></td><td><select name="qualify" id="qualifyed" class="input-large ui-widget-content ui-corner-all"><option value="yes">yes</option><option value="no">no</option></select></td></tr>
                                                <tr><td><label for="allow">Allow</label></td><td><input type="text" name="allow" id="allowed" value="ulaw;alaw" class="input-large ui-widget-content ui-corner-all" /></td></tr>
                                                <tr><td><label for="permit">Permit</label></td><td><input type="text" name="permit" id="permited" value="0.0.0.0/0.0.0.0" class="input-large ui-widget-content ui-corner-all" /></td></tr>
                                                <tr><td><label for="deny">Deny</label></td><td><input type="text" name="deny" id="denyed" value="0.0.0.0/0.0.0.0" class="input-large ui-widget-content ui-corner-all" /></td></tr>
                                                <tr><td><label for="dtmfmode">DTMFmode</label></td><td><input type="text" name="dtmfmode" id="dtmfmodeed" value="rfc2833" class="input-large ui-widget-content ui-corner-all" /></td></tr>
                                                <tr><td><label for="transport">Transport</label></td><td><select name="transport" id="transported" class="input-large ui-widget-content ui-corner-all"><option value="udp">UDP</option><option value="TCP">TCP</option><option value="tls">TLS</option><option value="ws">WS</option><option value="wss">WSS</option><option value="udp,tcp">UDP,TCP</option><option value="udp,tcp,tls">UDP,TCP,TLS</option><option value="udp,tcp,tls,ws">UDP,TCP,TLS,WS</option></select></td></tr>
                                                <tr><td><label for="videosupport">Video Support</label></td><td><select name="videosupport" id="videosupported" class="input-large ui-widget-content ui-corner-all"><option value="yes">yes</option><option value="no">no</option></select></td></tr>
                                                <tr><td><label for="directmedia">DirectMedia</label></td><td><select name="directmedia" id="directmediaed" class="input-large ui-widget-content ui-corner-all"><option value="yes">yes</option><option value="no">no</option><option value="nonat">nonat</option><option value="update">update</option></select></td></tr>
						<tr><td><label for="encryption">Encryption</label></td><td><select name="encryption" id="encryptioned" class="input-large ui-widget-content ui-corner-all"><option value="yes">yes</option><option value="no">no</option></select></td></tr>
						<tr><td><label for="nat">NAT</label></td><td><select name="nat" id="nated" class="input-large ui-widget-content ui-corner-all"><option value="yes">yes</option><option value="no">no</option><option value="comedia">comedia</option><option value="force_rport">force_rport</option><option value="force_rport,comedia">force_rport,comedia</option></select></td></tr>
                                                <tr><td><label for="editpined">Edit Pin</label></td><td><select name="editpined" id="editpined" class="input-large ui-widget-content ui-corner-all"><option value="no">no</option><option value="yes">yes</option></select></td></tr>

                                                </table>


                                        </form>
                                </div>
                                <!-- End form to edit peers -->


						<?php
							include "include/loginsql.php";			
							$sql="SELECT name,accountcode,secret,callgroup,callerid,context,host,language,mailbox,nat,pickupgroup,qualify,type,allow,videosupport,id,transport from sip_buddies order by name asc";
							$result = mysql_query($sql)or die(mysql_error());									

		        				echo "<table class='table table-bordered table-striped table-condensed'>
							        <thead>
								<tr class='ui-widget-header '>
								<th>Extension</th>
								<th>Password</th>
								<th>CallerID</th>
							        <th>Context</th>
							        <th>Mailbox</th>
							        <th>Nat</th>
							        <th>Account</th>
							        <th>Type</th>
							        <th>Transport</th>
							        <th>Edit</th>
							        <th>Delete</th>
		        					</tr>
								</thead>
							<tbody>";

							while($row = mysql_fetch_array($result)){
	   							echo "<tr id=". $row['id'] .">";
								echo "<td>" . $row['name'] . "</td>";
								echo "<td>" . $row['secret'] . "</td>";
								echo "<td>" . $row['callerid'] . "</td>";
								echo "<td>" . $row['context'] . "</td>";
								//echo "<td>" . $row['host'] . "</td>";
								//echo "<td>" . $row['language'] . "</td>";
								echo "<td>" . $row['mailbox'] . "</td>";
								echo "<td>" . $row['nat'] . "</td>";
								echo "<td>" . $row['accountcode'] . "</td>";
								//echo "<td>" . $row['qualify'] . "</td>";
								echo "<td>" . $row['type'] . "</td>";
								echo "<td>" . $row['transport'] . "</td>";
								//echo "<td>" . $row['videosupport'] . "</td>";
								echo "<td><button class='btn btn-info edid' value=". $row['id'] ."><i class='icon-edit icon-white'></i></a></td>";
					        		echo "<td><button class='btn btn-danger delid' value=". $row['id'] ."><i class='icon-trash icon-white'></i></td>";  			
							}
								echo "</tr>";
							echo "</tbody>
							</table>";		
						?>
					</div>

					<div class="tab-pane" id="addnewsip">
						<!-- form to add peers -->
						<form>
							<table class='table  table-bordered table-striped table-condensed'>
								<tr><td><label for="extension">Extension</label></td><td><input autofocus  type="text" name="extension" id="extension"  class="input-large  ui-widget-content ui-corner-all" title="Device Name. I.e: 1000" data-rel="tooltip" /></td></tr>
								<tr><td><label for="secret">Secret</label></td><td><input type="text" name="secret" id="secret" value="" class="input-large  ui-widget-content ui-corner-all" title="Password to register Don't use same as above" data-rel="tooltip"/></td></tr>
								<tr><td><label for="callerid">CallerID</label></td><td><input type="text" name="callerid" id="callerid" value="&quot;name&quot;<0000>" class="input-large ui-widget-content ui-corner-all" title="The Name of the Owner. I.e: 'John doe'<1000>" data-rel="tooltip"/></td></tr>
								<tr><td><label for="context">Context</label></td><td><input type="text" name="context" id="context" value="" class="input-large ui-widget-content ui-corner-all" title="The Context with the dial rules of this device" data-rel="tooltip"/></td></tr>
								<tr><td><label for="accountcode">AccountCode</label></td><td><input type="text" name="accountcode" id="accountcode" value="" class="input-large ui-widget-content ui-corner-all" title="Account code to search in CDR" data-rel="tooltip"/></td></tr>
								<tr><td><label for="mailbox">mailbox</label></td><td><input type="text" name="mailbox" id="mailbox" value="" class="input-large ui-widget-content ui-corner-all" title="Mailbox of the device" data-rel="tooltip"/></td></tr>
								<tr><td><label for="email">Email</label></td><td><input type="text" name="email" id="email" value="" class="input-large ui-widget-content ui-corner-all" title="The Email of the owner" data-rel="tooltip"/></td></tr>
								<tr><td><label for="type">Type</label></td><td><select name="type" id="type" class="input-large ui-widget-content ui-corner-all" title="The type of the device, usually friend" data-rel="tooltip"><option value="peer">peer</option><option value="friend">friend</option><option value="user">user</option></select></td></tr>
								<tr><td><label for="host">Host</label></td><td><input type="text" name="host" id="host" value="" class="input-large ui-widget-content ui-corner-all" title="The Fixed IP of Device, but usually set: Dynamic" data-rel="tooltip"/></td></tr>
								<tr><td><label for="callgroup">Callgroup</label></td><td><input type="text" name="callgroup" id="callgroup" value="" class="input-large ui-widget-content ui-corner-all" title="The Device CallGroup in order to pickup same groups calls." data-rel="tooltip"/></td></tr>
								<tr><td><label for="pickupgroup">PickupGroup</label></td><td><input type="text" name="pickupgroup" id="pickupgroup" value="" class="input-large ui-widget-content ui-corner-all" title="Pickup Group Of the Device" data-rel="tooltip"/></td></tr>
								<tr><td><label for="qualify">Qualify</label></td><td><select name="qualify" id="qualify" class="input-large ui-widget-content ui-corner-all" title="Monitor the State of the Device" data-rel="tooltip"><option value="yes">yes</option><option value="no">no</option></select></td></tr>
								<tr><td><label for="allow">Allow</label></td><td><input type="text" name="allow" id="allow" value="ulaw;alaw" class="input-large ui-widget-content ui-corner-all" title="Codecs that can use the Device" data-rel="tooltip"/></td></tr>
        		                                        <tr><td><label for="permit">Permit</label></td><td><input type="text" name="permit" id="permit" value="0.0.0.0/0.0.0.0" class="input-large ui-widget-content ui-corner-all" /></td></tr>
                        		                        <tr><td><label for="deny">Deny</label></td><td><input type="text" name="deny" id="deny" value="0.0.0.0/0.0.0.0" class="input-large ui-widget-content ui-corner-all" /></td></tr>
                                        		        <tr><td><label for="dtmfmode">DTMFmode</label></td><td><input type="text" name="dtmfmode" id="dtmfmode" value="rfc2833" class="input-large ui-widget-content ui-corner-all" /></td></tr>
		                                                <tr><td><label for="transport">Transport</label></td><td><select name="transport" id="transport" class="input-large ui-widget-content ui-corner-all"><option value="udp">UDP</option><option value="TCP">TCP</option><option value="tls">TLS</option><option value="ws">WS</option><option value="wss">WSS</option><option value="udp,tcp">UDP,TCP</option><option value="udp,tcp,tls">UDP,TCP,TLS</option><option value="udp,tcp,tls,ws">UDP,TCP,TLS,WS</option></select></td></tr>
                                		                <tr><td><label for="directmedia">DirectMedia</label></td><td><select name="directmedia" id="directmedia" class="input-large ui-widget-content ui-corner-all"><option value="yes">yes</option><option value="no">no</option><option value="nonat">nonat</option><option value="update">update</option></select></td></tr>
								<tr><td><label for="encryption">Encryption</label></td><td><select name="encryption" id="encryption" class="input-large ui-widget-content ui-corner-all"><option value="yes">yes</option><option value="no">no</option></select></td></tr>
								<tr><td><label for="videosupport">Video Support</label></td><td><select name="videosupport" id="videosupport" class="input-large ui-widget-content ui-corner-all" title="Enable if Device can handle Video." data-rel="tooltip"><option value="no">no</option><option value="yes">yes</option></select></td></tr>
								<tr><td><label for="nat">NAT</label></td><td><select name="nat" id="nat" class="input-large ui-widget-content ui-corner-all"><option value="yes">yes</option><option value="no">no</option><option value="comedia">comedia</option><option value="force_rport">force_rport</option><option value="force_rport,comedia">force_rport,comedia</option></select></td></tr>
	
								<tr><td><label for="editpin">Edit Pin</label></td><td><select name="editpin" id="editpin" class="input-large ui-widget-content ui-corner-all" title="The owner can edit his password to dial?" data-rel="tooltip"><option value="no">no</option><option value="yes">yes</option></select></td></tr>
							</table>
						</form>	<!-- End form to add peers -->
						<div class="form-actions">
							<button  class="btn-primary" id="subsip">Submit</button>
							<!--<button  class="btn-danger id="clearform"">Cancel</button>-->
						</div>

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

