//ADD COMPANY VALIDATION 







//SEVERITY VALIDATION



function add_severity(){
          var name = $('#name').val();
          var description = $('#description').val();
        
    
        if(name == "" || description == ""){
          swal({title:"Ooops", text:"Please complete all necessary informations", type:"warning"});
        }else{ 
          $.ajax({
                    type:"POST",
                    url:"includes/add_severity_process.php",
                    data:"name="+name+"&description="+description,
                    success:function(){
                        swal({title:"Saved!",text:"Successfully Added",type:"success"},
                            function(){
                                location.reload();
                            }
                            );
                    }

                })
        }
          
                                                    
      }//function add_severity

//RESOLUTION VALIDATION

  function add_resolution(){
                                          var name = $('#resolution_name').val();
                                          var description = $('#resolution_description').val();
                                        
                                    
                                        if(name == "" || description == ""){
                                          swal({title:"Ooops", text:"Please complete all necessary informations", type:"warning"});
                                        }else{ 
                                          $.ajax({
                                                    type:"POST",
                                                    url:"includes/add_resolution_process.php",
                                                    data:"name="+name+"&description="+description,
                                                    success:function(){
                                                        swal({title:"Saved!",text:"Successfully Added",type:"success"},
                                                            function(){
                                                                location.reload();
                                                            }
                                                            );
                                                    }

                                                })
                                            }
                                                
                                                                                    
                                          
                                                                                    
                                      }//function add_resolution
                                      



//STATUS VALIDATION





function add_status(){
          var name = $('#status_name').val();
          var description = $('#status_description').val();
        
    
        if(name == ""){
          swal({title:"Ooops", text:"Please complete all necessary informations", type:"warning"});
            }else{ 
          $.ajax({
                    type:"POST",
                    url:"includes/add_status_process.php",
                    data:"name="+name+"&description="+description,
                    complete:function(a){
                      if(a.responseText.trim()=="exist"){
                        swal("Ooops!", "Status already exist", "warning");
                      }else{
                        swal({title:"Saved!",text:"Successfully Added",type:"success"},
                            function(){
                                location.reload();
                            }
                            );
                      }//end condition
                    }
                      })
        }
         } 
                                                                                    
                                      
                                      
      function edit_status(){
        //alert(i);
        var id = $('#edit_status_id').val();
        var desc = $('#edit_status_desc').val();
        var description = $('#edit_status_description').val();

        if (desc == ""){
          swal({title:"Ooops!", text:"Please input a data!", type:"warning"});
        } else{
            $.ajax({
                type:"POST",
                url:"includes/edit_status_process.php",
                data:"id="+id+"&name="+desc+"&description="+description,
                complete:function(a){
                  if(a.responseText.trim()=="same"){
                        $('#edit_status').modal('hide');
                  }else if(a.responseText.trim()=="invalid"){
                    swal("Ooops!", "Invalid status name, status name already exist!", "warning");
                  }else if(a.responseText.trim()=="success"){
                  swal({title:"Saved!", text:"Successfully Updated!", type:"success"},
                        function(){
                        location.reload();
                      }
                    );
                  }//end condition
                }

            });
        }
      }

// EDIT SEVERITY

       function edit_severity(){
        //alert(i);
        var id = $('#edit_severity_id').val();
        var desc = $('#edit_svrty').val();
        var description = $('#edit_svrty_desc').val();

        if (desc == ""){
          swal({title:"Ooops!", text:"Please input a data!", type:"warning"});
        } else{
            $.ajax({
                type:"POST",
                url:"includes/edit_severity_process.php",
                data:"id="+id+"&name="+desc+"&description="+description,
                complete:function(a){
                  if(a.responseText.trim()=="same"){
                        $('#edit_severity').modal('hide');
                  }else if(a.responseText.trim()=="invalid"){
                    swal("Ooops!", "Invalid status name, status name already exist!", "warning");
                  }else if(a.responseText.trim()=="success"){
                  swal({title:"Saved!", text:"Successfully Updated!", type:"success"},
                        function(){
                        location.reload();
                      }
                    );
                  }//end condition
                }
            });
        }
      }


