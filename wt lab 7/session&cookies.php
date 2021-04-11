<?php
session_start();
if (isset($_SESSION['views']))
	$_SESSION['views']=$_SESSION['views']+1;
else
	$_SESSION['views']=1;
echo "Views=". $_SESSION['views'];//everytime you visit the count increases
$cookieName="user";
$cookieValue="prajwal";
setcookie($cookieName, $cookieValue, time() + (86400*30), "/");
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookieName])) {
  echo "Cookie named '" . $cookieName . "' is not set!";
} else {
  echo "Cookie '" . $cookieName . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookieName];
}
?>

</body>
</html>
