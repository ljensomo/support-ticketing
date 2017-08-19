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
                                   window.location.href="client_create_ticket.php#select-modal";
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