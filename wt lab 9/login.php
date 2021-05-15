<?php
session_start();
if(count($_POST)>0){
	session_destroy();
}else if(isset($_SESSION["login"])){
	header("Location: dashboard.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>'
	<style type="text/css">
		body{
			text-align: center;
			background-color: #224455;
		}
		#co{
			color: black;
			text-decoration: none;

		}
	</style>
</head>
<body>
	<h2>Login</h2>
	<h2><label>Username</label></h2><br>
	<input type="email" name="EMail" placeholder="Email"><br>
	<h2><label>Password</label></h2><br>
	<input type="password" name="password" placeholder="Password"><br>
	<h2><button>Submit</button></h2>

</body>
</html>