// EDIT RESOLUTION

          function edit_resolution(){
            //alert(i);
            var id = $('#edit_resolution_id').val();
            var desc = $('#edit_rsltn').val();
            var description = $('#edit_rsltn_desc').val();

            if (desc == ""){
              swal({title:"Ooops!", text:"Please input a data!", type:"warning"});
            } else{
                 $.ajax({
                    type:"POST",
                    url:"includes/edit_resolution_process.php",
                    data:"id="+id+"&name="+desc+"&description="+description,
                    complete:function(a){
                      if(a.responseText.trim()=="same"){
                            $('#edt_rsltn_mdl').modal('hide');
                      }else if(a.responseText.trim()=="invalid"){
                        swal("Ooops!", "Invalid status name, status name already exist!", "warning");
                      }else if(a.responseText.trim()=="success"){
                      swal({title:"Saved!", text:"Successfully Updated!", type:"success"},
                            function(){
                            location.reload();
                          }
                        );
                      }//end condition
                    }
                }); //end ajax
            }
          }



  //DELETE STATUS




        function del_status(id){
        swal({
          title: "Are you sure?",
          text: "You will not be able to recover this imaginary file!",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "Yes, delete it!",
          closeOnConfirm: false
        },
        function(){
            $.ajax({
                type:"POST",
                url:"includes/delete_status_process.php",
                data:"status_id="+id,
                complete:function(){
                    swal({title:"Deleted!", text:"You have successfully deleted!", type:"success"},
                        function(){
                            location.reload();
                        }
                        );
                }
            })
            });
        }



        //DELETE RESOLUTION


     function del_resolution(id){
        swal({
          title: "Are you sure?",
          text: "You will not be able to recover this imaginary file!",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "Yes, delete it!",
          closeOnConfirm: false
        },
        function(){
            $.ajax({
                type:"POST",
                url:"includes/delete_resolution_process.php",
                data:"resolution_id="+id,
                complete:function(){
                    swal({title:"Deleted!", text:"You have successfully deleted!", type:"success"},
                        function(){
                            location.reload();
                        }
                        );
                }
            })
        });
    }


  //DELETE SEVERITY

    function del_severity(id){
        swal({
          title: "Are you sure?",
          text: "You will not be able to recover this imaginary file!",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "Yes, delete it!",
          closeOnConfirm: false
        },
        function(){
            $.ajax({
                type:"POST",
                url:"includes/delete_severity_process.php",
                data:"severity_id="+id,
                complete:function(){
                    swal({title:"Deleted!", text:"You have successfully deleted!", type:"success"},
                        function(){
                            location.reload();
                        }
                        );
                }
            })
        });
    }


    //NEW CLIENT USER

    function n_client_user(){
   var fname = $('#n_fname').val();
   var mname = $('#n_mname').val();
   var lname = $('#n_lname').val();
   var email = $('#n_email').val();
   var contact = $('#n_cnum').val();
   var username = $('#n_uname').val();
   var pass = $('#n_pass').val();
   var confirm_pass = $('#n_confrm_pass').val();
   var cmpny_id = $('#n_cid').val();
   var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

   

     if(fname == "" || lname == "" || email == "" || contact == "" || username == "" || pass == "" || confirm_pass == ""){
      swal("Ooops!", "Please complete all necessary fields!", "warning");
      //alert('asd');
     }else{
      if(!emailReg.test(email)){
        swal("Ooops!","Please enter valid email!","warning");
      }else if(pass.length<=6){
        swal("Ooops!", "The password must be more than 6 characters!", "warning");  
      }else if(confirm_pass!=pass){
        swal("Ooops!", "Password did not match!", "warning");
      }else{
        $.ajax({
          type:"POST",
          url:"includes/add_client_user_process.php",
          data:{
            fname:fname,
            mname:mname,
            lname:lname,
            contact:contact,
            email:email,
            cid:cmpny_id,
            uname:username,
            pass:pass
          },
          complete:function(a){
            if(a.responseText.trim()=="success"){
              swal({title:"Saved!",text:"Successfully Added!", type:"success"},
                function(){
                  //location.reload();
                  $('#n_fname').val('');
                  $('#n_mname').val('');
                  $('#n_lname').val('');
                  $('#n_email').val('');
                  $('#n_cnum').val('');
                  $('#n_uname').val('');
                  $('#n_pass').val('');
                  $('#n_confrm_pass').val('');
                  $('#add-client-user').modal('hide');
                  location.reload();
                  //$('#datatable').load('client_users.php #datatable');
                }
              );
            }else if(a.responseText.trim()=="exist"){
              swal({title:"Ooops!", text:"The username you entered already exist!", type:"warning"},
                function(){
                  $('#n_uname').val('');
                  $('#n_uname').focus();
                }
              );
            }
          }
        })
      }
     }
    }// end n_client_user



    //DEACTIVATE CLIENT USER

    function de_activate(id){
      swal({
    title: "Are you sure?",
    text: "The user will not be able to login!",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Yes, De-Activate it!",
    closeOnConfirm: false
  },
    function(){
      $.ajax({
        type:"POST",
        url:"includes/de_activate_client_process.php",
        data:"id="+id,
        success:function(){
          swal({ title:"De-Acitvated!", text:"The user was deactivated.", type:"success"},
            function(){
              location.reload();
            }
          );
        }
      });
    }
  );
}


    //ACTIVATE CLIENT USER



