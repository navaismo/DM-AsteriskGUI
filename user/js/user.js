
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
			
/************************************************************** variables followme *********************************************/
			// variables for addding followme peers
			var firstfollow=$("#firstfollow"),
				secondfollow=$("#secondfollow"),
				thirdfollow=$("#thirdfollow"),
				fourthfollow=$("#fourthfollow"),
				fifthfollow=$("#fifthfollow"),
				firsttime=$("#firsttime"),
				secondtime=$("#secondtime"),
				thirdtime=$("#thirdtime"),
				fourthtime=$("#fourthtime"),
				fifthtime=$("#fifthtime");


			// variables for edit followme
			var firstfollowed=$("#firstfollowed"),
				secondfollowed=$("#secondfollowed"),
				thirdfollowed=$("#thirdfollowed"),
				fourthfollowed=$("#fourthfollowed"),
				fifthfollowed=$("#fifthfollowed"),
				firsttimeed=$("#firsttimeed"),
				secondtimeed=$("#secondtimeed"),
				thirdtimeed=$("#thirdtimeed"),
				fourthtimeed=$("#fourthtimeed"),
				fifthtimeed=$("#fifthtimeed");

/********************************************************************************************************************/
/******************************************************** fin variables followme ******************************************/


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



			
/************************************* tabs ***************************************************************/
			//Tabs
			$('#tabs').tabs({
				fx: { opacity: 'toggle',duration:'slow' },load: 
				function(event, ui){ 
					$('#datepicker').datepicker({ 
						dateFormat: 'yy-mm-dd' 
					});
					$("#form2").show("clip",{direction:"vertical"}, 3500); 
				}
			});






/************************************************** botones logout,add,save *****************************************/
/********************************************************************************************************************/
			//logout button
			$("input:submit, a, button",".lgobtn").button({
				icons: { primary: "ui-icon-power"	}
            			
			});
			
			//add button
			$("input:submit, button",".addbtn").button({
				icons: { primary: "ui-icon-circle-plus"	}
            			
			});

			//add button vm
			$("input:submit, button",".addbtnvm").button({
				icons: { primary: "ui-icon-mail-closed"	}
            			
			});

			//add button meetme
			$("input:submit, button",".addbtnmeet").button({
				icons: { primary: "ui-icon-person"	}
            			
			});

			//add button pin
			$("input:submit, button",".addbtnpin").button({
				icons: { primary: "ui-icon-key"	}
            			
			});
			
			//save button
			$("input: submit, a, button",".savebtn").button({
				icons: { primary: "ui-icon-disk"}
				
            		});


			//edit button
			$("input: submit, a, button",".editbtn").button({
				icons: { primary: "ui-icon-pencil"},
				text: false
            		});
			
			//Del button
			$("input: submit, a, button",".delebtn").button({
				icons: { primary: "ui-icon-closethick"},
            			text: false
			});

			//reload button
			$("input:submit, button",".reload").button({
				icons: { primary: "ui-icon-arrowrefresh-1-w"}
            			
			});
			



			//action reload dp
			$("#reloaddp").click(function(){
				$.ajax({
				     type: "GET",
				     url: "reload.php?id=dp",
                                        success: function(){
                                                $('#dialog-message').dialog('open');
                                        }

				});
			return false;
   			});

			//action reload dahdi
			$("#reloaddahdi").click(function(){
				$.ajax({
					type: "GET",
				     	url: "reload.php?id=dahdi",
					success: function(){ 
        					$('#dialog-message').dialog('open');
    					}
				});
			return false;
   			});


			//action reload sip
			$("#reloadsip").click(function(){
				$.ajax({
					type: "GET",
				     	url: "reload.php?id=sip",
					success: function(){ 
        					$('#dialog-message').dialog('open');
    					}
				});
			return false;
   			});
			
/******************************************************************************************************/
/************************************************* fin botones ****************************************/



