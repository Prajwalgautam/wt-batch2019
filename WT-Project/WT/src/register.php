<?php
include_once('logincontroller.php');
if (isset($_POST['submit']))
{
    $loginc=new LoginController();
    $signup=$loginc->signup();
    if ($signup=="noMatch")
    {
        echo "<script type='text/javascript'>alert('Password not matched!');</script>";
    }
    elseif($signup=="ok")
    {
        echo "<script type='text/javascript'>alert('Signup Success!');window.location='login.php';</script>";
    }
    elseif ($signup=="usedEmail")
    {
        echo "<script type='text/javascript'>alert('Email already in use!');window.location='login.php';</script>";
    }
    else
    {
        echo "<script type='text/javascript'>alert('Error in connection!');</script>";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="../static/styles.css">
</head>
<body class="body">
<div class="form">
    <form action="" method="post">
        <label for="name">Full name</label>
        <input type="text" name="name" placeholder="Enter full name" id="name" required>
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Enter your email" id="email" required>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Enter a password" required>
        <label for="rpassword">Repeat password</label>
        <input type="password" name="rpassword" id="rpassword" placeholder="Repeat password" required>
        <input type="submit" value="Register" class="submit-button orange" name="submit">
        <p>Already a member? <a href="login.php"><span class="links">Login now!</span></a></p>
    </form>
</div>
</body>
</html>