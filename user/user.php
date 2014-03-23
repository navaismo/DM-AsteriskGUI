<?php
include "helpers/loginsql.php";
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
header ("Location: userlog.php");
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
	<link  href="../css/bootstrap-cerulean.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }


	</style>
	<link href="../css/bootstrap-responsive.css" rel="stylesheet">
	<link href="../css/charisma-app.css" rel="stylesheet">
	<link href="../css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='../css/fullcalendar.css' rel='stylesheet'>
	<link href='../css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='../css/chosen.css' rel='stylesheet'>
	<link href='../css/uniform.default.css' rel='stylesheet'>
	<link href='../css/colorbox.css' rel='stylesheet'>
	<link href='../css/jquery.cleditor.css' rel='stylesheet'>
	<link href='../css/jquery.noty.css' rel='stylesheet'>
	<link href='../css/noty_theme_default.css' rel='stylesheet'>
	<link href='../css/elfinder.min.css' rel='stylesheet'>
	<link href='../css/elfinder.theme.css' rel='stylesheet'>
	<link href='../css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='../css/opa-icons.css' rel='stylesheet'>
	<link href='../css/uploadify.css' rel='stylesheet'>

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
				<a class="brand" href="http://www.digital-merge.com" target="_blank"> <img alt="DM LOGO" src="../img/DMsmallbck.png" /> </a>
				
				

				<!-- user dropdown starts -->
				<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-user"></i><span class="hidden-phone"> <?php echo $_SESSION['name'];?></span>
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
						<li><a class="ajax-link" href="user.php"><i class="icon-home"></i><span class="hidden-tablet"> Home</span></a></li>

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
						<a href="#">User Interface</a>
					</li>
				</ul>
			</div>
<!------------------------------------------- All Pages end -------------------------------->

<div class="sortable row-fluid">