/*************************************************** seccion acciones vm ***************************************/
/***************************************************************************************************************/
			//dialog form add vm
			$("#dialog-formvm").dialog({
				autoOpen: false,
				resizable: false,
				height: 285,
				width: 350,
				modal: true,
				buttons: {
					"Create": function() {
						
							$.ajax({
                                                        type: "GET",
                                                        url: "addvm.php",
                                                        data:{customeridvm: customeridvm.val(), mailboxvm: mailboxvm.val(), passwordvm: passwordvm.val(), fullnamevm: fullnamevm.val(), emailvm: emailvm.val(), callbackvm: callbackvm.val()}, 
                                                        success: function(data){
								if ( data == 0 ){
                                                                       	alert(" All Data is Required !!!!");
                                                               	}else{
	                                                        	window.top.location="main.php#voicemail";
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
                                modal: true,
				buttons: {
                                        "Delete": function() {
                                        	
		                                $.ajax({
                	                        	type: "GET",
                        	                	url: "delvm.php",
                                	        	data: {id: myidvm},
							success: function(){
							$('#'+ myidvm).remove();
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
					 	//mailboxed.val(data.mailbox);
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
				height: 285,
				width: 350,
				modal: true,
				buttons: {
					"Update": function() {
						
							$.ajax({
                                                        type: "GET",
                                                        url: "editvm.php",
                                                        data:{id: myedidvm,customeridvm: customeridedvm.val(), mailboxvm: mailboxedvm.val(), passwordvm: passwordedvm.val(), fullnamevm: fullnameedvm.val(), emailvm: emailedvm.val(), callbackvm: callbackedvm.val()}, 
                                                        success: function(){
								window.top.location="user.php#uvms";
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



/*************************************************** seccion acciones followme ***************************************/
/***************************************************************************************************************/
			//dialog form add pinset
			$("#dialog-formfollow").dialog({
				autoOpen: false,
				resizable: false,
				height: 420,
				width: 600,
				modal: true,
				buttons: {
					"Create": function() {
						
							$.ajax({
                                                        type: "GET",
                                                        url: "helpers/addfollow.php",
                                                        data:{peer: $('#txtval').val(), number1: firstfollow.val(), number2: secondfollow.val(), number3: thirdfollow.val(), number4: fourthfollow.val(), number5: fifthfollow.val(), time1: firsttime.val(), time2: secondtime.val(), time3: thirdtime.val(), time4: fourthtime.val(), time5: fifthtime.val()}, 
                                                        success: function(data){
								if ( data == 0 ){
                                                                       	alert(" At Least 1 numbers must be defined");
                                                               	}else{
	                                                        	window.top.location="user.php#ufollow";
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
                        $("#dialog-deletefollow").dialog({
                                autoOpen: false,
				resizable: false,
                                height: 150,
                                width: 200,
                                modal: true,
				buttons: {
                                        "Delete": function() {
                                        	
		                                $.ajax({
                	                        	type: "GET",
                        	                	url: "delfollow.php",
                                	        	data: {id: myidfollow},
							success: function(){
							$('#'+ myidfollow).remove();
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
			$(".edidfollow").click(function() {
				myedidfollow = $(this).val();
				$.ajax({
					type: "GET",
					url: "helpers/getfollow.php",
					data: {id: myedidfollow},
					dataType: "json",
					success: function(data){
					 	
						firstfollowed.val(data.phonenumber1);
						secondfollowed.val(data.phonenumber2);
						thirdfollowed.val(data.phonenumber3);
						fourthfollowed.val(data.phonenumber4);
						fifthfollowed.val(data.phonenumber5);
						
						firsttimeed.val(data.timeout1);
						secondtimeed.val(data.timeout2);
						thirdtimeed.val(data.timeout3);
						fourthtimeed.val(data.timeout4);
						fifthtimeed.val(data.timeout5);

	
					}
				});
				//duda
				$("#dialog-form2follow").dialog("open");
       			return false;
			});



			//dialog form edit pin
			$("#dialog-form2follow").dialog({
				autoOpen: false,
				resizable: false,
				height: 420,
				width: 600,
				modal: true,
				buttons: {
					"Update": function() {
						
							$.ajax({
                                                        type: "GET",
                                                        url: "helpers/editfollow.php",
                                                        data:{peer: $('#txtval').val(), number1: firstfollowed.val(), number2: secondfollowed.val(), number3: thirdfollowed.val(), number4: fourthfollowed.val(), number5: fifthfollowed.val(), time1: firsttimeed.val(), time2: secondtimeed.val(), time3: thirdtimeed.val(), time4: fourthtimeed.val(), time5: fifthtimeed.val()}, 
                                                        success: function(data){
								if ( data == 0 ){
                                                                       	alert(" At Least 1 numbers must be defined");
                                                               	}else{
	                                                        	window.top.location="user.php#ufollow";
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


			//action create new pin
			$("#addpeerfollow").click(function() {
				$("#dialog-formfollow").dialog("open");
				return false;
			});



			//action delete pin	
			$(".delidfollw").click(function() {
				myidfollow = $(this).val();
				$("#dialog-deletefollow").dialog("open");
       			return false;
			});



			//add button pin
                        $("input:submit, button",".addbtnfollow").button({
                               	icons: { primary: "ui-icon-extlink" }
			});

			

			$( "#check" ).click(function() {

		            	if($(this).is(":checked")){
					$("#labelchk").text("Disable FollowMe");
					$.ajax({
						type: "GET",
                                                url: "helpers/togglefvm.php",
                                                data:{peer: $('#txtval').val(), value: 1},
                                                success: function() {
                                            
                                                }
                                        });


				}else{
					$("#labelchk").text(" Enable FollowMe");
					$.ajax({
						type: "GET",
                                                url: "helpers/togglefvm.php",
                                                data:{peer: $('#txtval').val(), value: 0},
                                                success: function() {
                                            
                                                }
                                        });

				}
				
                        });
		


/*****************************************************************************************************************/
/*********************************************************** fin seccion follow  *************************************/




/************************************************************ Seccion acciones CDR **********************************/
/********************************************************************************************************************/


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

			//folder button
                        $("input:submit, a, button",".folderbtn").button({
                                icons: { primary: "ui-icon-folder-open"	}

                        });


			// CDR Filter
			$( "#filterslct" ).change(function() {
			 	var filter=$( this ).val();
				$.ajax({
                                     type: "GET",
                                     url: "filter.php",
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
                                $('#rescdr').html("<div align=center><br><br><img  src='img/ajax-loaders/ajax-loader.gif'/></div>");
                                $.ajax({
                                     type: "GET",
                                     url: "helpers/cdr.php",
				     data: { range1: range1.val(), range2: range2.val(), filter1: $('#filterslct').val(), filter2: $('#filter2').val() },
                                        success: function(data){
		                                $('#rescdr').html("<div align=center><br><br><img  src='ajax-loader.gif'/></div>");

						$('#rescdr').html('');
						$('#rescdr').html(data);
						
						$('#udownr').attr("href","helpers/down.php?range1="+range1.val()+"&range2="+range2.val()+"&filter1="+$('#filterslct').val()+"&filter2="+$('#filter2').val());
                                                
                                        }
				});

			});

			$("#udownr").live('click', function() {
   				 window.open($(this).attr('href'));
				    return false;
			});

			/*$("#udownr").click(function(){
				$.ajax({
                                     type: "GET",
                                     url: "helpers/down.php",
				     data: { range1: range1.val(), range2: range2.val(), filter1: $('#filterslct').val(), filter2: $('#filter2').val() },
                                        success: function(data){

                                        }
                                });
			});*/
/*******************************************************************************************************************/
/************************************************* fin acciones cdr ************************************************/


/************************************************ Ayuda ***********************************************************/

			$("#hcdrr").click(function() {
                                $("#dialog-hcdrr").dialog("open");
                        return false;
                        });



                        $("#dialog-hcdrr").dialog({
                                autoOpen: false,
                                resizable: false,
                                height: 250,
                                width: 500,
                                modal: true,
                                buttons: {
                                        Ok: function() {
                                               	$( this ).dialog( "close" );
                                       	}
                                }
                        });



			$("#hfollow").click(function() {
                                $("#dialog-hfollow").dialog("open");
                        return false;
                        });



                        $("#dialog-hfollow").dialog({
                                autoOpen: false,
                                resizable: false,
                                height: 250,
                                width: 500,
                                modal: true,
                                buttons: {
                                        Ok: function() {
                                               	$( this ).dialog( "close" );
                                       	}
                                }
                        });

			$("#hvm").click(function() {
                                $("#dialog-hvm").dialog("open");
                        return false;
                        });



                        $("#dialog-hvm").dialog({
                                autoOpen: false,
                                resizable: false,
                                height: 250,
                                width: 500,
                                modal: true,
                                buttons: {
                                        Ok: function() {
                                               	$( this ).dialog( "close" );
                                       	}
                                }
                        });



			$("#hconf").click(function() {
                                $("#dialog-hconf").dialog("open");
                        return false;
                        });



                        $("#dialog-hconf").dialog({
                                autoOpen: false,
                                resizable: false,
                                height: 250,
                                width: 500,
                                modal: true,
                                buttons: {
                                        Ok: function() {
                                               	$( this ).dialog( "close" );
                                       	}
                                }
                        });







