
<!DOCTYPE html>
<html>
<head>
	<title>
		login page
	</title>
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
	<form name="myForm" method="post" action="./sql/data.php"onsubmit="return verify(this)">
	<h2>Signup</h2>
	<label for="fname">First name  :<input type="text" name="fname" placeholder="First Name" required="fname"></label><br><br><br>
	<label for="lname">Last name  :<input type="text" name="lname" placeholder="Last Name" required="lname"></label><br><br><br>
	<label for="DOB">DOB:<input type="date" name="DOB"placeholder="Date of birth" required="DOB"></label><br><br><br>
	<label>Gender:<br>
	<input type="radio" name="Gender" value="male" checked="male">
	male<br>
	<input type="radio" name="Gender" value="female">
	female<br>
	</label><br><br><br><br>
	<label for="EMail">Email:<input type="email" name="EMail" placeholder="example@gmail.com" required="EMail"></label><br><br><br>
	<label for="password">Password:<input type="password" name="password" placeholder="Password" required="password"></label><br><br><br>
	<button type="Submit">Submit</button>
	</form>
	<script type="text/javascript">
		function verify(arg){
			var element = document.getElementById("password").value;
			console.log(element);
			if(element.length < 8){
				document.getElementById("warning").innerHTML = `Min 8 Chars`;
				return false;
			}
			return true;
		}
	</script>
	    
</body>
</html>