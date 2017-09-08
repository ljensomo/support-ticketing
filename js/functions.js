//LOGIN VALIDATION
  



 function login(){
          var user = $('#username').val();
          var pw = $('#password').val();
          
          if(user == "" && pw == ""){
          		swal({title:"Ooops!", text:"Please input some data!", type:"warning"});
          }else if(user == ""){
          		swal({title:"Ooops!", text:"Please insert username!", type:"warning"});
          }else if(pw == ""){
          		swal({title:"Ooops!", text:"Please insert password!", type:"warning"});
          }else{
          		$.ajax({
		            type:"POST",
		            url:"includes/login.php",
		            data: "user="+user+"&pw="+pw,
		            complete : function(request){
            
            
            if(request.responseText.trim() === "admin"){
                  swal({ title : "Success!", text : "Successfully Login!", type : "success"},
                  function(){
                                   window.location.href="index.php";
                                   });
                                
           }else if(request.responseText.trim() === "client"){
           		 swal({ title : "Success!", text : "Successfully Login!", type : "success"},
                  function(){
                                   window.location.href="client_create_ticket.php";
                                   });

			}else if(request.responseText.trim() === "incorrect"){
				swal({ title : "Ooops!", text : "The password you enter is incorrect! Please try again.", type : "warning"});
                 
			}else if(request.responseText.trim() === "none"){
				swal({ title : "Ooops!", text : "The username and password you enter did not match our records! Please try again.", type : "error"});
                  
			}else if(request.responseText.trim() === "not active"){
				swal({ title : "Ooops!", text : "Your accoount is not yet activated. Please check your email for the verification of your account.", type : "error"});
			}   
			} // function end               
                                
          		}); // ajax end
       		} // condition end
        } // function login end




//ADD USERS VALIDATION


  function add_developer(){
                                        var fname = $('#firstname').val();
                                        var mname = $('#middlename').val();
                                        var lname = $('#lastname').val();
                                        var contact = $('#contact').val();
                                        var email = $('#email').val();
                                        var role = $('#role').val();
                                        var username = $('#username').val();
                                        var pw = $('#pw').val();
                                        var confirm_pw = $('#confirm_pw').val();
                                        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

                                    
                                        if(fname == "" || lname == "" || contact == "" || email == "" || role == "" || username == "" || pw == "" || confirm_pw == ""){
                                          swal({title:"Ooops", text:"Please complete all necessary informations", type:"warning"});
                                        }else{ 
                                          if(!emailReg.test(email)){
                        swal({ title : "Ooops!", text : "Please enter valid email!", type : "warning"},
                              function(){
                                $('#email').focus();
                              }
                        
                        );
              
                                          
                                                }else if(confirm_pw == pw){
                                            swal({title:"Success", text:"Account Succesfully Added", type:"success"});
                                          }else{
                                            swal({title:"Ooops", text:"Password not matched", type:"warning"});
                                            $('#confirm_pw').val('');
                                            $('#confirm_pw').focus();
                                          }
                                        }//condition
                                      
                                      }//function add_developer






//ADD COMPANY VALIDATION 

function add_client(){
        	//alert("asdas");
        		var company_name = $('#company_name').val();
        		var company_tin_code = $('#company_tin_code').val();
        		var email = $('#company_email').val();				
        		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        		
        		if (company_name == "" || company_tin_code == "" || email == "") {
        			swal({ title : "Ooops!", text : "Please complete all fields!", type : "error"});
        		}else if(!emailReg.test(email)){
        			swal({title:"Ooops!",text:"Please enter a valid email!",type:"warning"},
        				function(){
        					$('#company_email').focus();
        				}
        			);
        		}else{
        			$.ajax({

		            type:"POST",
		            url:"includes/add_client_process.php",
		            data: "company_name="+company_name+"&company_tin_code="+company_tin_code+"&email="+email,
		            complete : function(request){
            
	            	
					if(request.responseText.trim() === "exist"){
	           		  swal({ title : "Ooops!", text : "Company Name alredy exist!", type : "error"});
	           		}else if(request.responseText.trim() === "success"){
	                  swal({ title : "Submitted!", text : "Successfully Created!", type : "success"},
	                  		function(){
	                  			location.reload();	                  		
	                  					}
	                  );
	                				}
	           		}
            		});	
        		}
        		
        		
            
            
        	}






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






                      



                      




