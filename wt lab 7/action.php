<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	Data Table:<br>
	<table border="2px">
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>DOB</th>
			<th>Gender</th>
			<th>Email</th>
			<th>Security Answer</th>
			<th>Address</th>
			<th>City</th>
			<th>State</th>
			<th>Zip Code</th>
			<th>Phone</th>

		</tr>
		<tr>
			<td><?php echo $_POST["fname"];?></td><br>
			<td><?php echo $_POST["lname"];?></td><br>
			<td><?php echo $_POST["date"];?></td><br>
			<td><?php echo $_POST["gender"];?></td><br>
			<td><?php echo $_POST["email"];?></td><br>
			<td><?php echo $_POST["ans"];?></td><br>
			<td><?php echo $_POST["address"];?></td><br>
			<td><?php echo $_POST["city"];?></td><br>
			<td><?php echo $_POST["pick"];?></td><br>
			<td><?php echo $_POST["num"];?></td><br>
			<td><?php echo $_POST["phone"];?></td><br>
		</tr>
		
	</table>
	

</body>
</html>