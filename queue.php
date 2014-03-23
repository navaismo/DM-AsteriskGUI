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
						<a href="#">Queue & Agents Settings</a>
					</li>
				</ul>
			</div>
<!------------------------------------------- All Pages end -------------------------------->

<div class="sortable row-fluid">
				
				<a data-rel="tooltip" title="Created  Queues" class="well span3 top-block" href="#">
					<span class="icon32 icon-blue icon-archive"></span>
					<div>Total of Queues</div>
					<?php
						$res=mysql_query("select * from queue_table") or die(mysql_error());
						$q=mysql_num_rows($res);
						echo "<div>$q</div>";
					?>
					<span class="notification">!</span>
				</a>

				<a data-rel="tooltip" title="Created  Agents" class="well span3 top-block" href="#">
					<span class="icon32 icon-blue icon-users"></span>
					<div>Total Agents</div>
					<?php
						$res=mysql_query("select * from agents") or die(mysql_error());
						$ag=mysql_num_rows($res);
						echo "<div>$ag</div>";
					?>
					<span class="notification">!</span>
				</a>

</div>

	<div class="row-fluid sortable">	
		<div class="box span12">
			<div class="box-header well" data-original-title>
				<h2>Queue & Agents</h2>
				<div class="box-icon">
					<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				</div>
			</div>

			<div class="box-content">
				<ul class="nav nav-tabs" id="myTab">
					<li><a class="active" href="#adag">Add Agents</a></h3></li>
					<li><a href="#adqu">Add Queues</a></h3></li>
					<li><a href="#adaq">Manage Queues</a></h3></li>		
                                </ul>

				<div id="myTabContent" class="tab-content">
                                       	<div class="tab-pane active" id="adag">
						<button class="btn btn-primary" id="addpeeragent"><i class="icon-zoom-in  icon-plus-sign"></i> Add New Agent</button>
				
						<!-- form to add agent -->
						<div id="dialog-formagent" title="Create New Agent">
							<br><br>
							<form>
								<table align=center class='table table-stripped table-condensed table-bordered ui-widget ui-widget-content'>
									<tr><td><label for="agentid">Agent Number</label></td><td><input autofocus type="text" name="agent_id" id="agent_id" class="input-large ui-widget-content ui-corner-all" /></td></tr>
									<tr><td><label for="agentname">Agent Name</label></td><td><input type="text" name="agent_name" id="agent_name" value="" class="input-large ui-widget-content ui-corner-all" /></td></tr>
									<tr><td><label for="agentpass">Agent Pass</label></td><td><input type="text" name="agent_pass" id="agent_pass" class="input-large ui-widget-content ui-corner-all"></td></tr>
								</table>

							</form>
						</div>
							<!-- End form to add pinset -->


						<!-- form to add agent -->
						<div id="dialog-form2agent" title="Edit Agent">
							<br>
							<form>
							<table align=center class='table table-stripped table-condensed table-bordered ui-widget ui-widget-content'>
								<tr><td><label for="agentided">Agent Number</label></td><td><input type="text" name="agent_ided" id="agent_ided" class="input-large ui-widget-content ui-corner-all" READONLY/></td></tr>
								<tr><td><label for="agentnameed">Agent Name</label></td><td><input type="text" name="agent_nameed" id="agent_nameed" value="" class="input-large ui-widget-content ui-corner-all" /></td></tr>
								<tr><td><label for="agentpassed">Agent Pass</label></td><td><input type="text" name="agent_passed" id="agent_passed" class="input-large ui-widget-content ui-corner-all"/></td></tr>
							</table>

							</form>
						</div>
						<!-- End form to edit pinset -->

			
						<div id="dialog-deleteagent" Title="Alert">
						<p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Delete this Agent?</p>
        	                        	</div>

					<?php
						include "include/loginsql.php";

						$sql="SELECT agent_id ,agent_name, agent_pass from agents order by agent_id asc";
						$result = mysql_query($sql)or die(mysql_error());
					
						echo "<br><table class='table table-stripped table-condensed table-bordered '>
					        <thead>
						<tr class='ui-widget-header '>
						<th>Agent Number</th>
						<th>Agent Name</th>
						<th>Agent Password</th>
					        <th>Edit</th>
					        <th>Delete</th>
					        </tr>
						</thead>
						<tbody>";

						while($row = mysql_fetch_array($result)){
		   					echo "<tr id=". $row['agent_id'] .">";
							echo "<td>" . $row['agent_id'] . "</td>";
							echo "<td>" . $row['agent_name'] . "</td>";
							echo "<td>" . $row['agent_pass'] . "</td>";
							echo "<td><button class='btn btn-info edidagent' value=". $row['agent_id'] ."><i class='icon-edit icon-white'></i></button></td>";
						        echo "<td><button class='btn btn-danger delidagent'  value=". $row['agent_id'] ."><i class='icon-trash icon-white'></i></button></td>";
  			
						}
							echo "</tr>";
							echo "</tbody></table>";


					?>
				</div><!---- fin adag ------->
			
                                       	<div class="tab-pane active" id="adqu">
				
						<button class="btn btn-primary" id="addpeerque"><i class="icon-plus-sign icon-white"></i>Add New Queue</button>
				
						<!-- form to add queue -->
						<div id="dialog-formque" title="Create New QUEUE">
							<br>
							<form>
								<table align=center class='table table-stripped table-condensed table-bordered'>
									<tr><td><label for="nameque">Name</label></td><td><input autofocus type="text" name="quename" id="quename" class="input-large ui-widget-content ui-corner-all" /></td></tr>
									<tr><td><label for="musicclass">Music Class</label></td><td><input type="text" name="quemusic" id="quemusic" value="default" class="input-large ui-widget-content ui-corner-all" /></td></tr>
									<tr><td><label for="announce">Announce</label></td><td><input type="text" name="queannounce" id="queannonuce" class="input-large ui-widget-content ui-corner-all"></td></tr>
									<tr><td><label for="context">Context</label></td><td><input type="text" name="quecontext" id="quecontext" class="input-large ui-widget-content ui-corner-all"></td></tr>
									<tr><td><label for="timeout">TimeOut</label></td><td><input type="text" name="quetimeout" id="quetimeout" class="input-large ui-widget-content ui-corner-all"></td></tr>
									<tr><td><label for="monitortype">Monitor Type</label></td><td><input type="text" name="quemonitortype" id="quemonitortype" value="MixMonitor" class="input-large ui-widget-content ui-corner-all"></td></tr>
									<tr><td><label for="monitorformat">Monitor Format</label></td><td><input type="text" name="quemonitorformat" id="quemonitorformat" value="wav"class="input-large ui-widget-content ui-corner-all"></td></tr>
									<tr><td><label for="anonfreq">Announce Frequency</label></td><td><input type="text" name="queannouncefreq" id="queannonucefreq" class="input-large ui-widget-content ui-corner-all"></td></tr>
									<tr><td><label for="announcehold">Announce Holdtime</label></td><td><select name="queannouncehold" id="queannouncehold" class="input-large ui-widget-content ui-corner-all"><option value="no">No</option><option value="yes">Yes</option></select></td></tr>
									<tr><td><label for="announceperi">Periodic Announce</label></td><td><input type="text" name="queannounceperi" id="queannonuceperi" class="input-large ui-widget-content ui-corner-all"></td></tr>
									<tr><td><label for="announceperifreq">Periodic Announce Frequency</label></td><td><input type="text" name="queannounceperifreq" id="queannonuceperifreq" class="input-large ui-widget-content ui-corner-all"></td></tr>
									<tr><td><label for="retry">Retry</label></td><td><input type="text" name="queretry" id="queretry" class="input-large ui-widget-content ui-corner-all"></td></tr>
									<tr><td><label for="ringinuse">Ring In Use</label></td><td><select name="queringinuse" id="queringinuse" class="input-large ui-widget-content ui-corner-all"><option value="no">No</option><option value="yes">Yes</option></select></td></tr>
									<tr><td><label for="autofill">AutoFill</label></td><td><select name="queautofill" id="queautofill" class="input-large ui-widget-content ui-corner-all"><option value="no">No</option><option value="yes">Yes</option></select></td></tr>
									<tr><td><label for="autopause">AutoPause</label></td><td><select name="queautopause" id="queautopause" class="input-large ui-widget-content ui-corner-all"><option value="no">No</option><option value="yes">Yes</option></select></td></tr>
									<tr><td><label for="setinterfacevar">Set Interface var</label></td><td><select name="quesetvar" id="quesetvar" class="input-large ui-widget-content ui-corner-all"><option value="yes">Yes</option><option value="no">No</option></select></td></tr>
									<tr><td><label for="wrapuptime">Wrapup Time</label></td><td><input type="text" name="quewrap" id="quewrap" class="input-large ui-widget-content ui-corner-all"></td></tr>
									<tr><td><label for="maxlen">MaxLen</label></td><td><input type="text" name="quemaxlen" id="quemaxlen" class="input-large ui-widget-content ui-corner-all"></td></tr>
									<tr><td><label for="servicelevel">Service Level</label></td><td><input type="text" name="queservicelevel" id="queservicelevel" class="input-large ui-widget-content ui-corner-all"></td></tr>
									<tr><td><label for="strategy">Strategy</label></td><td><select name="questrategy" id="questrategy" class="input-large ui-widget-content ui-corner-all"><option value="ringall">RingAll</option><option value="roundrobin">RoundRobin</option><option value="leastrecent">LeastRecent</option><option value="fewestcalls">FewestCalls</option><option value="random">Random</option><option value="rrmemory">RoundRobin Memory</option><option value="linear">Linear</option><option value="wrandom">Weight Ramdom</option></select></td></tr>
									<tr><td><label for="joinempty">Join Empty</label></td><td><select name="quejoinempty" id="quejoinempty" class="input-large ui-widget-content ui-corner-all"><option value="no">No</option><option value="Yes">Yes</option></select></td></tr>
									<tr><td><label for="leaveempty">Leave When Empty</label></td><td><select name="queleaveempty" id="queleaveempty" class="input-large ui-widget-content ui-corner-all"><option value="yes">Yes</option><option value="No">No</option></select></td></tr>
									<tr><td><label for="reportholdtime">Report Hold Time</label></td><td><select name="quereportholdt" id="quereporthold" class="input-large ui-widget-content ui-corner-all"><option value="yes">Yes</option><option value="No">No</option></select></td></tr>
									<tr><td><label for="weight">Weight</label></td><td><input type="text" name="queweight" id="queweight" class="input-large ui-widget-content ui-corner-all"></td></tr>
								</table>

							</form>
						</div>
							<!-- End form to add Queue -->


						<!-- form to edit Queue -->
						<div id="dialog-form2que" title="Edit Queue">
							<br>
							<form>
							<table align=center class='ui-widget ui-widget-content'>
								<tr><td><label for="namequeed">Name</label></td><td><input autofocus type="text" name="quenameed" id="quenameed" class="input-large ui-widget-content ui-corner-all" READONLY /></td></tr>
								<tr><td><label for="musicclassed">Music Class</label></td><td><input type="text" name="quemusiced" id="quemusiced" value="default" class="input-large ui-widget-content ui-corner-all" /></td></tr>
								<tr><td><label for="announceed">Announce</label></td><td><input type="text" name="queannounceed" id="queannonuceed" class="input-large ui-widget-content ui-corner-all"></td></tr>
								<tr><td><label for="contexted">Context</label></td><td><input type="text" name="quecontexted" id="quecontexted" class="input-large ui-widget-content ui-corner-all"></td></tr>
								<tr><td><label for="timeouted">TimeOut</label></td><td><input type="text" name="quetimeouted" id="quetimeouted" class="input-large ui-widget-content ui-corner-all"></td></tr>
								<tr><td><label for="monitortypeed">Monitor Type</label></td><td><input type="text" name="quemonitortypeed" id="quemonitortypeed" value="MixMonitor" class="input-large ui-widget-content ui-corner-all"></td></tr>
								<tr><td><label for="monitorformated">Monitor Format</label></td><td><input type="text" name="quemonitorformated" id="quemonitorformated" value="wav"class="input-large ui-widget-content ui-corner-all"></td></tr>
								<tr><td><label for="anonfreqed">Announce Frequency</label></td><td><input type="text" name="queannouncefreqed" id="queannonucefreqed" class="input-large ui-widget-content ui-corner-all"></td></tr>
								<tr><td><label for="announceholded">Announce Holdtime</label></td><td><select name="queannounceholded" id="queannounceholded" class="input-large ui-widget-content ui-corner-all"><option value="no">No</option><option value="yes">Yes</option></select></td></tr>
								<tr><td><label for="announceperied">Periodic Announce</label></td><td><input type="text" name="queannounceperied" id="queannonuceperied" class="input-large ui-widget-content ui-corner-all"></td></tr>
								<tr><td><label for="announceperifreqed">Periodic Announce Frequency</label></td><td><input type="text" name="queannounceperifreqed" id="queannonuceperifreqed" class="input-large ui-widget-content ui-corner-all"></td></tr>
								<tr><td><label for="retryed">Retry</label></td><td><input type="text" name="queretryed" id="queretryed" class="input-large ui-widget-content ui-corner-all"></td></tr>
								<tr><td><label for="ringinuseed">Ring In Use</label></td><td><select name="queringinuseed" id="queringinuseed" class="input-large ui-widget-content ui-corner-all"><option value="no">No</option><option value="yes">Yes</option></select></td></tr>
								<tr><td><label for="autofilled">AutoFill</label></td><td><select name="queautofilled" id="queautofilled" class="input-large ui-widget-content ui-corner-all"><option value="no">No</option><option value="yes">Yes</option></select></td></tr>
								<tr><td><label for="autopauseed">AutoPause</label></td><td><select name="queautopauseed" id="queautopauseed" class="input-large ui-widget-content ui-corner-all"><option value="no">No</option><option value="yes">Yes</option></select></td></tr>
								<tr><td><label for="setinterfacevared">Set Interface var</label></td><td><select name="quesetvared" id="quesetvared" class="input-large ui-widget-content ui-corner-all"><option value="yes">Yes</option><option value="no">No</option></select></td></tr>
								<tr><td><label for="wrapuptimeed">Wrapup Time</label></td><td><input type="text" name="quewraped" id="quewraped" class="input-large ui-widget-content ui-corner-all"></td></tr>
								<tr><td><label for="maxlened">MaxLen</label></td><td><input type="text" name="quemaxlened" id="quemaxlened" class="input-large ui-widget-content ui-corner-all"></td></tr>
								<tr><td><label for="serviceleveled">Service Level</label></td><td><input type="text" name="queserviceleveled" id="queserviceleveled" class="input-large ui-widget-content ui-corner-all"></td></tr>
								<tr><td><label for="strategyde">Strategy</label></td><td><select name="questrategyed" id="questrategyed" class="input-large ui-widget-content ui-corner-all"><option value="ringall">RingAll</option><option value="roundrobin">RoundRobin</option><option value="leastrecent">LeastRecent</option><option value="fewestcalls">FewestCalls</option><option value="random">Random</option><option value="rrmemory">RoundRobin Memory</option><option value="linear">Linear</option><option value="wrandom">Weight Ramdom</option></select></td></tr>
								<tr><td><label for="joinemptyed">Join Empty</label></td><td><select name="quejoinemptyed" id="quejoinemptyed" class="input-large ui-widget-content ui-corner-all"><option value="no">No</option><option value="Yes">Yes</option></select></td></tr>
								<tr><td><label for="leaveemptyed">Leave When Empty</label></td><td><select name="queleaveemptyed" id="queleaveemptyed" class="input-large ui-widget-content ui-corner-all"><option value="yes">Yes</option><option value="No">No</option></select></td></tr>
								<tr><td><label for="reportholdtimeed">Report Hold Time</label></td><td><select name="quereportholdted" id="quereportholded" class="input-large ui-widget-content ui-corner-all"><option value="yes">Yes</option><option value="No">No</option></select></td></tr>
								<tr><td><label for="weighted">Weight</label></td><td><input type="text" name="queweighted" id="queweighted" class="input-large ui-widget-content ui-corner-all"></td></tr>
							</table>

							</form>
						</div>
						<!-- End form to edit pinset -->

			
						<div id="dialog-deleteque" Title="Alert">
							<p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Delete this Queue?</p>
        	                        	</div>

					<?php
						include "include/loginsql.php";

						$sql="SELECT name from queue_table order by name asc";
						$result = mysql_query($sql)or die(mysql_error());
					
					

        					echo "<br><table class='table table-stripped table-condensed table-bordered'>
					        <thead>
						<tr class='ui-widget-header '>
						<th>Queue name</th>
					        <th>Edit</th>
					        <th>Delete</th>
					        </tr>
						</thead>
						<tbody>";

						while($row = mysql_fetch_array($result)){
		   					echo "<tr id=". $row['name'] .">";
							echo "<td>" . $row['name'] . "</td>";
							echo "<td><button class='btn btn-info edidque' value=". $row['name'] ."><i class='icon-edit icon-white'></i></button></td>";
						        echo "<td><button class='btn btn-danger delidque'  value=". $row['name'] ."><i class='icon-trash icon-white'></i></button></td>";
  			
						}
							echo "</tr>";
							echo "</tbody></table>";


					?>

				</div><!------------------------------------ fin add queue ------------------------>

				<!----------------------------------- Asignar agente a cola ----------------------------------------------------------->
                                       	<div class="tab-pane active" id="adaq">
						
						<!-- form to add agent -->
						<div id="dialog-formadagqu" title="Add Agent to QUEUE">
							<br>
							<form>
								<table align=center class='ui-widget ui-widget-content'>
									<tr><td><label for="agentid">Agent</label></td><td>
									<?php
										include "include/loginsql.php";
										$sql="SELECT agent_id from agents";
										$result = mysql_query($sql)or die(mysql_error());		
										echo "<select name=selagent id='selagent' class='text ui-widget-content ui-corner-all'>";
										echo "<option value='choose'>-- Choose --</option>";
										while($row = mysql_fetch_array($result)){
						   					echo "<option value =". $row['agent_id'] .">". $row['agent_id'] ."</option>";
										}
										echo "</select>";
									?>	
									<tr><td><label for="agentpri">Agent Priority</label></td><td><input type="text" name="agentpri" id="agentpri" value="" class="input-large ui-widget-content ui-corner-all" /></td></tr>
								</table>
							</form>


						</div><!--- fin form add agent --->


						<!-- form to delete agent -->
						<div id="dialog-deleteagque" title="Remove Agent from QUEUE">
						 Delete this Agent?
						</div>


					<?php
						include "include/loginsql.php";

						$sql2="SELECT name from queue_table";
						$result2 = mysql_query($sql2)or die(mysql_error());
						
						echo"<table class='ui-widget'>
			                        <td>";

						echo "<select name=selqueue id='selqueue' class='text ui-widget-content ui-corner-all'>";
						echo "<option value='choose'>-- Choose --</option>";
						while($row = mysql_fetch_array($result2)){
		   					echo "<option value =". $row['name'] .">". $row['name'] ."</option>";
						}
							echo "</select>";
							echo "</td><td>";
							echo "<button class=' btn btn-primary edidselque' value=". $row['name'] ."><i class='icon-plus-sign icon-white'></i>Add Agent to Queue</button>";
							echo "</td><td>";
  							echo "</td></table>";

					

					?>
				<br><br>


				<div id="queue-agent">

				</div>

				</div><!------------------------------ fin agente a cola --------------------------->






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

