<?php  
require_once("connect.php");
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$Email=$_POST["EMail"];
$password=$_POST["password"];
$Gender=$_POST["Gender"];
$DOB=$_POST["DOB"];
$query="INSERT INTO `form data` (`fname`,`lname`,`Email`,`password`,`Gender`,`DOB`) VALUES ('$fname','$lname','$Email','$password','$gender','$DOB')";
header("Location: ../login.php");
$conn->query($query);
var_dump($conn);
?>