$(document).ready(function(){

var range1=$("#range1"),
range2=$("#range2"),
filter2=$("#filter2");
//table sip peer id
var myid,
   myidvm,	
   myidmeet,	
   myidiax,
    myidpin;	
//table sip peer id edit
var myedid,
   myedidvm,
   myedidmeet,
   myedidiax,
   myedidpin;

/***************************************************  variables sip *************************************************/	
// variables for addding peers
var extension=$("#extension"),
	secret=$("#secret"),
	callerid=$("#callerid"),
	context=$("#context"),
	accountcode=$("#accountcode"),
	mailbox=$("#mailbox"),
	email=$("#email"),
	nat=$("#nat"),
	host=$("#host"),
	callgroup=$("#callgroup"),
	pickupgroup=$("#pickupgroup"),
	qualify=$("#qualify"),
	allow=$("#allow"),
	videosupport=$("#videosupport"),
	type=$("#type");


// variables for edit peers
	var extensioned=$("#extensioned"),
	secreted=$("#secreted"),
	callerided=$("#callerided"),
	contexted=$("#contexted"),
	accountcodeed=$("#accountcodeed"),
	mailboxed=$("#mailboxed"),
	emailed=$("#emailed"),
	nated=$("#nated"),
	hosted=$("#hosted"),
	callgrouped=$("#callgrouped"),
	pickupgrouped=$("#pickupgrouped"),
	qualifyed=$("#qualifyed"),
	allowed=$("#allowed"),
	videosupported=$("#videosupported"),
	typeed=$("#typeed");
/************************************************************************************************************************/
/********************************************* fin variables sip ********************************************************/


/****************************************** variables queue ************************************************************/
/************************************************************************************************************************/

var quename=$("#quename"),
	quemusic=$("#quemusic"),
	queannounce=$("#queannounce"),
	quecontext=$("#quecontext"),
	quetimeout=$("#quetimeout"),
	quemonitortype=$("#quemonitotype"),
	quemonitorformat=$("#quemonitorformat"),
	queannouncefreq=$("#queannouncefreq"),
	queannouncehold=$("#queannouncehold"),
	queannounceperi=$("#queannounceperi"),
	queannounceperifreq=$("#queannounceperifreq"),
	queretry=$("#queretry"),
	queringinuse=$("#queringinuse"),
	queautofill=$("#queautofill"),
	queautopause=$("#queautopause"),
	quesetvar=$("#quesetvar"),
	quewrap=$("#quewrap"),
	quemaxlen=$("#quemaxlen"),
	queservicelevel=$("#queservicelevel"),
	questrategy=$("#questrategy"),
	quejoinempty=$("#quejoinempty"),
	queleaveempty=$("#queleaveempty"),
	quereporthold=$("#quereporthold"),
	queweight=$("#queweight");

var quenameed=$("#quenameed"),
	quemusiced=$("#quemusiced"),
	queannounceed=$("#queannounceed"),
	quecontexted=$("#quecontexted"),
	quetimeouted=$("#quetimeouted"),
	quemonitortypeed=$("#quemonitotypeed"),
	quemonitorformated=$("#quemonitorformated"),
	queannouncefreqed=$("#queannouncefreqed"),
	queannounceholded=$("#queannounceholded"),
	queannounceperied=$("#queannounceperied"),
	queannounceperifreqed=$("#queannounceperifreqed"),
	queretryed=$("#queretryed"),
	queringinuseed=$("#queringinuseed"),
	queautofilled=$("#queautofilled"),
	queautopauseed=$("#queautopauseed"),
	quesetvared=$("#quesetvared"),
	quewraped=$("#quewraped"),
	quemaxlened=$("#quemaxlened"),
	queserviceleveled=$("#queserviceleveled"),
	questrategyed=$("#questrategyed"),
	quejoinemptyed=$("#quejoinemptyed"),
	queleaveemptyed=$("#queleaveemptyed"),
	quereportholded=$("#quereportholded"),
	queweighted=$("#queweighted");
/***********************************************************************************************************************/
/************************************************ fin variables queue ***********************************************/



/************************************************************** variables iax *********************************************/
// variables for addding iax peers
	var iextension=$("#iextension"),
	isecret=$("#isecret"),
	icallerid=$("#icallerid"),
	icontext=$("#icontext"),
	imailbox=$("#imailbox"),
	iemail=$("#iemail"),
	inat=$("#inat"),
	ihost=$("#ihost"),
	icallgroup=$("#icallgroup"),
	ipickupgroup=$("#ipickupgroup"),
	iqualify=$("#iqualify"),
	iallow=$("#iallow"),
	ivideosupport=$("#ivideosupport"),
	irequirecalltoken=$("#irequirecalltoken"),
	itype=$("#itype");

// variables for edit iaxpeers
	var iextensioned=$("#iextensioned"),
	isecreted=$("#isecreted"),
	icallerided=$("#icallerided"),
	icontexted=$("#icontexted"),
	imailboxed=$("#imailboxed"),
	iemailed=$("#iemailed"),
	inated=$("#inated"),
	ihosted=$("#ihosted"),
	icallgrouped=$("#icallgrouped"),
	ipickupgrouped=$("#ipickupgrouped"),
	iqualifyed=$("#iqualifyed"),
	iallowed=$("#iallowed"),
	ivideosupported=$("#ivideosupported"),
	itypeed=$("#itypeed");
	irequirecalltokened=$("#irequirecalltokened");
/********************************************************************************************************************/
/******************************************************** fin variables iax ******************************************/



/************************************************************** variables vm *********************************************/
// variables for addding vm box
	var customeridvm=$("#customeridvm"),
	mailboxvm=$("#mailboxvm"),
	passwordvm=$("#passwordvm"),
	fullnamevm=$("#fullnamevm"),
	emailvm=$("#emailvm"),
	callbackvm=$("#callbackvm");


// var to edir vm box
	var customeridedvm=$("#customeridedvm"),
	mailboxedvm=$("#mailboxedvm"),
	passwordedvm=$("#passwordedvm"),
	fullnameedvm=$("#fullnameedvm"),
	emailedvm=$("#emailedvm"),
	callbackedvm=$("#callbackedvm");
/********************************************************************************************************************/
/******************************************************** fin variables vm  ******************************************/


/************************************************************** variables meetme *********************************************/
// variables for adding meetme rooms
	var confno=$("#confno"),
	pin=$("#pin"),
	adminpin=$("#adminpin"),
	members=$("#members"),
	maxusers=$("#maxusers");
	var confnoed=$("#confnoed"),
	pined=$("#pined"),
	adminpined=$("#adminpined"),
	membersed=$("#membersed"),
	maxusersed=$("#maxusersed");
/********************************************************************************************************************/
/******************************************************** fin variables meetme  ******************************************/



/************************************************************** variables pinset  *********************************************/
// variables for adding meetme rooms
	var namepin=$("#namepin"),
	pinpin=$("#pinpin"),
	localpin=$("#localpin"),
	ldintpin=$("#ldintpin"),
	cellpin=$("#cellpin"),
	ldnacpin=$("#ldnacpin");

var namepined=$("#namepined"),
	pinpined=$("#pinpined"),
	localpined=$("#localpined"),
	ldintpined=$("#ldintpined"),
	cellpined=$("#cellpined"),
	ldnacpined=$("#ldnacpined");
/********************************************************************************************************************/
/******************************************************** fin variables pinset  ******************************************/


/******************************************************* variables agent *********************************************/
var agent_id=$("#agent_id"),
	agent_name=$("#agent_name"),
	agent_pass=$("#agent_pass");
	var agent_ided=$("#agent_ided"),
	agent_nameed=$("#agent_nameed"),
	agent_passed=$("#agent_passed");
/**********************************************************************************************************************/

/************************************************ mensaje **********************************************/
//dialog modal1				
	$( "#dialog-message" ).dialog({
		autoOpen: false,
		modal: true,
		resizable: false,
		height: 150,
		width: 200,
		buttons: {
			Ok: function() {
			$( this ).dialog( "close" );
			}
	}

	});
//dialog modal2				
	$( "#dialog-message2" ).dialog({
		autoOpen: false,
		modal: true,
		resizable: false,
		height: 150,
		width: 200,
		buttons: {
			Ok: function() {
			$( this ).dialog( "close" );
			}
	}

	});
//dialog modal3
	$( "#dialog-message3" ).dialog({
		autoOpen: false,
		modal: true,
		resizable: false,
		height: 150,
		width: 200,
		buttons: {
			Ok: function() {
			$( this ).dialog( "close" );
			}
	}

	});
//dialog modal4
	$( "#dialog-messagedd" ).dialog({
		autoOpen: false,
		modal: true,
		resizable: false,
		height: 150,
		width: 200,
		buttons: {
			Ok: function() {
			$( this ).dialog( "close" );
			}
	}

	});


/**************************************************************************************************************/

/****************************************acciones Dialplan, DAHDI, SIP, IAX *************************************/
//reload dialplan
 $("#reloaddp").click(function(){
 	$.ajax({
        	type: "GET",
                url: "helpers/reload.php?id=dp",
                success: function(){
	                $('#dialog-message').dialog('open');
               	}
        });
       return false;
});

//reload iax2 file
$("#reloadiax").click(function(){
	$.ajax({
	        type: "GET",
                url: "helpers/reload.php?id=iax",
                success: function(){
                       	$('#dialog-message2').dialog('open');
                }
         });
        return false;
});

//reload sip file
$("#reloadsip").click(function(){
	$.ajax({
	        type: "GET",
                url: "helpers/reload.php?id=sip",
                success: function(){
                       	$('#dialog-message3').dialog('open');
                }
         });
        return false;
});

//reload dahdi file
$("#reloaddahdi").click(function(){
	$.ajax({
	        type: "GET",
                url: "helpers/reload.php?id=dahdi",
                success: function(){
                       	$('#dialog-messagedd').dialog('open');
                }
         });
        return false;
});

/************************************** fin acciones archivos ************************************************/


/*************************************************** acciones sip ******************************************************/
	//dialog delete
                        $("#dialog-delete").dialog({
                                autoOpen: false,
				resizable: false,
                                height: 150,
                                width: 200,
                                modal: true,
				show: "blind",
				hide: "explode",
				buttons: {
                                       "Delete": function() {
                                        	var myid2 = "id=" + myid;
		                                $.ajax({
                	                        	type: "GET",
                        	                	url: "helpers/delsip.php",
                                	        	data: myid2,
							success: function(){
								$('#'+ myid).remove();
								window.top.location="sip.php";
                        	                                window.top.location.reload();

							}
                        			});
					$( this ).dialog( "close" );			
					},
                                        Cancel: function() {
                                                $( this ).dialog( "close" );
                                        }
                                }
                        });


	//action edit sip	
			$(".edid").click(function() {
				myedid = $(this).val();
				$.ajax({
					type: "GET",
					url: "helpers/getsip.php",
					data: {id: myedid},
					dataType: "json",
					success: function(data){
					 	extensioned.val(data.name);
					 	secreted.val(data.secret);
					 	callerided.val(data.callerid);
					 	contexted.val(data.context);
						accountcodeed.val(data.account);
					 	mailboxed.val(data.mailbox);
					 	//emailed.val(data.name);
					 	typeed.val(data.type);
					 	hosted.val(data.host);
					 	callgrouped.val(data.callgroup);
					 	pickupgrouped.val(data.pickupgroup);
					 	qualifyed.val(data.qualify);
					 	allowed.val(data.allow);
					 	videosupported.val(data.videosupport);
					 	nated.val(data.nat);			
						$("#editpined").val(data.editpin);
						$("#permited").val(data.permit);
						$("#denyed").val(data.deny);
						$("#transported").val(data.transport);
						$("#dtmfmodeed").val(data.dtmfmode);
						$("#directmediaed").val(data.directmedia);
						$("#encryptioned").val(data.encryption); 

					}
				});
		

			$("#dialog-form2").dialog("open");
       			return false;
			});



	//dialog form edit sip
		$("#dialog-form2").dialog({
			autoOpen: false,
			resizable: false,
			height: 485,
			width: 350,
			modal: true,
				show: "blind",
				hide: "explode",
			buttons: {
				"Update": function() {
					$.ajax({
	                                        type: "GET",
                                                 url: "helpers/editsip.php",
                                                 data:{id: myedid, extension: extensioned.val(), secret: secreted.val(), callerid: callerided.val(), context: contexted.val(), mailbox: mailboxed.val(),  nat: nated.val(), host: hosted.val(), callgroup: callgrouped.val(), pickupgroup: pickupgrouped.val(), qualify: qualifyed.val(), allow: allowed.val(), videosupport: videosupported.val(), type: typeed.val(), account: accountcodeed.val(), editpin: $("#editpined").val(),permit:$("#permited").val(),deny: $("#denyed").val(),transport:$("#transported").val(),dtmfmode:$("#dtmfmodeed").val(),directmedia:$("#directmediaed").val(),encryption:$("#encryptioned").val(),  qualify: $("#qualifyed").val()}, 

                                                 success: function(){
                                                       	window.top.location.reload();

                                                 }

                                         });

                                        $( this ).dialog( "close" );	
					},
					Cancel: function() {
					$( this ).dialog( "close" );
					}
				}
			});			


//action create user
	$("#addpeer").click(function() {
		$("#dialog-form").dialog("open");
			return false;
		});

//action delete sip	
	$(".delid").click(function() {
		myid = $(this).val();
		$("#dialog-delete").dialog("open");
		return false;
	});


$("#extension").change(function(){
		var txt = $("#extension").val();
                $('#secret').attr("value","");
                $('#secret').attr("value","addyourpass"+txt);
                $('#callerid').attr("value","");
                $('#callerid').attr("value","\"name\"<"+txt+">");
                $('#mailbox').attr("value","");
                $('#mailbox').attr("value",txt);
                $('#host').attr("value","dynamic");
                $('#type').attr("value","friend");
	});


	$("#videosupport").change(function(){
		var opt= $("#videosupport").val();
		if (opt=='yes'){
			$('#allow').attr("value","");
			$('#allow').attr("value","ulaw;alaw;h264;h263");
		}else if(opt=='no'){
			$('#allow').attr("value","");
			$('#allow').attr("value","ulaw;alaw");
		}
	});


	$("#videosupported").change(function(){
		var opt= $("#videosupported").val();
		if (opt=='yes'){
			$('#allowed').attr("value","");
			$('#allowed').attr("value","ulaw;alaw;h264;h263");
		}else if(opt=='no'){
			$('#allowed').attr("value","");
			$('#allowed').attr("value","ulaw;alaw");
		}
	});

//add sip by submit
	$("#subsip").click(function() {
		$.ajax({
	                type: "GET",
                        url: "helpers/addsip.php",
                        data:{extension: extension.val(), secret: secret.val(), callerid: callerid.val(), context: context.val(), mailbox: mailbox.val(), email: email.val(), nat: nat.val(), host: host.val(), callgroup: callgroup.val(), pickupgroup: pickupgroup.val(), qualify: qualify.val(), allow: allow.val(), videosupport: videosupport.val(), type: type.val(), account: accountcode.val(), editpin: $("#editpin").val(), permit:$("#permit").val(),deny: $("#deny").val(),transport:$("#transport").val(),dtmfmode:$("#dtmfmode").val(),directmedia:$("#directmedia").val(),encryption:$("#encryption").val(), qualify: $("#qualify").val()}, 
        	        success: function(data){
				if ( data == 0 ){
					alert(" All Data is Required !!!!");
				}else{
                               		//window.top.location="main.php#sippeer";
					window.top.location.reload();
				}
                        }

		});
	});


//add sip peer tls submit
	$("#psubtls").click(function() {
		$('#loadingp').html("<div align=center><br><br><img  src='img/cert-loader.gif'/></div>");
		$.ajax({
	                type: "GET",
                        url: "helpers/gentls.php",
                        data:{type: 'peer', dns: $("#peerdns").val(), name: $("#peerco").val(), client: $("#peername").val(), pwd: $("#peerpwd").val()}, 
        	        success: function(data){
				if ( data == 0 ){
					$('#loadingp').html("");
					alert(" All Data is Required !!!!");
				}else{
                               		//window.top.location="main.php#sippeer";
					window.top.location.reload();
				}
                        }

		});
	});


//add asterisk tls submit
	$("#asubtls").click(function() {
		$('#loading').html("<div align=center><br><br><img  src='img/cert-loader.gif'/></div>");
		$.ajax({
	                type: "GET",
                        url: "helpers/gentls.php",
                        data:{type: 'server', dns: $("#astdns").val(), name: $("#astco").val(),  pwd: $("#astpwd").val()}, 
        	        success: function(data){
				if ( data == 0 ){
					$('#loading').html("");
					alert(" All Data is Required !!!!");
				}else{
                               		//window.top.location="main.php#sippeer";
					window.top.location.reload();
				}
                        }

		});
	});



// get asterisk application help
$("#astapps").live('change',function() {
 	var filter=$(this).val();
	$.ajax({
	        type: "GET",
                url: "helpers/astappinfo.php",
                data: { app: filter },
                success: function(data){
        	        $('#appsinfo').html('');
                        $('#appsinfo').html(data);
                }
        });		
});

// get asterisk function help
$("#astfunc").live('change',function() {
 	var filter=$(this).val();
	$.ajax({
	        type: "GET",
                url: "helpers/astfuncinfo.php",
                data: { func: filter },
                success: function(data){
        	        $('#funcinfo').html('');
                        $('#funcinfo').html(data);
                }
        });		
});

/*****************************************************************************************************************/
/*********************************************************** fin seccion sip *************************************/


/***************************************************** seccion acciones cdr ***************************************/
/****************************************************************************************************************/

		//Datepickers
			$( ".datepicker").datepicker({ 
				dateFormat: 'yy-mm-dd',
				showAnim: 'drop'
			 });

		//search button
                        $("input:submit, a, button",".searchbtn").button({
                                icons: { primary: "ui-icon-search"	}
                        });

		//download button
                        $("input:submit, a, button",".downbtn").button({
                                icons: { primary: "ui-icon-arrowthickstop-1-s"	}
                        });

		// CDR Filter
			$( "#filterslct" ).change(function() {
			 	var filter=$( this ).val();
				$.ajax({
                                     type: "GET",
                                     url: "helpers/filter.php",
                                     data: { filter: filter },
                                        success: function(data){
                                                $('#byfilter').html('');
                                                $('#byfilter').html(data);
                                                /*for (var i in data) {
                                                        $('#rescdr').append(data[i]);
                                                }*/
                                        }
                                });		
			});

		//search cdr
                        $("#lookcdr").click(function(){
				$('#rescdr').html('');
                                $('#rescdr').html("<div align=center><br><br><img  src='img/ajax-loaders/ajax-loader-1.gif'/></div>");
                                $.ajax({
                                     type: "GET",
                                     url: "helpers/cdrr.php",
				     data: { range1: range1.val(), range2: range2.val(), filter1: $('#filterslct').val(), filter2: $('#filter2').val() },
                                        success: function(data){
		                                $('#rescdr').html("<div align=center><br><br><img  src='ajax-loader.gif'/></div>");
						$('#rescdr').html('');
						$('#rescdr').html(data);					
						$('#dwlink').attr("href","helpers/down.php?range1="+range1.val()+"&range2="+range2.val()+"&filter1="+$('#filterslct').val()+"&filter2="+$('#filter2').val());                                                
                                        }
				});
			});
/************************************************** fin acciones cdr *********************************************/
/*******************************************************************************************************************/


/************************************************** seccion acciones pinset ***************************************/
/******************************************************************************************************************/
//add pin by submit
	$("#subpin").click(function() {
		$.ajax({
	                type: "GET",
                        url: "helpers/addpin.php",
                        data:{namepin: namepin.val(), pinpin: pinpin.val(), localpin: localpin.val(), ldintpin: ldintpin.val(), ldnacpin: ldnacpin.val(), cellpin: cellpin.val()}, 
                        success: function(data){
				if ( data == 0 ){
                                       	alert(" ALL Data Required !!!!");
                               	}else{
	                               	window.top.location="pinset.php";
					window.top.location.reload();
				}
                        }
               });
	});


	//dialog form add pinset
			$("#dialog-formpin").dialog({
				autoOpen: false,
				resizable: false,
				height: 285,
				width: 350,
				show: "blind",
				hide: "explode",
				modal: true,
				buttons: {
					"Create": function() {						
							$.ajax({
                                                        type: "GET",
                                                        url: "helpers/addpin.php",
                                                        data:{namepin: namepin.val(), pinpin: pinpin.val(), localpin: localpin.val(), ldintpin: ldintpin.val(), ldnacpin: ldnacpin.val(), cellpin: cellpin.val()}, 
                                                        success: function(data){
								if ( data == 0 ){
                                                                       	alert(" ALL Data Required !!!!");
                                                               	}else{
	                                                        	window.top.location="pinset.php";
									window.top.location.reload();
								}
                                                        }
                                                });
                                        $( this ).dialog( "close" );	
					},			
					Cancel: function() {
						$( this ).dialog( "close" );
					}
				}
			});			

		//dialog delete pinset
                        $("#dialog-deletepin").dialog({
                                autoOpen: false,
				resizable: false,
                                height: 150,
                                width: 200,
                                modal: true,
				show: "blind",
				hide: "explode",
				buttons: {
                                        "Delete": function() {                                        	
		                                $.ajax({
                	                        	type: "GET",
                        	                	url: "helpers/delpin.php",
                                	        	data: {id: myidpin},
							success: function(){
							$('#'+ myidpin).remove();
                                                 	window.top.location="pinset.php";
							window.top.location.reload();
							
							}
                        			});
					$( this ).dialog( "close" );					
					},
                                        Cancel: function() {
                                                $( this ).dialog( "close" );
                                        }
                                }
                        });



		//action edit pin	
			$(".edidpin").click(function() {
				myedidpin = $(this).val();
				$.ajax({
					type: "GET",
					url: "helpers/getpin.php",
					data: {id: myedidpin},
					dataType: "json",
					success: function(data){					 	
						namepined.val(data.namepin);
						pinpined.val(data.pinpin);
						localpined.val(data.localpin);
						ldintpined.val(data.ldintpin);
						ldnacpined.val(data.ldnacpin);
						cellpined.val(data.cellpin);
					}
				});

	//duda
		$("#dialog-form2pin").dialog("open");
       			return false;
		});

		//dialog form edit pin
			$("#dialog-form2pin").dialog({
				autoOpen: false,
				resizable: false,
				height: 400,
				width: 350,
				modal: true,
				show: "blind",
				hide: "explode",
				buttons: {
					"Update": function() {
						$.ajax({
                                                        type: "GET",
                                                        url: "helpers/editpin.php",
							 data:{id: myedidpin, namepined: namepined.val(), pinpined: pinpined.val(), localpined: localpined.val(), ldintpined: ldintpined.val(), ldnacpined: ldnacpined.val(), cellpined: cellpined.val()}, 
                                                        success: function(){
								window.top.location="pinset.php";
                                                        	window.top.location.reload();
                                                        }
                                                });
                                        $( this ).dialog( "close" );	
					},			
					Cancel: function() {
						$( this ).dialog( "close" );
					}
				}
			});			


		//action create new pin
			$("#addpeerpin").click(function() {
				$("#dialog-formpin").dialog("open");
				return false;
			});

		//action delete pin	
			$(".delidpin").click(function() {
				myidpin = $(this).val();
				$("#dialog-deletepin").dialog("open");
       			return false;
			});
/************************************************** fin seccion acciones pinset *********************************/


/******************************************************************************************************************/
/******************************************** seccion acciones queues *********************************************/


/*************************************************** seccion acciones Agentes ***************************************/

/***************************************************************************************************************/

			//dialog form add pinset

			$("#dialog-formagent").dialog({

				autoOpen: false,

				resizable: false,

				height: 285,

				width: 350,

				modal: true,

				buttons: {

					"Create": function() {

						

							$.ajax({

                                                        type: "GET",

                                                        url: "helpers/addagent.php",

                                                        data:{agent_id: agent_id.val(), agent_name: agent_name.val(), agent_pass: agent_pass.val()}, 

                                                        success: function(data){

								if ( data == 0 ){

                                                                       	alert(" ALL Data Required !!!!");

                                                               	}else{

	                                                        	window.top.location="main.php#queues";

									window.top.location.reload();

								}

                                                        }

                                                });

                                        $( this ).dialog( "close" );	

					},

				

					Cancel: function() {

						$( this ).dialog( "close" );

					}





				}

			});			





			//dialog delete pinset

                        $("#dialog-deleteagent").dialog({

                                autoOpen: false,

				resizable: false,

                                height: 150,

                                width: 200,

                                modal: true,

				buttons: {

                                        "Delete": function() {

                                        	

		                                $.ajax({

                	                        	type: "GET",

                        	                	url: "helpers/delagent.php",

                                	        	data: {id: myidagent},

							success: function(){

							$('#'+ myidagent).remove();

							}

                        			});

					$( this ).dialog( "close" );

					

					},



                                        Cancel: function() {

                                                $( this ).dialog( "close" );

                                        }

                                }

                        });





			//action edit agent	

			$(".edidagent").click(function() {

				myedidpin = $(this).val();

				$.ajax({

					type: "GET",

					url: "helpers/getagent.php",

					data: {id: myedidpin},

					dataType: "json",

					success: function(data){

						agent_ided.val(data.agentid);

						agent_nameed.val(data.agentname);

						agent_passed.val(data.agentpass);

	

					}

				});

				

				//duda

				$("#dialog-form2agent").dialog("open");

       					return false;

				});







			//dialog form edit pin

			$("#dialog-form2agent").dialog({

				autoOpen: false,

				resizable: false,

				height: 285,

				width: 350,

				modal: true,

				buttons: {

					"Update": function() {

						

							$.ajax({

                                                        type: "GET",

                                                        url: "helpers/editagent.php",

                                                        data:{agent_id: agent_ided.val(), agent_name: agent_nameed.val(), agent_pass: agent_passed.val()}, 

                                                        success: function(){

								window.top.location="main.php#queues";

                                                        	window.top.location.reload();

                                                        }

                                                });

                                        $( this ).dialog( "close" );	

					},

				

					Cancel: function() {

						$( this ).dialog( "close" );

					}

				}

			});			





			//action create new pin

			$("#addpeeragent").click(function() {

				$("#dialog-formagent").dialog("open");

				return false;

			});







			//action delete pin	

			$(".delidagent").click(function() {
				myidagent = $(this).val();
				$("#dialog-deleteagent").dialog("open");
       			return false;

			});



/*****************************************************************************************************************/

/*********************************************************** fin seccion agentes  *************************************/



/*************************************************** seccion acciones Agentes a colas ***************************************/

/***************************************************************************************************************/



			// Queue show agents

			$("#selqueue").change(function() {
			 	var filter=$( this ).val();
				$.ajax({
                                     type: "GET",
                                     url: "helpers/getagque.php",
                                     data: { filter: $("#selqueue").val() },
                                        success: function(data){
                                                $('#queue-agent').html('');
                                                $('#queue-agent').html(data);
                                        }

                                });
			});




			//dialog form add pinset

			$("#dialog-formadagqu").dialog({

				autoOpen: false,

				resizable: false,

				height: 285,

				width: 350,

				modal: true,

				buttons: {

					"Create": function() {

						

							$.ajax({

                                                        type: "GET",

                                                        url: "helpers/adagque.php",

                                                        data:{agent_id: $("#selagent").val(), agent_pri: $("#agentpri").val(), queue: $("#selqueue").val()}, 

                                                        success: function(data){

								if ( data == 0 ){

                                                                       	alert(" ALL Data Required !!!!");

                                                               	}else{


									window.top.location.reload();

								}

                                                        }

                                                });

                                        $( this ).dialog( "close" );	

					},

				

					Cancel: function() {

						$( this ).dialog( "close" );

					}





				}

			});			



		var agentdel;


			//dialog delete pinset

                        $("#dialog-deleteagque").dialog({

                                autoOpen: false,
				resizable: false,
                                height: 250,
                                width: 300,
                                modal: true,

				buttons: {

                                        "Delete": function() {
		                                $.ajax({
                	                        	type: "GET",
                        	                	url: "helpers/delagque.php",
                                	        	data: {id: agentdel, queue: $("#selqueue").val()},
							success: function(){

							}

                        			});

					$( this ).dialog( "close" );

					

					},



                                        Cancel: function() {

                                                $( this ).dialog( "close" );

                                        }

                                }

                        });





			//action edit agent	

			$(".edidmmm").click(function() {

				myedidpin = $(this).val();

				$.ajax({

					type: "GET",

					url: "helpers/getagent.php",

					data: {id: myedidpin},

					dataType: "json",

					success: function(data){

						agent_ided.val(data.agentid);

						agent_nameed.val(data.agentname);

						agent_passed.val(data.agentpass);

	

					}

				});

				

				//duda

				$("#dialog-formadagque").dialog("open");

       					return false;

				});







			//dialog form edit pin

			$("#dialog-form2adagque").dialog({

				autoOpen: false,

				resizable: false,

				height: 285,

				width: 350,

				modal: true,

				buttons: {

					"Update": function() {

						

							$.ajax({

                                                        type: "GET",

                                                        url: "helpers/editagent.php",

                                                        data:{agent_id: agent_ided.val(), agent_name: agent_nameed.val(), agent_pass: agent_passed.val()}, 

                                                        success: function(){

								window.top.location="main.php#queues";

                                                        	window.top.location.reload();

                                                        }

                                                });

                                        $( this ).dialog( "close" );	

					},

				

					Cancel: function() {

						$( this ).dialog( "close" );

					}

				}

			});			





			//action create new pin

			$(".edidselque").click(function() {

				$("#dialog-formadagqu").dialog("open");

				return false;

			});






			//action delete pin	

			$(".delidselque").click(function() {
				agentdel = $(this).val();				
				
				$("#dialog-deleteagque").dialog("open");

       			return false;

			});



//drag&drop

$( "#users-contain3 tr" ).draggable({
			appendTo: "body",
			helper: "clone"
		});


$( "#cart ol" ).droppable({
			activeClass: "ui-state-default",
			hoverClass: "ui-state-hover",
			accept: ":not(.ui-sortable-helper)",
			drop: function( event, ui ) {
				$( this ).find( ".placeholder" ).remove();
				$( "<li></li>" ).text( ui.draggable.text() ).appendTo( this );
			}
		}).sortable({
			items: "li:not(.placeholder)",
			sort: function() {
				// gets added unintentionally by droppable interacting with sortable
				// using connectWithSortable fixes this, but doesn't allow you to customize active/hoverClass options
				$( this ).removeClass( "ui-state-default" );
			}
		});



/*****************************************************************************************************************/

/*********************************************************** fin seccion agentes a colas *************************************/



/*************************************************** seccion acciones colas ***************************************/

/***************************************************************************************************************/

			//dialog form add queue

			$("#dialog-formque").dialog({

				autoOpen: false,

				resizable: false,

				height: 500,

				width: 400,

				modal: true,

				buttons: {

					"Create": function() {

						

							$.ajax({

                                                        type: "GET",

                                                        url: "helpers/addqueue.php",
							
							data: {
								quename: 	quename.val(),
								quemusic:	quemusic.val(),
								queannounce:	queannounce.val(),
								quecontext:	quecontext.val(),
								quetimeout:	quetimeout.val(),
								quemonitortype: 	quemonitortype.val(),
								quemonitorformat:	quemonitorformat.val(),
								queannouncefreq:	queannouncefreq.val(),
								queannouncehold:	queannouncehold.val(),
								queannounceperi:	queannounceperi.val(),
								queannounceperifreq:	queannounceperifreq.val(),
								queretry:	queretry.val(),
								queringuse:	queringinuse.val(),
								queautofill:	queautofill.val(),
								queautopause:	queautopause.val(),
								quesetvar:	quesetvar.val(),
								quewrap:	quewrap.val(),
								quemaxlen:	quemaxlen.val(),
								queservicelevel:	queservicelevel.val(),
								questrategy:	questrategy.val(),
								quejoinempty:	quejoinempty.val(),
								queleaveempty:	queleaveempty.val(),
								quereporthold:	quereporthold.val(),
								queweight:	queweight.val()
							},

                                                        success: function(data){

								if ( data == 0 ){

                                                                       	alert(" ALL Data Required !!!!");

                                                               	}else{

	                                                        	window.top.location="main.php#queues";

									window.top.location.reload();

								}

                                                        }

                                                });

                                        $( this ).dialog( "close" );	

					},

				

					Cancel: function() {

						$( this ).dialog( "close" );

					}





				}

			});			





			//dialog delete queue

                        $("#dialog-deleteque").dialog({

                                autoOpen: false,

				resizable: false,

                                height: 150,

                                width: 200,

                                modal: true,

				buttons: {

                                        "Delete": function() {

                                        	

		                                $.ajax({

                	                        	type: "GET",

                        	                	url: "helpers/delqueue.php",

                                	        	data: {id: myidagent},

							success: function(){

							$('#'+ myidagent).remove();

							}

                        			});

					$( this ).dialog( "close" );

					

					},



                                        Cancel: function() {

                                                $( this ).dialog( "close" );

                                        }

                                }

                        });





			//action edit queue

			$(".edidque").click(function() {

				myedidpin = $(this).val();

				$.ajax({

					type: "GET",

					url: "helpers/getqueue.php",

					data: {id: myedidpin},

					dataType: "json",

					success: function(data){

						quenameed.val(data.name);
                                                quemusiced.val(data.music);
                                                queannounceed.val(data.announce);
                                                quecontexted.val(data.context);
                                                quetimeouted.val(data.timeout);
                                                quemonitortypeed.val(data.monitortype);
                                                quemonitorformated.val(data.monitorformat);
                                                queannouncefreqed.val(data.announcefreq);
                                                queannounceholded.val(data.announcehold);
                                                queannounceperied.val(data.announceperi);
                                                queannounceperifreqed.val(data.announceperifreq);
                                                queretryed.val(data.retry);
                                                queringinuseed.val(data.ringinuse);
                                                queautofilled.val(data.autofill);
                                                queautopauseed.val(data.autopause);
                                                quesetvared.val(data.setvar);
                                                quewraped.val(data.wrap);
                                                quemaxlened.val(data.maxlen);
                                                queserviceleveled.val(data.servicelevel);
                                                questrategyed.val(data.strategy);
                                                quejoinemptyed.val(data.joinempty);
                                                queleaveemptyed.val(data.leaveempty);
                                                quereportholded.val(data.reporthold);
                                                queweighted.val(data.weight);	

					}

				});

				

				//duda

				$("#dialog-form2que").dialog("open");

       					return false;

				});







			//dialog form edit pin

			$("#dialog-form2que").dialog({

				autoOpen: false,

				resizable: false,

				height: 500,

				width: 400,

				modal: true,

				buttons: {

					"Update": function() {

						

							$.ajax({

                                                        type: "GET",

                                                        url: "helpers/editqueue.php",

							data:{
								quename: 	quenameed.val(),
								quemusic:	quemusiced.val(),
								queannounce:	queannounceed.val(),
								quecontext:	quecontexted.val(),
								quetimeout:	quetimeouted.val(),
								quemonitortype: 	quemonitortypeed.val(),
								quemonitorformat:	quemonitorformated.val(),
								queannouncefreq:	queannouncefreqed.val(),
								queannouncehold:	queannounceholded.val(),
								queannounceperi:	queannounceperied.val(),
								queannounceperifreq:	queannounceperifreqed.val(),
								queretry:	queretryed.val(),
								queringuse:	queringinuseed.val(),
								queautofill:	queautofilled.val(),
								queautopause:	queautopauseed.val(),
								quesetvar:	quesetvared.val(),
								quewrap:	quewraped.val(),
								quemaxlen:	quemaxlened.val(),
								queservicelevel:	queserviceleveled.val(),
								questrategy:	questrategyed.val(),
								quejoinempty:	quejoinemptyed.val(),
								queleaveempty:	queleaveemptyed.val(),
								quereporthold:	quereportholded.val(),
								queweight:	queweighted.val()
							},



                                                        success: function(){

								window.top.location="main.php#queues";

                                                        	window.top.location.reload();

                                                        }

                                                });

                                        $( this ).dialog( "close" );	

					},

				

					Cancel: function() {

						$( this ).dialog( "close" );

					}

				}

			});			





			//action create new pin

			$("#addpeerque").click(function() {

				$("#dialog-formque").dialog("open");

				return false;

			});







			//action delete pin	

			$(".delidque").click(function() {

				myidagent = $(this).val();

				$("#dialog-deleteque").dialog("open");

       			return false;

			});
/******************************************** fin queues **********************************************************/

/***************************************************seccion acciones meetme *****************************************/
/*****************************************************************************************************************/
//add meetme by submit
	$("#submeet").click(function() {
		$.ajax({
	                type: "GET",
                        url: "helpers/addmeet.php",
                        data:{confno: confno.val(), pin: pin.val(), adminpin: adminpin.val(), maxusers: maxusers.val()}, 
       			success: function(data){
				if ( data == 0 ){
                                       	alert(" Meetme Room number is Required !!!!");
                               	}else{
	                              	window.top.location="meetme.php";
					window.top.location.reload();
				}
                        }
               });
	});


		//dialog form add meetme
			$("#dialog-formmeet").dialog({
				autoOpen: false,
				resizable: false,
				height: 285,
				width: 350,
				show: "blind",
				hide: "explode",
				modal: true,
				buttons: {
					"Create": function() {						
                                        $( this ).dialog( "close" );	
					},
					Cancel: function() {
						$( this ).dialog( "close" );
					}
				}
			});			

		//dialog delete meetme
                        $("#dialog-deletemeet").dialog({
                                autoOpen: false,
				resizable: false,
                                height: 150,
                                width: 200,
                                modal: true,
				show: "blind",
				hide: "explode",
				buttons: {
                                        "Delete": function() {	
		                                $.ajax({
                	                        	type: "GET",
                        	                	url: "helpers/delmeet.php",
                                	        	data: {id: myidmeet},
							success: function(){
							$('#'+ myidmeet).remove();
							window.top.location="main.php#meetme";
                                                        window.top.location.reload();
							}
                        			});
					$( this ).dialog( "close" );
					},
                                        Cancel: function() {
                                                $( this ).dialog( "close" );
                                        }
                                }
                        });


		//action edit meetme	
			$(".edidmeet").click(function() {
				myedidmeet = $(this).val();
				$.ajax({
					type: "GET",
					url: "helpers/getmeet.php",
					data: {id: myedidmeet},
					dataType: "json",
					success: function(data){
					 	confnoed.val(data.confno);
					 	pined.val(data.pin);
					 	adminpined.val(data.adminpin);
					 	membersed.val(data.members);
					 	maxusersed.val(data.maxusers);
					}
				});
	
	//duda
		$("#dialog-form2meet").dialog("open");
       			return false;
		});

		//dialog form edit meet
			$("#dialog-form2meet").dialog({
				autoOpen: false,
				resizable: false,
				height: 285,
				width: 350,
				show: "blind",
				hide: "explode",
				modal: true,
				buttons: {
					"Update": function() {					
							$.ajax({
                                                        type: "GET",
                                                        url: "helpers/editmeet.php",
                                                        data:{id: myedidmeet,confno: confnoed.val(), pin: pined.val(), adminpin: adminpined.val(),  maxusers: maxusersed.val()}, 
                                                        success: function(){
								window.top.location="meetme.php";
                                                        	window.top.location.reload();
                                                        }
                                                });
                                        $( this ).dialog( "close" );	
					},
					Cancel: function() {
						$( this ).dialog( "close" );
					}
				}
			});			

		//action create user meetme
			$("#addpeermeet").click(function() {
				$("#dialog-formmeet").dialog("open");
				return false;
			});

		//action delete vm	
			$(".delidmeet").click(function() {
				myidmeet = $(this).val();
				$("#dialog-deletemeet").dialog("open");
       			return false;
			});



/************************************************* fin acciones meetme *********************************************/

/*************************************************** seccion acciones vm ***************************************/
/***************************************************************************************************************/
//add vm by submit
	$("#subvm").click(function() {
		$.ajax({
 	               type: "GET",
                       url: "helpers/addvm.php",
                       data:{customeridvm: customeridvm.val(), mailboxvm: mailboxvm.val(), passwordvm: passwordvm.val(), fullnamevm: fullnamevm.val(), emailvm: emailvm.val(), callbackvm: callbackvm.val()}, 
                       success: function(data){
				if ( data == 0 ){
                                       	alert(" All Data is Required !!!!");
                               	}else{
	                               	window.top.location="voicemail.php";
					window.top.location.reload();
				}
                 	}
                 });
	});


$("#customeridvm").change(function(){
	var txt = $("#customeridvm").val();
        $('#mailboxvm').attr("value",txt);
});



			//dialog form add vm
			$("#dialog-formvm").dialog({
				autoOpen: false,
				resizable: false,
				height: 285,
				width: 350,
				show: "blind",
				hide: "explode",
				modal: true,
				buttons: {
					"Create": function() {						
							$.ajax({
                                                        type: "GET",
                                                        url: "helpers/addvm.php",
                                                        data:{customeridvm: customeridvm.val(), mailboxvm: mailboxvm.val(), passwordvm: passwordvm.val(), fullnamevm: fullnamevm.val(), emailvm: emailvm.val(), callbackvm: callbackvm.val()}, 
                                                        success: function(data){
								if ( data == 0 ){
                                                                       	alert(" All Data is Required !!!!");
                                                               	}else{
	                                                        	window.top.location="voicemail.php";
									window.top.location.reload();
								}
                                                        }
                                                });
                                        $( this ).dialog( "close" );	
					},			
					Cancel: function() {
						$( this ).dialog( "close" );
					}
				}
			});			

			//dialog delete vm
                        $("#dialog-deletevm").dialog({
                                autoOpen: false,
				resizable: false,
                                height: 150,
                                width: 200,
				show: "blind",
				hide: "explode",
                                modal: true,
				buttons: {
                                        "Delete": function() {                                   
		                                $.ajax({
                	                        	type: "GET",
                        	                	url: "helpers/delvm.php",
                                	        	data: {id: myidvm},
							success: function(){
							$('#'+ myidvm).remove();
                                                       	window.top.location="voicemail.php";
							window.top.location.reload();

							}
                        			});
					$( this ).dialog( "close" );				
					},
                                        Cancel: function() {
                                                $( this ).dialog( "close" );
                                        }
                                }
                        });

		//action edit vm	
			$(".edidvm").click(function() {
				myedidvm = $(this).val();
				$.ajax({
					type: "GET",
					url: "helpers/getvm.php",
					data: {id: myedidvm},
					dataType: "json",
					success: function(data){
					 	customeridedvm.val(data.customerid);
					 	mailboxedvm.val(data.mailbox);
					 	passwordedvm.val(data.password);
					 	fullnameedvm.val(data.fullname);
					 	mailboxed.val(data.mailbox);
					 	emailedvm.val(data.email);
					 	callbackedvm.val(data.callback);
					}
				});

		//duda
		$("#dialog-form2vm").dialog("open");
       			return false;
		});

			//dialog form edit vm
			$("#dialog-form2vm").dialog({
				autoOpen: false,
				resizable: false,
				height: 400,
				width: 350,
				show: "blind",
				hide: "explode",
				modal: true,
				buttons: {
					"Update": function() {
							$.ajax({
                                                        type: "GET",
                                                        url: "helpers/editvm.php",
                                                        data:{id: myedidvm,customeridvm: customeridedvm.val(), mailboxvm: mailboxedvm.val(), passwordvm: passwordedvm.val(), fullnamevm: fullnameedvm.val(), emailvm: emailedvm.val(), callbackvm: callbackedvm.val()}, 
                                                        success: function(){
								window.top.location="voicemail.php";
                                                        	window.top.location.reload();
                                                        }
                                                });
                                        $( this ).dialog( "close" );	
					},
					Cancel: function() {
						$( this ).dialog( "close" );
					}
				}
			});			

			//action create user vm
			$("#addpeervm").click(function() {
				$("#dialog-formvm").dialog("open");
				return false;
			});

			//action delete vm	
			$(".delidvm").click(function() {
				myidvm = $(this).val();
				$("#dialog-deletevm").dialog("open");
       			return false;
			});
/*****************************************************************************************************************/
/*********************************************************** fin seccion vm *************************************/


/************************************************ seccion iax *********************************************************/
/**********************************************************************************************************************/
//add iax by submit
	$("#subiax").click(function() {
		$.ajax({
	                type: "GET",
                        url: "helpers/addiax.php",
                        data:{extension: iextension.val(), secret: isecret.val(), callerid: icallerid.val(), context: icontext.val(), mailbox: imailbox.val(), email: iemail.val(), host: ihost.val(), callgroup: icallgroup.val(), pickupgroup: ipickupgroup.val(), qualify: iqualify.val(), allow: iallow.val(), videosupport: ivideosupport.val(), type: itype.val(), requirecalltoken: irequirecalltoken.val()}, 
                        success: function(data){
				if ( data == 0 ){
                                       	alert(" All Data is Required !!!!");
                              	}else{
					window.top.location="iax.php";
                              		window.top.location.reload();	
				}
                        }
               });
	});


			//action delete iax	
			$(".delidiax").click(function() {
				myidiax = $(this).val();
				$("#dialog-deleteiax").dialog("open");
       			return false;
			});

			//dialog delete iax
                        $("#dialog-deleteiax").dialog({
                                autoOpen: false,
				resizable: false,
                                height: 150,
                                width: 200,
				show: "blind",
				hide: "explode",
                                modal: true,
				buttons: {
                                        "Delete": function() {
                                        	var myid2iax = "id=" + myidiax;
		                                $.ajax({
                	                        	type: "GET",
                        	                	url: "helpers/deliax.php",
                                	        	data: myid2iax,
							success: function(){
							$('#'+ myidiax).remove();
							}
                        			});
					$( this ).dialog( "close" );
					},
                                        Cancel: function() {
                                                $( this ).dialog( "close" );
                                        }
                                }
                        });

			//action edit iax
			$(".edidiax").click(function() {
				myedidiax = $(this).val();
				$.ajax({
					type: "GET",
					url: "helpers/getiax.php",
					data: {id: myedidiax},
					dataType: "json",
					success: function(data){
					 	iextensioned.val(data.name);
					 	isecreted.val(data.secret);
					 	icallerided.val(data.callerid);
					 	icontexted.val(data.context);
					 	imailboxed.val(data.mailbox);
					 	//emailed.val(data.name);
					 	itypeed.val(data.type);
					 	ihosted.val(data.host);
					 	icallgrouped.val(data.callgroup);
					 	ipickupgrouped.val(data.pickupgroup);
					 	iqualifyed.val(data.qualify);
					 	iallowed.val(data.allow);
					 	ivideosupported.val(data.videosupport);
					 	irequirecalltokened.val(data.irequirecalltoken);
					}
				});

				
			$("#dialog-form2iax").dialog("open");
       				return false;
			});


			//dialog form edit iax
			$("#dialog-form2iax").dialog({
				autoOpen: false,
				resizable: false,
				height: 500,
				width: 450,
				show: "blind",
				hide: "explode",
				modal: true,
				buttons: {
					"Update": function() {
							$.ajax({
                                                        type: "GET",
                                                        url: "helpers/editiax.php",
                                                        data:{id: myedidiax, extension: iextensioned.val(), secret: isecreted.val(), callerid: icallerided.val(), context: icontexted.val(), mailbox: imailboxed.val(),  requirecalltoken: irequirecalltokened.val(), host: ihosted.val(), callgroup: icallgrouped.val(), pickupgroup: ipickupgrouped.val(), qualify: iqualifyed.val(), allow: iallowed.val(), videosupport: ivideosupported.val(), type: itypeed.val()}, 
                                                        success: function(){
                                                        	window.top.location="iax.php";
                                                        	window.top.location.reload();
                                                        }
                                                });
                                        $( this ).dialog( "close" );	
					},
					Cancel: function() {
						$( this ).dialog( "close" );
					}
				}
			});			

			//action create user iax
			$("#addpeeriax").click(function() {
				$("#dialog-formiax").dialog("open");
				return false;
			});


			//action reload iax
			$("#reloadiax").click(function(){
				$.ajax({
					type: "GET",
				     	url: "helpers/reload.php?id=iax",
					success: function(){ 
        					$('#dialog-message').dialog('open');
    					}
				});
			return false;
   			});

			$("#iextension").change(function(){
                                        var txt	= $("#iextension").val();
                                       $('#isecret').attr("value","");
                                       $('#isecret').attr("value",txt);
                                       $('#icallerid').attr("value","");
                                       $('#icallerid').attr("value","\"name\"<"+txt+">");
                                       $('#imailbox').attr("value","");
                                       $('#imailbox').attr("value",txt);
                                       $('#ihost').attr("value","dynamic");
                        });



			$("#ivideosupport").change(function(){
				var opt= $("#ivideosupport").val();
				
				if (opt=='yes'){
					$('#iallow').attr("value","");
					$('#iallow').attr("value","ulaw;alaw;h264;h263");
				}else if(opt=='no'){
					$('#iallow').attr("value","");
					$('#iallow').attr("value","ulaw;alaw");
				}
			});


			$("#ivideosupported").change(function(){
				var opt= $("#ivideosupported").val();
				if (opt=='yes'){
					$('#iallowed').attr("value","");
					$('#iallowed').attr("value","ulaw;alaw;h264;h263");
				}else if(opt=='no'){
					$('#iallowed').attr("value","");
					$('#iallowed').attr("value","ulaw;alaw");
				}
			});

/* Get Online IAX Peers */
 function upregiax(){
	$.ajax({
	        type: "GET",
                url: "helpers/getregiax.php",
                data: {1: 1},
                dataType: "json",
	        success: function(res){
        	        $("#regiax").html(res.regiax);
                }
	});
}
setInterval(upregiax, 10000);

/* Get Offline IAX Peers */
function upoffiax(){
	$.ajax({
	        type: "GET",
                url: "helpers/getoffiax.php",
                data: {1: 1},
                dataType: "json",
	        success: function(res){
        	        $("#offiax").html(res.offiax);
                }
	});
}
setInterval(upoffiax, 10000);



/**********************************************************************************************************************/
/************************************************** fin seccion iax ***************************************************/


$(".mydraggable").draggable();

$(".mydroppable").droppable({
	drop: function( event, ui ) {
		var element = ui.draggable;
		$("#gendp").empty();
		$("#dpbox").empty();
		$("#gendp").html("exten => s,1," + element.html());
	}

});

$(".mydroppable").droppable({
	out: function( event, ui ) {
		var element = ui.draggable;
		$("#gendp").empty();
		$("#dpbox").empty();
	}

});


/* Get Online Sip Peers */
 function upregsip(){
	$.ajax({
	        type: "GET",
                url: "helpers/getregsip.php",
                data: {1: 1},
                dataType: "json",
	        success: function(res){
        	        $("#regsip").html(res.regsip);
                }
	});
}
setInterval(upregsip, 10000);

/* Get Offline Sip Peers */
function upoffsip(){
	$.ajax({
	        type: "GET",
                url: "helpers/getoffsip.php",
                data: {1: 1},
                dataType: "json",
	        success: function(res){
        	        $("#offsip").html(res.offsip);
                }
	});
}
setInterval(upoffsip, 10000);



	//themes, change CSS with JS
	//default theme(CSS) is cerulean, change it if needed
	var current_theme = $.cookie('current_theme')==null ? 'cerulean' :$.cookie('current_theme');
	switch_theme(current_theme);
	
	$('#themes a[data-value="'+current_theme+'"]').find('i').addClass('icon-ok');
				 
	$('#themes a').click(function(e){
		e.preventDefault();
		current_theme=$(this).attr('data-value');
		$.cookie('current_theme',current_theme,{expires:365});
		switch_theme(current_theme);
		$('#themes i').removeClass('icon-ok');
		$(this).find('i').addClass('icon-ok');
	});
	

	
	function switch_theme(theme_name)
	{
		$('#bs-css').attr('href','css/bootstrap-'+theme_name+'.css');
	}
	
	//ajax menu checkbox
	$("#is-ajax").attr('checked','true');
	$('#is-ajax').click(function(e){
		$.cookie('is-ajax',$(this).prop('checked'),{expires:365});
	});
	$('#is-ajax').prop('checked',$.cookie('is-ajax')==='true' ? true : false);
	
	//disbaling some functions for Internet Explorer
	if($.browser.msie)
	{
		$('#is-ajax').prop('checked',false);
		$('#for-is-ajax').hide();
		$('#toggle-fullscreen').hide();
		$('.login-box').find('.input-large').removeClass('span10');
		
	}
	
	
	//highlight current / active link
	$('ul.main-menu li a').each(function(){
		if($($(this))[0].href==String(window.location))
			$(this).parent().addClass('active');
	});
	
	//establish history variables
	var
		History = window.History, // Note: We are using a capital H instead of a lower h
		State = History.getState(),
		$log = $('#log');

	//bind to State Change
	History.Adapter.bind(window,'statechange',function(){ // Note: We are using statechange instead of popstate
		var State = History.getState(); // Note: We are using History.getState() instead of event.state
		$.ajax({
			url:State.url,
			success:function(msg){
				$('#content').html($(msg).find('#content').html());
				$('#loading').remove();
				$('#content').fadeIn();
				docReady();
			}
		});
	});
	
	//ajaxify menus
	$('a.ajax-link').click(function(e){
		if($.browser.msie) e.which=1;
		if(e.which!=1 || !$('#is-ajax').prop('checked') || $(this).parent().hasClass('active')) return;
		e.preventDefault();
		if($('.btn-navbar').is(':visible'))
		{
			$('.btn-navbar').click();
		}
		$('#loading').remove();
		$('#content').fadeOut().parent().append('<div id="loading" class="center">Loading...<div class="center"></div></div>');
		var $clink=$(this);
		History.pushState(null, null, $clink.attr('href'));
		$('ul.main-menu li.active').removeClass('active');
		$clink.parent('li').addClass('active');	
	});
	
	//animating menus on hover
	$('ul.main-menu li:not(.nav-header)').hover(function(){
		$(this).animate({'margin-left':'+=5'},300);
	},
	function(){
		$(this).animate({'margin-left':'-=5'},300);
	});
	
	//other things to do on document ready, seperated for ajax calls
	docReady();
});
		
		
function docReady(){
	//prevent # links from moving to top
	$('a[href="#"][data-top!=true]').click(function(e){
		e.preventDefault();
	});
	
	//rich text editor
	$('.cleditor').cleditor();
	
	//datepicker
	$('.datepicker').datepicker();
	
	//notifications
	$('.noty').click(function(e){
		e.preventDefault();
		var options = $.parseJSON($(this).attr('data-noty-options'));
		noty(options);
	});


	//uniform - styler for checkbox, radio and file input
	$("input:checkbox, input:radio, input:file").not('[data-no-uniform="true"],#uniform-is-ajax').uniform();

	//chosen - improves select
	$('[data-rel="chosen"],[rel="chosen"]').chosen();

	//tabs
	$('#myTab a:first').tab('show');
	$('#myTab a').click(function (e) {
	  e.preventDefault();
	  $(this).tab('show');
	});

	//makes elements soratble, elements that sort need to have id attribute to save the result
	$('.sortable').sortable({
		revert:true,
		cancel:'.btn,.box-content,.nav-header',
		update:function(event,ui){
			//line below gives the ids of elements, you can make ajax call here to save it to the database
			//console.log($(this).sortable('toArray'));
		}
	});

	//slider
	$('.slider').slider({range:true,values:[10,65]});

	//tooltip
	$('[rel="tooltip"],[data-rel="tooltip"]').tooltip({"placement":"bottom",delay: { show: 400, hide: 200 }});

	//auto grow textarea
	$('textarea.autogrow').autogrow();

	//popover
	$('[rel="popover"],[data-rel="popover"]').popover();

	//file manager
	var elf = $('.file-manager').elfinder({
		url : 'misc/elfinder-connector/connector.php'  // connector URL (REQUIRED)
	}).elfinder('instance');


	//cert manager
	var elf2 = $('.cert-manager').elfinder({
		url : 'misc/elfinder-connector/connector2.php'  // connector URL (REQUIRED)
	}).elfinder('instance');


	//iOS / iPhone style toggle switch
	$('.iphone-toggle').iphoneStyle();

	//star rating
	$('.raty').raty({
		score : 4 //default stars
	});

	//uploadify - multiple uploads
	$('#file_upload').uploadify({
		'swf'      : 'misc/uploadify.swf',
		'uploader' : 'misc/uploadify.php'
		// Put your options here
	});

	//gallery controlls container animation
	$('ul.gallery li').hover(function(){
		$('img',this).fadeToggle(1000);
		$(this).find('.gallery-controls').remove();
		$(this).append('<div class="well gallery-controls">'+
							'<p><a href="#" class="gallery-edit btn"><i class="icon-edit"></i></a> <a href="#" class="gallery-delete btn"><i class="icon-remove"></i></a></p>'+
						'</div>');
		$(this).find('.gallery-controls').stop().animate({'margin-top':'-1'},400,'easeInQuint');
	},function(){
		$('img',this).fadeToggle(1000);
		$(this).find('.gallery-controls').stop().animate({'margin-top':'-30'},200,'easeInQuint',function(){
				$(this).remove();
		});
	});


	//gallery image controls example
	//gallery delete
	$('.thumbnails').on('click','.gallery-delete',function(e){
		e.preventDefault();
		//get image id
		//alert($(this).parents('.thumbnail').attr('id'));
		$(this).parents('.thumbnail').fadeOut();
	});
	//gallery edit
	$('.thumbnails').on('click','.gallery-edit',function(e){
		e.preventDefault();
		//get image id
		//alert($(this).parents('.thumbnail').attr('id'));
	});

	//gallery colorbox
	$('.thumbnail a').colorbox({rel:'thumbnail a', transition:"elastic", maxWidth:"95%", maxHeight:"95%"});

	//gallery fullscreen
	$('#toggle-fullscreen').button().click(function () {
		var button = $(this), root = document.documentElement;
		if (!button.hasClass('active')) {
			$('#thumbnails').addClass('modal-fullscreen');
			if (root.webkitRequestFullScreen) {
				root.webkitRequestFullScreen(
					window.Element.ALLOW_KEYBOARD_INPUT
				);
			} else if (root.mozRequestFullScreen) {
				root.mozRequestFullScreen();
			}
		} else {
			$('#thumbnails').removeClass('modal-fullscreen');
			(document.webkitCancelFullScreen ||
				document.mozCancelFullScreen ||
				$.noop).apply(document);
		}
	});

	//tour
	if($('.tour').length && typeof(tour)=='undefined')
	{
		var tour = new Tour();
		tour.addStep({
			element: ".span10:first", /* html element next to which the step popover should be shown */
			placement: "top",
			title: "Custom Tour", /* title of the popover */
			content: "You can create tour like this. Click Next." /* content of the popover */
		});
		tour.addStep({
			element: ".theme-container",
			placement: "left",
			title: "Themes",
			content: "You change your theme from here."
		});
		tour.addStep({
			element: "ul.main-menu a:first",
			title: "Dashboard",
			content: "This is your dashboard from here you will find highlights."
		});
		tour.addStep({
			element: "#for-is-ajax",
			title: "Ajax",
			content: "You can change if pages load with Ajax or not."
		});
		tour.addStep({
			element: ".top-nav a:first",
			placement: "bottom",
			title: "Visit Site",
			content: "Visit your front end from here."
		});
		
		tour.restart();
	}

	//datatable
	$('.datatable').dataTable({
			"sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span12'i><'span12 center'p>>",
			"sPaginationType": "bootstrap",
			"oLanguage": {
			"sLengthMenu": "_MENU_ records per page"
			}
		} );
	$('.btn-close').click(function(e){
		e.preventDefault();
		$(this).parent().parent().parent().fadeOut();
	});
	$('.btn-minimize').click(function(e){
		e.preventDefault();
		var $target = $(this).parent().parent().next('.box-content');
		if($target.is(':visible')) $('i',$(this)).removeClass('icon-chevron-up').addClass('icon-chevron-down');
		else 					   $('i',$(this)).removeClass('icon-chevron-down').addClass('icon-chevron-up');
		$target.slideToggle();
	});
	$('.btn-setting').click(function(e){
		e.preventDefault();
		$('#myModal').modal('show');
	});



		
	//initialize the external events for calender

	$('#external-events div.external-event').each(function() {

		// it doesn't need to have a start or end
		var eventObject = {
			title: $.trim($(this).text()) // use the element's text as the event title
		};
		
		// store the Event Object in the DOM element so we can get to it later
		$(this).data('eventObject', eventObject);
		
		// make the event draggable using jQuery UI
		$(this).draggable({
			zIndex: 999,
			revert: true,      // will cause the event to go back to its
			revertDuration: 0  //  original position after the drag
		});
		
	});


	//initialize the calendar
	$('#calendar').fullCalendar({
		header: {
			left: 'prev,next today',
			center: 'title',
			right: 'month,agendaWeek,agendaDay'
		},
		editable: true,
		droppable: true, // this allows things to be dropped onto the calendar !!!
		drop: function(date, allDay) { // this function is called when something is dropped
		
			// retrieve the dropped element's stored Event Object
			var originalEventObject = $(this).data('eventObject');
			
			// we need to copy it, so that multiple events don't have a reference to the same object
			var copiedEventObject = $.extend({}, originalEventObject);
			
			// assign it the date that was reported
			copiedEventObject.start = date;
			copiedEventObject.allDay = allDay;
			
			// render the event on the calendar
			// the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
			$('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
			
			// is the "remove after drop" checkbox checked?
			if ($('#drop-remove').is(':checked')) {
				// if so, remove the element from the "Draggable Events" list
				$(this).remove();
			}
			
		}
	});
	
	
	//chart with points
	if($("#sincos").length)
	{
		var sin = [], cos = [];

		for (var i = 0; i < 14; i += 0.5) {
			sin.push([i, Math.sin(i)/i]);
			cos.push([i, Math.cos(i)]);
		}

		var plot = $.plot($("#sincos"),
			   [ { data: sin, label: "sin(x)/x"}, { data: cos, label: "cos(x)" } ], {
				   series: {
					   lines: { show: true  },
					   points: { show: true }
				   },
				   grid: { hoverable: true, clickable: true, backgroundColor: { colors: ["#fff", "#eee"] } },
				   yaxis: { min: -1.2, max: 1.2 },
				   colors: ["#539F2E", "#3C67A5"]
				 });

		function showTooltip(x, y, contents) {
			$('<div id="tooltip">' + contents + '</div>').css( {
				position: 'absolute',
				display: 'none',
				top: y + 5,
				left: x + 5,
				border: '1px solid #fdd',
				padding: '2px',
				'background-color': '#dfeffc',
				opacity: 0.80
			}).appendTo("body").fadeIn(200);
		}

		var previousPoint = null;
		$("#sincos").bind("plothover", function (event, pos, item) {
			$("#x").text(pos.x.toFixed(2));
			$("#y").text(pos.y.toFixed(2));

				if (item) {
					if (previousPoint != item.dataIndex) {
						previousPoint = item.dataIndex;

						$("#tooltip").remove();
						var x = item.datapoint[0].toFixed(2),
							y = item.datapoint[1].toFixed(2);

						showTooltip(item.pageX, item.pageY,
									item.series.label + " of " + x + " = " + y);
					}
				}
				else {
					$("#tooltip").remove();
					previousPoint = null;
				}
		});
		


		$("#sincos").bind("plotclick", function (event, pos, item) {
			if (item) {
				$("#clickdata").text("You clicked point " + item.dataIndex + " in " + item.series.label + ".");
				plot.highlight(item.series, item.datapoint);
			}
		});
	}
	
	//flot chart
	if($("#flotchart").length)
	{
		var d1 = [];
		for (var i = 0; i < Math.PI * 2; i += 0.25)
			d1.push([i, Math.sin(i)]);
		
		var d2 = [];
		for (var i = 0; i < Math.PI * 2; i += 0.25)
			d2.push([i, Math.cos(i)]);

		var d3 = [];
		for (var i = 0; i < Math.PI * 2; i += 0.1)
			d3.push([i, Math.tan(i)]);
		
		$.plot($("#flotchart"), [
			{ label: "sin(x)",  data: d1},
			{ label: "cos(x)",  data: d2},
			{ label: "tan(x)",  data: d3}
		], {
			series: {
				lines: { show: true },
				points: { show: true }
			},
			xaxis: {
				ticks: [0, [Math.PI/2, "\u03c0/2"], [Math.PI, "\u03c0"], [Math.PI * 3/2, "3\u03c0/2"], [Math.PI * 2, "2\u03c0"]]
			},
			yaxis: {
				ticks: 10,
				min: -2,
				max: 2
			},
			grid: {
				backgroundColor: { colors: ["#fff", "#eee"] }
			}
		});
	}
	
	//stack chart
	if($("#stackchart").length)
	{
		var d1 = [];
		for (var i = 0; i <= 10; i += 1)
		d1.push([i, parseInt(Math.random() * 30)]);

		var d2 = [];
		for (var i = 0; i <= 10; i += 1)
			d2.push([i, parseInt(Math.random() * 30)]);

		var d3 = [];
		for (var i = 0; i <= 10; i += 1)
			d3.push([i, parseInt(Math.random() * 30)]);

		var stack = 0, bars = true, lines = false, steps = false;

		function plotWithOptions() {
			$.plot($("#stackchart"), [ d1, d2, d3 ], {
				series: {
					stack: stack,
					lines: { show: lines, fill: true, steps: steps },
					bars: { show: bars, barWidth: 0.6 }
				}
			});
		}

		plotWithOptions();

		$(".stackControls input").click(function (e) {
			e.preventDefault();
			stack = $(this).val() == "With stacking" ? true : null;
			plotWithOptions();
		});
		$(".graphControls input").click(function (e) {
			e.preventDefault();
			bars = $(this).val().indexOf("Bars") != -1;
			lines = $(this).val().indexOf("Lines") != -1;
			steps = $(this).val().indexOf("steps") != -1;
			plotWithOptions();
		});
	}

	//pie chart
	var data = [
	{ label: "Internet Explorer",  data: 12},
	{ label: "Mobile",  data: 27},
	{ label: "Safari",  data: 85},
	{ label: "Opera",  data: 64},
	{ label: "Firefox",  data: 90},
	{ label: "Chrome",  data: 112}
	];
	
	if($("#piechart").length)
	{
		$.plot($("#piechart"), data,
		{
			series: {
					pie: {
							show: true
					}
			},
			grid: {
					hoverable: true,
					clickable: true
			},
			legend: {
				show: false
			}
		});
		
		function pieHover(event, pos, obj)
		{
			if (!obj)
					return;
			percent = parseFloat(obj.series.percent).toFixed(2);
			$("#hover").html('<span style="font-weight: bold; color: '+obj.series.color+'">'+obj.series.label+' ('+percent+'%)</span>');
		}
		$("#piechart").bind("plothover", pieHover);
	}
	
	//donut chart
	if($("#donutchart").length)
	{
		$.plot($("#donutchart"), data,
		{
				series: {
						pie: {
								innerRadius: 0.5,
								show: true
						}
				},
				legend: {
					show: false
				}
		});
	}




	 // we use an inline data source in the example, usually data would
	// be fetched from a server
	var data = [], totalPoints = 300;
	function getRandomData() {
		if (data.length > 0)
			data = data.slice(1);

		// do a random walk
		while (data.length < totalPoints) {
			var prev = data.length > 0 ? data[data.length - 1] : 50;
			var y = prev + Math.random() * 10 - 5;
			if (y < 0)
				y = 0;
			if (y > 100)
				y = 100;
			data.push(y);
		}

		// zip the generated y values with the x values
		var res = [];
		for (var i = 0; i < data.length; ++i)
			res.push([i, data[i]])
		return res;
	}

	// setup control widget
	var updateInterval = 30;
	$("#updateInterval").val(updateInterval).change(function () {
		var v = $(this).val();
		if (v && !isNaN(+v)) {
			updateInterval = +v;
			if (updateInterval < 1)
				updateInterval = 1;
			if (updateInterval > 2000)
				updateInterval = 2000;
			$(this).val("" + updateInterval);
		}
	});


	//realtime chart cpu
		var options = {
			legend: { show: true, position: "nw" },
			series: { shadowSize: 1 }, 
			//yaxis: { min: 0, max: 15, pad: 1 },
			xaxis: { show: false }
		};

		var ccpu1= { label:"AVG", data:[] };
		var ccpu2= { label:"5min. AVG", data:[] };
		var ccpu3= { label:"15min. AVG", data:[] };

		var xval=0;
		var data = [ ccpu1, ccpu2, ccpu3 ];
		var cput1;
		var cput2; 
		var cput3; 

		var plot = $.plot($("#realtimechart"), data, options);

		function update() {
				$.ajax({
                                        type: "GET",
                                        url: "helpers/getcpu.php",
					data: {1: 1},
                                        dataType: "json",
                                        success: function(res){
						cput1 = [xval,parseFloat(res.cpu1)];
						cput2 = [xval,parseFloat(res.cpu2)];
						cput3 = [xval,parseFloat(res.cpu3)];

                                                data[0].data.push(cput1);
                                                data[1].data.push(cput2);
                                                data[2].data.push(cput3);
                                        }
                                })
			xval++;
			
			plot.setData(data);
			plot.setupGrid();
			plot.draw();
		
			
			
		}

			setInterval(update, 2500);



	//realtime chart calls
		var options1 = {
			legend: { show: true, position: "nw" },
			series: { shadowSize: 1 }, 
			//yaxis: { min: 0, max: 15, pad: 1 },
			xaxis: { show: false }
		};

		var calls= { label:"Current Calls", data:[] };

		var xval1=0;
		var data1 = [ calls ];
		var rescalls;

		var plot1 = $.plot($("#realtimechartcall"), data1, options1);

		function updatecalls() {
				$.ajax({
                                        type: "GET",
                                        url: "helpers/getcalls.php",
					data: {1: 1},
                                        dataType: "json",
                                        success: function(res){
						rescalls = [xval1,parseInt(res.calls)];

                                                data1[0].data.push(rescalls);
                                        }
                                })
			xval1++;
			plot1.setData(data1);
			plot1.setupGrid();
			plot1.draw();			
			
		}


			setInterval(updatecalls, 2500);

}


//additional functions for data table
$.fn.dataTableExt.oApi.fnPagingInfo = function ( oSettings )
{
	return {
		"iStart":         oSettings._iDisplayStart,
		"iEnd":           oSettings.fnDisplayEnd(),
		"iLength":        oSettings._iDisplayLength,
		"iTotal":         oSettings.fnRecordsTotal(),
		"iFilteredTotal": oSettings.fnRecordsDisplay(),
		"iPage":          Math.ceil( oSettings._iDisplayStart / oSettings._iDisplayLength ),
		"iTotalPages":    Math.ceil( oSettings.fnRecordsDisplay() / oSettings._iDisplayLength )
	};
}
$.extend( $.fn.dataTableExt.oPagination, {
	"bootstrap": {
		"fnInit": function( oSettings, nPaging, fnDraw ) {
			var oLang = oSettings.oLanguage.oPaginate;
			var fnClickHandler = function ( e ) {
				e.preventDefault();
				if ( oSettings.oApi._fnPageChange(oSettings, e.data.action) ) {
					fnDraw( oSettings );
				}
			};

			$(nPaging).addClass('pagination').append(
				'<ul>'+
					'<li class="prev disabled"><a href="#">&larr; '+oLang.sPrevious+'</a></li>'+
					'<li class="next disabled"><a href="#">'+oLang.sNext+' &rarr; </a></li>'+
				'</ul>'
			);
			var els = $('a', nPaging);
			$(els[0]).bind( 'click.DT', { action: "previous" }, fnClickHandler );
			$(els[1]).bind( 'click.DT', { action: "next" }, fnClickHandler );
		},

		"fnUpdate": function ( oSettings, fnDraw ) {
			var iListLength = 5;
			var oPaging = oSettings.oInstance.fnPagingInfo();
			var an = oSettings.aanFeatures.p;
			var i, j, sClass, iStart, iEnd, iHalf=Math.floor(iListLength/2);

			if ( oPaging.iTotalPages < iListLength) {
				iStart = 1;
				iEnd = oPaging.iTotalPages;
			}
			else if ( oPaging.iPage <= iHalf ) {
				iStart = 1;
				iEnd = iListLength;
			} else if ( oPaging.iPage >= (oPaging.iTotalPages-iHalf) ) {
				iStart = oPaging.iTotalPages - iListLength + 1;
				iEnd = oPaging.iTotalPages;
			} else {
				iStart = oPaging.iPage - iHalf + 1;
				iEnd = iStart + iListLength - 1;
			}

			for ( i=0, iLen=an.length ; i<iLen ; i++ ) {
				// remove the middle elements
				$('li:gt(0)', an[i]).filter(':not(:last)').remove();

				// add the new list items and their event handlers
				for ( j=iStart ; j<=iEnd ; j++ ) {
					sClass = (j==oPaging.iPage+1) ? 'class="active"' : '';
					$('<li '+sClass+'><a href="#">'+j+'</a></li>')
						.insertBefore( $('li:last', an[i])[0] )
						.bind('click', function (e) {
							e.preventDefault();
							oSettings._iDisplayStart = (parseInt($('a', this).text(),10)-1) * oPaging.iLength;
							fnDraw( oSettings );
						} );
				}

				// add / remove disabled classes from the static elements
				if ( oPaging.iPage === 0 ) {
					$('li:first', an[i]).addClass('disabled');
				} else {
					$('li:first', an[i]).removeClass('disabled');
				}

				if ( oPaging.iPage === oPaging.iTotalPages-1 || oPaging.iTotalPages === 0 ) {
					$('li:last', an[i]).addClass('disabled');
				} else {
					$('li:last', an[i]).removeClass('disabled');
				}
			}
		}
	}
});