// FETCH CLIENT USER

function edit_client_user(id,fname,mname,lname,contact,email){
	$('#edit_users').modal('show');
	$('#edit_users_id').val(id);
	$('#edit_fname').val(fname);
	$('#edit_mname').val(mname);
	$('#edit_lname').val(lname);
	$('#edit_cntct').val(contact);
	$('#edit_email').val(email);
}

// EDIT CLIENT USER

function save_edit_clnt_user(){
		var id = $('#edit_users_id').val();
		var fname = $('#edit_fname').val();
		var mname = $('#edit_mname').val();
		var lname = $('#edit_lname').val();
		var contact = $('#edit_cntct').val()
		var email = $('#edit_email').val();
		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		
		if(fname=="" || lname=="" || email=="" || contact == ""){
			swal({title:"Ooops!", text:"Please complete all necessary fields!", type:"warning"});
		}else if(!emailReg.test(email)){
			swal({title:"Ooops!", text:"Please enter valid email!",type:"warning"},
				function(){
						$('#edit_email').focus();
					}
			);
		}else{
			$.ajax({
				type:"POST",
				url:"includes/edit_user_process.php",
				data:{
					id:id,
					fname:fname,
					mname:mname,
					lname:lname,
					contact:contact,
					email:email
				},
				complete:function(){
					//$('#datatable').load('client_users.php #datatable');
					swal({title:"Saved!", text:"Changes has been successfully saved!", type:"success"},
						function(){
							//location.reload();
							//table.ajax.reload();
							//$('#edit_users').modal('hide');
							//$('#datatable').refresh();
							location.reload();
							
						}
					);
				}
			})
		}
	}


// ADD COMMENT
function add_cmmnt(){
	var tckt_id = $('#tckt_id').val();
	var user_id = $('#user_id').val();
	var msg = $('#msg').val();
	if(msg==""){
		swal("Ooops!","Please add a comment!","info");
	}else{
		$.ajax({
			type:"POST",
			url:"includes/add_comment_process.php",
			data:{
				tckt_id:tckt_id,
				user_id:user_id,
				msg:msg
			},
			success:function(data){
				$('#msg').val('');
				//$('#comments').append(data);
        		//$('#comments').load('client_ticket_details.php #comments');
				//$('#comments').load(client_ticket_details.php + ' #comments');
			}
		}); // ajax end
	}
}    
//REMOVE ASSIGNEE
function sample(id){
	 swal({
        title: "Are you sure?",
        text: "Remove selected user from the project?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#60C060",
        confirmButtonText: "Yes, Remove!",
        closeOnConfirm: false
      },
        function(){
			$.ajax({
			type:"post",
			url:"includes/remove_assgnee_process.php",
			data:"id="+id,
			success:function(){
				location.reload();
			}
	});          
	}
);	
}                  
//NEW ISSUE TYPE
function new_issue_typ(){

	var issue= $("#issue").val();
	if(issue==""){
		swal("Ooops!","Please input something!","warning");
	}else{
		$.ajax({
			type:"post",
			url:"includes/new_issuetype_process.php",
			data:"issue="+issue,
			complete:function(a){
          if(a.responseText.trim()=="success"){
      				swal({title:"Success!",text:"Issue was successfully added!",type:"success"},
      					function(){
      						location.reload();
      					}
      				);
          }else{
            swal("Ooops!","Invalid issue.","info");
          }
			}
		});
	}
}
// NEW FORTIS USER
function new_fuser(){
    var fname = $('#n_f_fname').val();
    var mname = $('#n_f_mname').val();    
    var lname = $('#n_f_lname').val();    
    var cnum = $('#n_f_cnum').val();
    var email = $('#n_f_email').val();
    var uname = $('#n_f_uname').val();
    var pass = $('#n_f_pass').val();    
    var c_pass = $('#n_f_confrm_pass').val();
    var role = $('#n_f_role').val();  
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

    
     if(fname == "" || lname == "" || cnum == "" || email == "" || role == "" || uname == "" || pass == "" || c_pass == ""){
                  swal({title:"Ooops", text:"Please complete all necessary informations", type:"warning"});
         }else{ 
                  if(!emailReg.test(email)){
                        swal({ title : "Ooops!", text : "Please enter valid email!", type : "warning"},
                              function(){
                                $('#n_f_email').focus();
                              }
                        );
                  }else if(pass.length<=6){
                  swal("Ooops!", "The password must be more than 6 characters!", "warning");             
                  }else if(c_pass == pass){
                        //swal({title:"Success", text:"Account Succesfully Added", type:"success"});
                        $.ajax({
                          type:"post",
                          url:"includes/new_fuser_process.php",
                          data:{
                            fname:fname,
                            mname:mname,
                            lname:lname,
                            cnum:cnum,
                            uname:uname,
                            email:email,
                            pass:pass,
                            role:role
                          },
                          complete:function(a){
                            //swal({title:"Success", text:a.responseText.trim(), type:"success"});
                if(a.responseText.trim()=="success"){
                  swal({title:"Success", text:"Successfully saved!", type:"success"},
                    function(){
                      location.reload();
                    }
                  );
                }else if(a.responseText.trim()=="exist"){
                  swal("Ooops!","The username you entered already exist!","warning");
                }
                          }
                        });
                  }else{
                    swal({title:"Ooops", text:"Password did not matched", type:"warning"});
                    $('#n_f_confrm_pass').val('');
                    $('#n_f_confrm_pass').focus();
                  }
         }//condition
  }
  // VIEW FORTIS USER
  function view_fuser(name,cnum,email,uname,role){
    $("#f_full_name").val(name);
    $("#f_contact_no").val(cnum);
    $("#f_e_mail").val(email);
    $("#f_user_name").val(uname);
    $("#f_roles").val(role);
    $("#view_fusers").modal("show");
  }

