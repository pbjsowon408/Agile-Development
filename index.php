<!DOCTYPE html>
<html>
<head>
	<title>WebChat</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<h1 align="center"><font size="7">Chat Room</font></h1>
<body>
<div id="main">
	<div id="info">
		<h2>Login</h2>
		
		<form action="login.php" method="post">
		<label><b>Username:</b></label>
		<input type="text" name="uname" placeholder="User name"><br><br>
		<label><b>Password:</b></label>
		<input type="text" name="pass" placeholder="Password"><br><br>
		<button style="background-color: #6495ed;color: white;" type="submit"><b>Login</b>
		</button>
		</form>
		
		<form action="signup.php" method="post">
		<h2>Register</h2>
		<label>Username:</label>
		<input type="text" name="uname" placeholder="User name"><br>
		<br>
		<label>Email Add:</label>
		<input type="text" name="Email" placeholder="Email"><br>
		<br>
		<label>Password:</label>
		<input type="text" name="Password" placeholder="Password"><br>
		<br>
		
		<button style="background-color: #6495ed;color: white;" type="submit"><b>signup</b>
		</button>
		</form>
	</div>
	
</div>

</body>
</html>