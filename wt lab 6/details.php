<?php
require_once("./Company.php");
require_once("./Employee.php");

$data = new Company;
$data->name = "Gandaki College Of Engineering And Science";
echo "<br>";
$data->address = "Lamachaur";
array_push($data->employees , new Employee("Thorin", "Erebor"));
array_push($data->employees , new Employee("Gandalf", "Pancing Pony"));
array_push($data->employees , new Employee("Bilbo Baggins", "Shire"));

?>
<!DOCTYPE html>
<html>
<head>
	<title>Table of contents</title>
</head>
<body style="background-color: #abcaea">
	<table border="2px">
		<tr>
			<th>Name</th>
			<th>Address</th>
		</tr>
		<tr>
			<?php
			foreach ($data->employees as $employee) {
				?>
				<tr>
					<td><?=$employee->name?></td>
					<td><?=$employee->address?></td>
				</tr>
			<?php } ?>
		</tr>
	</table>
</body>
</html>