// DE ACTIVATE FORTIS USER
  function de_actvt_user(id){
      swal({
    title: "Are you sure?",
    text: "The user will not be able to login!",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Yes, De-Activate it!",
    closeOnConfirm: false
  },
    function(){
      $.ajax({
        type:"POST",
        url:"includes/de_activate_client_process.php",
        data:"id="+id,
        success:function(){
          swal({ title:"De-Acitvated!", text:"The user was deactivated.", type:"success"},
            function(){
              location.reload();
            }
          );
        }
      });
    }
  );
}
// ACTIVATE FORTIS USER
function activate_user(id){
    swal({
    title: "Are you sure?",
    text: "Login access will be granted!",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#60C060",
    confirmButtonText: "Yes, Activate it!",
    closeOnConfirm: false
  },
    function(){
      $.ajax({
        type:"POST",
        url:"includes/activate_client_process.php",
        data:"id="+id,
        success:function(){
          swal({ title:"Acitvated!", text:"The user was activated.", type:"success"},
            function(){
              location.reload();
            }
          );
        }
      });
    }
  );
}
// EDIT COMPANY
function edit_company(id,cname,ccode,cemail){
    $("#comp_id").val(id);
    $("#e_cname").val(cname);
    $("#e_ccode").val(ccode);
    $("#e_cemail").val(cemail);
    $("#edit_company").modal("show");
}


          // SAVE EDIT COMPANY
  function updt_company(){
      var id = $("#comp_id").val();
      var cname = $("#e_cname").val();
      var code = $("#e_ccode").val();
      var email = $("#e_cemail").val();
      if(cname==="" || code==="" || email===""){
        swal("Ooops!","Please complete all fields!", "warning");
      }else{
        $.ajax({
          type:"post",
          url:"includes/edit_company_process.php",
          data:{
            id:id,
            cname:cname,
            code:code,
            email:email
          },
          complete:function(a){
            if(a.responseText.trim()=="success"){
            swal({title:"Saved!",text:"Changes has been successfully saved.",type:"success"},
                function(){
                  location.reload();
                }
              );
            }else{
              swal("Ooops!","Invalid Company name, name already exists!", "info");
            }
          }
        });
      }
    }

// RE-OPEN TICKET
function re_open(id){
      swal({
    title: "Are you sure?",
    text: "Do you want to re-open the ticket?",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Re-Open!",
    closeOnConfirm: false
  },
    function(){
      $.ajax({
        type:"POST",
        url:"includes/reopen-ticket.php",
        data:"id="+id,
        success:function(data){
          swal({ title:"Re-Open!", text:data, type:"success"},
            function(){
              //$('#datatable').load('client_users.php #datatable');
              location.reload();
            }
          );
        }
      });
    }
  );
}