</div>

	<div class="row-fluid sortable">	
		<div class="box span12">
			<div class="box-header well" data-original-title>
				<h2>User Tools</h2>
				<div class="box-icon">
					<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				</div>
			</div>

			<div class="box-content">
				<ul class="nav nav-tabs" id="myTab">
					<li class="active"><a href="#uvm">Voicemails</a></li>
					<li><a href="#ufollow">Followme</a></li>
					<li><a href="#uwebphone"><?php echo $_SESSION['name'];?>'s Web Phone</a></li>
					<li><a href="#ucdr">Reports</a></li>
					<li><a href="#uvms">Voicemail Settings</a></li>
				</ul>
					 

				<div id="myTabContent" class="tab-content">
					<div class="tab-pane active" id="uvm">

						<?php 

							$peern=$_SESSION['peer'];
							echo "<div id='users-contain' class='ui-widget'>";
		                                        echo "<table class='table table-striped table-bordered table-condensed'>
                			                        <thead>
                                        				<tr class='ui-widget-header '>
					                                        <th>Voicemail</th>
                                        					<th>Download</th>
				                                        </tr>
                                			        </thead>
			                                        <tbody>";

							foreach (glob("/var/spool/asterisk/voicemail/default/$peern/INBOX/*.wav") as $filename) {
								$filename2=explode("/",$filename);
								echo "<tr><td><i class='ui-zoom icon-envelope'></i> $filename2[8]</td>";
								echo "<td><a  class='btn btn-primary' href='helpers/downVM.php?id=$peern&file=$filename2[8]'><i class='icon-zoom icon-download-alt'></i>Get File</a></div></td>";
							        //echo "<td><div class='delebtn'><a href='delVM.php?id=$peer&file=$filename2[8]'>Delete File</a></div></td>";
 					   			//echo "$filename size " . filesize($filename) . "\n";
							}
								echo "</tr>";
                		                		echo "</tbody></table></div>";
									
							    // Close
							    //closedir($dir_handle);
	
						?>
			
                	                </div> <!-- END VM ---->


					<div class="tab-pane" id="ufollow">
						
						<input type="hidden" id="txtval" value="<?php echo "$peern"; ?>"  />				
						<?php
							include "helpers/loginsql.php";
							$sql="SELECT * from followme_numbers where name=$peern AND ordinal=1";
							$result=mysql_query($sql);
							$count=mysql_num_rows($result);
				
							if ($count==1){
								$sql2="SELECT isset from followme Where name=$peern";
								$result2=mysql_query($sql2) or die(mysql_error());
								$valfw=mysql_fetch_array($result2);

									if ($valfw['isset']==1){
										echo "<table>
											<tr>
												<td>
													<input type='checkbox' id='check' checked='checked'/>
												</td>
												<td>
													<label class='label label-inverse' id='labelchk' for='check'>Disable Followme</label>
											</tr>
											</table>";
									}else{
										echo "<table>
											<tr>
												<td>
													<input type='checkbox' id='check'/>
												</td>
												<td>
													<label class='label label-inverse' id='labelchk' for='check'>Enable Followme</label>
											</tr>
											</table>";

									}						
							}else{
								echo "<button class='btn btn-primary' id='addpeerfollow'><i class='icon-zoom  icon-list-alt'></i>Add Numbers</button>";
							}
						?>


						<!-- form to add followme -->
						<div id="dialog-formfollow" title="Add Followme Numbers">
							<br>
							<form>
								<table align='center' class="table table-stripped table-condensed">
									<tr><td><label for="first">First Number</label></td><td><input type="text" name="firstfollow" id="firstfollow" class="text ui-widget-content ui-corner-all" /></td><td>&nbsp;&nbsp;Ring Time(secs)</td><td><input type=text  size=5 name="firsttime" id="firsttime"class="text ui-widget-content ui-corner-all"></tr>
									<tr><td><label for="second">Second Number</label></td><td><input type="text" name="firstfollow" id="secondfollow" class="text ui-widget-content ui-corner-all" /></td><td>&nbsp;&nbsp;Ring Time(secs)</td><td><input type=text  size=5 name="secondtime" id="secondtime" class="text ui-widget-content ui-corner-all"></tr>
									<tr><td><label for="third">Third Number</label></td><td><input type="text" name="firstfollow" id="thirdfollow" class="text ui-widget-content ui-corner-all" /></td><td>&nbsp;&nbsp;Ring Time(secs)</td><td><input type=text  size=5 name="thirdtime" id="thirdtime" class="text ui-widget-content ui-corner-all"></tr>
									<tr><td><label for="fouth">Fourth Number</label></td><td><input type="text" name="firstfollow" id="fourthfollow" class="text ui-widget-content ui-corner-all" /></td><td>&nbsp;&nbsp;Ring Time(secs)</td><td><input type=text  size=5 name="fourthtime" id="fourthtime" class="text ui-widget-content ui-corner-all"></tr>
									<tr><td><label for="fifth">Fifth Number</label></td><td><input type="text" name="firstfollow" id="fifthfollow" class="text ui-widget-content ui-corner-all" /></td><td>&nbsp;&nbsp;Ring Time(secs)</td><td><input type=text  size=5 name="fifthtime" id="fifthtime" class="text ui-widget-content ui-corner-all"></tr>
								</table>

	
							</form>
						</div>
						<!-- End form to add followme -->


						<!-- form to edit followme -->
						<div id="dialog-form2follow" title="Edit Followme">
							<br>
							<form>
								<table align=center class='table table-stripped table-condensed'>

									<tr><td><label for="first">First Number</label></td><td><input type="text" name="firstfollow" id="firstfollowed" class="text ui-widget-content ui-corner-all" /></td><td>&nbsp;&nbsp;Ring Time(secs)</td><td><input type=text  size=5 name="firsttime" id="firsttimeed"class="text ui-widget-content ui-corner-all"></tr>
									<tr><td><label for="second">Second Number</label></td><td><input type="text" name="firstfollow" id="secondfollowed" class="text ui-widget-content ui-corner-all" /></td><td>&nbsp;&nbsp;Ring Time(secs)</td><td><input type=text  size=5 name="secondtime" id="secondtimeed" class="text ui-widget-content ui-corner-all"></tr>
									<tr><td><label for="third">Third Number</label></td><td><input type="text" name="firstfollow" id="thirdfollowed" class="text ui-widget-content ui-corner-all" /></td><td>&nbsp;&nbsp;Ring Time(secs)</td><td><input type=text  size=5 name="thirdtimeed" id="thirdtimeed" class="text ui-widget-content ui-corner-all"></tr>
									<tr><td><label for="fouth">Fourth Number</label></td><td><input type="text" name="firstfollow" id="fourthfollowed" class="text ui-widget-content ui-corner-all" /></td><td>&nbsp;&nbsp;Ring Time(secs)</td><td><input type=text  size=5 name="fourthtime" id="fourthtimeed" class="text ui-widget-content ui-corner-all"></tr>
									<tr><td><label for="fifth">Fifth Number</label></td><td><input type="text" name="firstfollow" id="fifthfollowed" class="text ui-widget-content ui-corner-all" /></td><td>&nbsp;&nbsp;Ring Time(secs)</td><td><input type=text  size=5 name="fifthtime" id="fifthtimeed" class="text ui-widget-content ui-corner-all"></tr>

								</table>
							</form>
						</div>
						<!-- End form to edit followme -->
						<br>
						<?php
							include "helpers/loginsql.php";
							$peern=$_SESSION['peer'];
							$sql="SELECT name, ordinal, phonenumber, timeout from followme_numbers where name='$peern' order by ordinal asc";
							$result = mysql_query($sql)or die(mysql_error());						

							echo "<div id='users-contain' class='ui-widget'><br><br>";
        						echo "<table class='table table-stripped table-condensed'>
						        <thead>
							<tr class='ui-widget-header '>
							<th>Number to Dial</th>
							<th>Order to Dial</th>
							<th>TimeOut (seconds)</th>
							<th>Edit</th>
						        </tr>
							</thead>
							<tbody>";

							while($row = mysql_fetch_array($result)){
			   					echo "<tr id=". $row['id'] .">";
								echo "<td>" . $row['phonenumber'] . "</td>";
								echo "<td>" . $row['ordinal'] . "</td>";
								echo "<td>" . $row['timeout'] . "</td>";
								echo "<td><div class='editbtn'><button class='edidfollow btn-info' value=". $row['name'] ."><i class='icon-zoom icon-edit'></i>Edit</button></div></td>";
							        //echo "<td><div class='delebtn'><button class='delidvm'  value=". $row['uniqueid'] .">Delete</button></div></td>";  			
							}
							echo "</tr>";
							echo "</tbody></table></div>";
						?>

					</div> <!--END FOLLOW-->

					<div class="tab-pane" id="uwebphone">
						 <input type="hidden" value="<?php echo $peern; ?>" id="mypeer" />
						 <input type="hidden" value="<?php echo $_SERVER['SERVER_ADDR']; ?>" id="myserverip" />
						 <input type="hidden" value="<?php echo $_SESSION['name']; ?>" id="myname" />
						 
						 <?php
							$sqlp="SELECT secret from sip_buddies WHERE name='$peern'";
							$result = mysql_query($sqlp)or die(mysql_error());
							$row = mysql_fetch_array($result);

						 	echo "<input type='hidden' value='$row[secret]' id='mypwd' />";
						?>


						            <div id="divCallCtrl" class="span4 well" style='display:table-cell; vertical-align:middle' >
						               	<div align=center id="mysipstatus"></div><audio id='audio_remote'></audio>	
							                <table style="width: 100%;">
										 <tr>
											<td><div align="center"><input autofocus type="text" style="width: 70%" value="" id="callnumber" /> </div></td>
										</tr>
							                        <tr>			
								                        <td colspan="1" align="center">
							          			<!-- KeyPad Div -->
											    <div id='divKeyPad' class='span14 div-keypad' >
											    	<table style="width: 50%; height: 50%">
											            <tr><td><input type="button" style="width: 33%" class="btn-primary" value="1" onclick="sipSendDTMF('1');"/><input type="button" style="width: 33%" class="btn-primary" value="2" onclick="sipSendDTMF('2');"/><input type="button" style="width: 33%" class="btn-primary" value="3" onclick="sipSendDTMF('3');"/></td></tr>
											            <tr><td><input type="button" style="width: 33%" class="btn-primary" value="4" onclick="sipSendDTMF('4');"/><input type="button" style="width: 33%" class="btn-primary" value="5" onclick="sipSendDTMF('5');"/><input type="button" style="width: 33%" class="btn-primary" value="6" onclick="sipSendDTMF('6');"/></td></tr>
											            <tr><td><input type="button" style="width: 33%" class="btn-primary" value="7" onclick="sipSendDTMF('7');"/><input type="button" style="width: 33%" class="btn-primary" value="8" onclick="sipSendDTMF('8');"/><input type="button" style="width: 33%" class="btn-primary" value="9" onclick="sipSendDTMF('9');"/></td></tr>
											            <tr><td><input type="button" style="width: 33%" class="btn-primary" value="*" onclick="sipSendDTMF('*');"/><input type="button" style="width: 33%" class="btn-primary" value="0" onclick="sipSendDTMF('0');"/><input type="button" style="width: 33%" class="btn-primary" value="#" onclick="sipSendDTMF('#');"/></td></tr>
								        			</table>
								    			    </div>
											</td>
										</tr>
										<tr>
											<td colspan="1" align="center">
									                            <input type="button" class="btn-success" style="" id="btnCall" value="Call" onclick='call();' />&nbsp;
									                            <input type="button" class="btn-danger" style=""  id="btnHangUp" value="HangUp" onclick='hangup();' />
											</td>
										</tr>							
							                </table>
							   			<div align=center id="mycallstatus"></div>         
							    </div>
					</div><!-- END WEB PHONE -->

					<div class="tab-pane" id="ucdr">

						<p >From Date: <input type="text" class="datepicker" id="range1" size="15"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To Date:<input type="text" class="datepicker" id="range2" size="15"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>Report: <select id="filterslct" class='ui-widget ui-widget-content'><option value="extension">Extension</option></select></p>
			
						<div id="byfilter">
							<?php
								$peern=$_SESSION['peer'];
								echo " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select id='filter2' class='ui-widget ui-widget-content'><option value='$peern'>$peern</option></select></p>";
							?>
						</div>			
			
						<table class='ui-widget'>
							<tr>
								<td>
									<button id="lookcdr" class="btn btn-primary"><i class="icon-zoom icon-search"></i>Search</button>
								</td> 		
								<td>
									<!--<a  href="#" target="_blank" id="udownr">Download Report</a>-->
									<button  id="udownr"  class="btn btn-primary" ><i class="icon-zoom icon-download"></i>Download Report</button>
								</td>
							</tr>
						</table>
			
						<style type='text/css'>
                                                        td{font-family: Arial; font-size: 8pt;}
                                                        th{font-family: Arial; font-size: 9pt;}
                                                </style>
						<div id="rescdr">
						</div>

					</div><!-- END CDR --->
					
					<div class="tab-pane" id="uvms">

						<!-- form to edit peers -->
						<div id="dialog-form2vm" title="Edit VM Box">
							<br>
							<form>
								<table align=center class='ui-widget ui-widget-content'>
									<tr><td><label for="customerid">Voicemail</label></td><td><input type="text" name="customeridvm" id="customeridedvm" class="text ui-widget-content ui-corner-all" READONLY/></td></tr>
									<tr><td><label for="mailbox">Mailbox</label></td><td><input type="text" name="mailboxvm" id="mailboxedvm" value="" class="text ui-widget-content ui-corner-all" READONLY /></td></tr>
									<tr><td><label for="password">Password</label></td><td><input type="text" name="passwordvm" id="passwordedvm" value="" class="text ui-widget-content ui-corner-all" /></td></tr>
									<tr><td><label for="fullname">Owner</label></td><td><input type="text" name="fullnamevm" id="fullnameedvm" value="" class="text ui-widget-content ui-corner-all" /></td></tr>
									<tr><td><label for="email">Email</label></td><td><input type="text" name="emailvm" id="emailedvm" value="" class="text ui-widget-content ui-corner-all" /></td></tr>
									<tr><td><label for="callback">Callback Context</label></td><td><input type="text" name="callbackedvm" id="callbackedvm" value="" class="text ui-widget-content ui-corner-all" /></td></tr>
								</table>					
							</form>
						</div>
						<!-- End form to edit peers -->

	
						<div id="dialog-deletevm" Title="Alert">
							<p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Delete this Voicemail?</p>
                                		</div>

						<?php
							include "helpers/loginsql.php";
							$peern=$_SESSION['peer'];
							$sql="SELECT uniqueid,customer_id,mailbox,password,fullname,email,callback from voicemail_users where customer_id=$peern";
							$result = mysql_query($sql)or die(mysql_error());
					
					
        						echo "<table class='table table-stripped table-condensed'>
						        <thead>
							<tr class='ui-widget-header '>
							<th>Voicemail</th>
							<th>Mailbox</th>
							<th>Password</th>
						        <th>Owner</th>
						        <th>email</th>
						        <th>callback</th>
						        <th>Edit</th>
						        </tr>
							</thead>
							<tbody>";

							while($row = mysql_fetch_array($result)){
	   							echo "<tr id=". $row['uniqueid'] .">";
								echo "<td>" . $row['customer_id'] . "</td>";
								echo "<td>" . $row['mailbox'] . "</td>";
								echo "<td>" . $row['password'] . "</td>";
								echo "<td>" . $row['fullname'] . "</td>";
								echo "<td>" . $row['email'] . "</td>";
								echo "<td>" . $row['callback'] . "</td>";
								echo "<td><button class='edidvm btn btn-info' value=". $row['uniqueid'] ."><i class='icon-zoom icon-edit'></i>Edit</button></td>";
							        //echo "<td><div class='delebtn'><button class='delidvm'  value=". $row['uniqueid'] .">Delete</button></div></td>";  			
							}
							echo "</tr>";
							echo "</tbody></table></div>";
						?>
					</div><!-- END VM SETTINGS -->


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
	<script src="../js/jquery-1.7.2.min.js"></script>
	<!-- jQuery UI -->
	<script src="../js/jquery-ui-1.8.21.custom.min.js"></script>
	<!-- transition / effect library -->
	<script src="../js/bootstrap-transition.js"></script>
	<!-- alert enhancer library -->
	<script src="../js/bootstrap-alert.js"></script>
	<!-- modal / dialog library -->
	<script src="../js/bootstrap-modal.js"></script>
	<!-- custom dropdown library -->
	<script src="../js/bootstrap-dropdown.js"></script>
	<!-- scrolspy library -->
	<script src="../js/bootstrap-scrollspy.js"></script>
	<!-- library for creating tabs -->
	<script src="../js/bootstrap-tab.js"></script>
	<!-- library for advanced tooltip -->
	<script src="../js/bootstrap-tooltip.js"></script>
	<!-- popover effect library -->
	<script src="../js/bootstrap-popover.js"></script>
	<!-- button enhancer library -->
	<script src="../js/bootstrap-button.js"></script>
	<!-- accordion library (optional, not used in demo) -->
	<script src="../js/bootstrap-collapse.js"></script>
	<!-- carousel slideshow library (optional, not used in demo) -->
	<script src="../js/bootstrap-carousel.js"></script>
	<!-- autocomplete library -->
	<script src="../js/bootstrap-typeahead.js"></script>
	<!-- tour library -->
	<script src="../js/bootstrap-tour.js"></script>
	<!-- library for cookie management -->
	<script src="../js/jquery.cookie.js"></script>
	<!-- calander plugin -->
	<script src='../js/fullcalendar.min.js'></script>
	<!-- data table plugin -->
	<script src='../js/jquery.dataTables.min.js'></script>

	<!-- chart libraries start -->
	<script src="../js/excanvas.js"></script>
	<script src="../js/jquery.flot.min.js"></script>
	<script src="../js/jquery.flot.pie.min.js"></script>
	<script src="../js/jquery.flot.stack.js"></script>
	<script src="../js/jquery.flot.resize.min.js"></script>
	<!-- chart libraries end -->

	<!-- select or dropdown enhancer -->
	<script src="../js/jquery.chosen.min.js"></script>
	<!-- checkbox, radio, and file input styler -->
	<script src="../js/jquery.uniform.min.js"></script>
	<!-- plugin for gallery image view -->
	<script src="../js/jquery.colorbox.min.js"></script>
	<!-- rich text editor library -->
	<script src="../js/jquery.cleditor.min.js"></script>
	<!-- notification plugin -->
	<script src="../js/jquery.noty.js"></script>
	<!-- file manager library -->
	<script src="../js/jquery.elfinder.min.js"></script>
	<!-- star rating plugin -->
	<script src="../js/jquery.raty.min.js"></script>
	<!-- for iOS style toggle switch -->
	<script src="../js/jquery.iphone.toggle.js"></script>
	<!-- autogrowing textarea plugin -->
	<script src="../js/jquery.autogrow-textarea.js"></script>
	<!-- multiple file upload plugin -->
	<script src="../js/jquery.uploadify-3.1.min.js"></script>
	<!-- history.js for cross-browser state change on ajax -->
	<script src="../js/jquery.history.js"></script>
	<!-- application script for Charisma demo -->
	<script src="../js/charisma.js"></script>
	<script src="js/user.js"></script>

	<!-- SIPMl5 API for WEBRTC calls -->
        <script src="../js/SIPml-api.js"></script>
	<!--<script src="../js/click2call.js"></script>-->
	<script src="js/mywebp.js"></script>
	

	 <!-- Audios -->
    <audio id="audio_remote" autoplay="autoplay" />
    <audio id="ringtone" loop src="sounds/ringtone.wav" />
    <audio id="ringbacktone" loop src="sounds/ringbacktone.wav" />
    <audio id="dtmfTone" src="sounds/dtmf.wav" />

			
</body>
</html>

