

<html>
<head>
	<title>Mailer</title>
</head>
<body>
<input type="text" placeholder="Name" id="name">
<input type="email" placeholder="Email" id="email">
<input typw="message" placeholder="Message" id="message">
<button id="btnsend">Send</button>

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#btnsend').click(function(){
			var email = $('#email').val();
			var message = $('#message').val();

			$.ajax({
				url: "mail.php",
				method: "POST",
				data: {
					email:email,
					message:message
				},
				success: function(data){
					alert(data);
				}

			});
		})
	});
</script>
</body>
</html>