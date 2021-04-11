<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body style="border: 4px;background:#2a3b2d">
	<form action="action.php" method="post" />
	<br>
	<br>
	PERSONAL INFORMATION:
	<br>
	<br>
	<br>
		First Name   :<input type="text" name="fname" /><br>
		Last Name    :<input type="text" name="lname" /><br>
		Date of Birth:<input type="Date" name="date" /><br>
		Gender:<br>
			<input type="radio" name="gender" value="female">Female<br>
			<input type="radio" name="gender"value="male">Male<br>
			<input type="radio" name="gender"  value="other">Other<br>
		<br>
	<br>
	<br>
	<br>	
	ACCOUNT INFORMATION:
	<br>
	<br>
	<br>
		E-mail          :<input type="text" name="email" /><br>
		Re-type E-mail  :<input type="text" name="email" /><br>
		Password        :<input type="Password" name="password"><br>
		Re-type Password:<input type="Password"><br>
		Security Question:<br><select>
              <option>What is your fav food</option>

              <option>What is your fav game</option>

              <option>What is fav browser</option>
  		</select>
  		<br>
 	    Security Answer  :<input type="text" name="ans"><br>
 	<br>
 	<br>
 	<br>    
 	CONTACT INFORMATION:
 	<br>
 	<br>
 	<br>
 	    Address:<input type="text" name="address" /><br>
 	    City   :<input type="text" name="city" /><br>
 	    State  :<input type="State" name="pick"><br>
 	    Zip Code:<input type="text" name="num"><br>
 	    Phone:<input type="text" name="phone">
 	    <select>
			  <option>Mobile</option>
			  <option>Land line</option>
		</select> <br>
		<input type="submit" />
	</form>

</body>
</html>