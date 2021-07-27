<?php
session_start();
include_once('logincontroller.php');
if(isset($_POST['login']))
{
    $logincontroller=new LoginController();
    $loginresult=$logincontroller->login();
    echo $loginresult;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="../static/styles.css">
</head>
<body class="body">
<div class="form">
    <form action="" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Enter your email" id="email" required>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Enter your password" required>
        <input type="submit" class="submit-button green" name="login">
        <p>Not a member? <a href="register.php"><span class="links">Register now!</span></a></p>
    </form>
</div>
</body>
</html>