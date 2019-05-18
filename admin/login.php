<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
</head>
<body>
	<div id="info"></div>
<form method="POST" onsubmit="loginAdmin()">
	<label>Username</label><br>
	<input type="text" name="username" id="username"><br><br>
	<label>Password</label>
	<br>
	<input type="password" name="password" id="password">
	<br> <br>
	<button type="button" onclick="loginAdmin()">Login</button>
</form>
<script type="text/javascript" src="../bootstrap/jquery-3.2.1.min.js"></script>

<script>
	
	function loginAdmin()
	{
		var username = $('#username').val();
		var password = $('#password').val();

		$.ajax({
			type: "POST",
			url: "../__factory/admin_login.php",
			data:{
				username:username,
				password:password
			},
			cache:false,
			success:function(res){
				$('#info').html(res);
			}
		});
	}
</script>
</body>
</html>