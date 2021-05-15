<?php
session_start();
require_once("connect.php");
$Email = $_POST["EMail"];
$password = $_POST["password"];
$query = "SELECT * FROM `form data` WHERE Email='$Email' and password='$password'";
$result = $conn->query($query);
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {
    if($Email == $row["EMail"] and $password == $row["password"]){
    	$_SESSION["login"]=true;
    	header("Location: ../dashboard.php");
    }
    	
  }
}else{
	header("Location: ../login.php");
}


?>