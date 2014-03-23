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
						<a href="#">Voicemail Template</a>
					</li>
				</ul>
			</div>
<!------------------------------------------- All Pages end -------------------------------->

<div class="sortable row-fluid">

</div>

	<div class="row-fluid sortable">	
		<div class="box span12">
			<div class="box-header well" data-original-title>
				<h2>Create the Voicemail Template Notification</h2>
				<div class="box-icon">
					<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				</div>
			</div>

			<div class="box-content">
				<ul class="nav nav-tabs" id="myTab">
					<li class="active"><a href="#createnewt">Create new Template</a></li>
					<li><a href="#currentT">Curren Template</a></li>
					<li><a href="#emailsettings">Email Settings</a></li>
				</ul>
					 

				<div id="myTabContent" class="tab-content">
					<div class="tab-pane active" id="createnewt">
						<p>				
							Create the HTML code to deliver your VM messages.<br><br>
							In the text area insert your HTML Code, to preview the code press the button "Preview".<br><br>
							When you are happy with the look of your template press the button "Save Template", The next time you will receive a VM Notification with the new HTML template.<br><br>
							You can use the following variables:
								<ul>
									<li>${name}: The owner of the mailbox.</li>
									<li>${mailbox}: The mailbox number.</li>
									<li>${dur}: The Duration of the Voicemail.</li>
									<li>${cid}: The Caller ID of the caller.</li>
									<li>${date}: The date of the received Voicemail.</li>
								</ul>
						</p>

						<hr>
						<style type=text/css>
                	                                textarea.styled {
                        	                        width: 720px;
                                	                height: 300px;
                                        	       	border: 3px solid #cccccc;
                                               		padding: 5px;
	                                               	font-family: Verdana;
        	                                       	font-size:1em;
                	                                background-color: lightblue;
	                	                        }
        	                                </style>
						<textarea id="code" class="styled"></textarea><br>
						<button id="send" class="btn btn-primary">Preview</button>
						<button id="savetem" class="btn btn-primary">Save template</button>

						<br><br>
						<div id="frame">
							Preview will show here:<hr>
						</div>


                	                </div>

					<div class="tab-pane" id="currentT">

						<?php
							//get the script file
						        $file = basename("/etc/asterisk/sendvm.php");
						        $text = file_get_contents("/etc/asterisk/sendvm.php");
							preg_match("/\/\/b1(.*)\/\/b2/s",$text,$body); 
							echo $body[1];
						?>
						<div>
						<br><hr>
						<table>
							<tr>
								<td>
									<input type="checkbox" id ="showCode">
								</td>
								<td>
									<label class="label label-inverse" id="labelshhtml">Show HTML CODE</label>
								</td>
							</tr>
						</table>
						
						<div id="showhtmlvmt"></div>


						</div>

					</div>

					<div class="tab-pane" id="emailsettings">

						<?php

				                        //get the script file
				                        $file = basename("/etc/asterisk/sendvm.php");
				                        $alltext = file_get_contents("/etc/asterisk/sendvm.php");

				                        preg_match("/\/\/f1(.*)\/\/f2/s",$alltext,$from1);
				                        preg_match("/\/\/n1(.*)\/\/n2/s",$alltext,$fromname1);
				                        preg_match("/\/\/h1(.*)\/\/h2/s",$alltext,$host1);
				                        preg_match("/\/\/u1(.*)\/\/u2/s",$alltext,$username1);
				                        preg_match("/\/\/p1(.*)\/\/p2/s",$alltext,$password1);
				                        preg_match("/\/\/o1(.*)\/\/o2/s",$alltext,$port1);
				                        preg_match("/\/\/s1(.*)\/\/s2/s",$alltext,$subject1);
			
							$from=str_replace("\"","",$from1[1]);
							$from=str_replace(";","",$from);
							$fromname=str_replace("\"","",$fromname1[1]);
							$fromname=str_replace(";","",$fromname);
							$host=str_replace("\"","",$host1[1]);
							$host=str_replace(";","",$host);
							$username=str_replace("\"","",$username1[1]);
							$username=str_replace(";","",$username);
							$password=str_replace("\"","",$password1[1]);
							$password=str_replace(";","",$password);
							$port=str_replace("\"","",$port1[1]);
							$port=str_replace(";","",$port);
							$subject=str_replace("\"","",$subject1[1]);
							$subject=str_replace(";","",$subject);
			
						?>

						<!--the form with the data-->
						<table align=left>
							<tr><td><label for="from" id="lfrom">From: </label></td><td><input placeholder="myemail@mydomain.com" type="text" id="from" name="from" value="<?php echo $from; ?>"/><? echo $errors1; ?></td></tr>
							<tr><td><label for="fromname" id="lfromname">FromName: </label></td><td><input placeholder="My Company Name" type="text" id="fromname" name="fromname" value="<?php echo $fromname; ?>"/><? echo $errors1; ?></td></tr>
							<tr><td><label for="host" id="lhost">Host: </label></td><td><input placeholder="ssl://smtp.gmail.com" type="text" id="host" name="host" value="<?php echo $host; ?>"/><? echo $errors1; ?></td></tr>
							<tr><td><label for="username" id="lusername">UserName: </label></td><td><input placeholder="myemail@mydomain.com" type="text" id="username" name="username" value="<?php echo $username; ?>"/><? echo $errors1; ?></td></tr>
							<tr><td><label for="password" id="lpwd">Password: </label></td><td><input placeholder="mypassword" type="text" id="password" name="password" value="<?php echo $password; ?>"/><? echo $errors1; ?></td></tr>
							<tr><td><label for="port" id="lport">Port: </label></td><td><input placeholder="465" type="text" id="port" name="port" value="<?php echo $port; ?>"/><? echo $errors1; ?></td></tr>
							<tr><td><label for="subject" id="lsubject">Subject: </label></td><td><input placeholder="[VM]: New VM" type="text" id="subject" name="subject" value="<?php echo $subject; ?>"/><? echo $errors1; ?></td></tr>
						</table>
						<button id="savemail" class="btn btn-primary">Save Settings</button>
						<div id="note">
							<p style="font-size:10px">
								This Module Use the PHP class PHPMAILER in order to send the email you need to fill all fields with your email credetendials.<br><br>
							</p>
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
	<script src="js/vmt.js"></script>

	<!-- SIPMl5 API for WEBRTC calls -->
        <script src="js/SIPml-api.js"></script>
	<script src="js/click2call.js"></script>

			
</body>
</html>

