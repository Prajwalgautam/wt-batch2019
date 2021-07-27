<?php
session_start();
include_once('logincontroller.php');
$controller = new LoginController();
if (!isset($_SESSION['user_id'])) {
    echo "<script type='text/javascript'>";
    echo "window.location='login.php'";
    echo "</script>";
}
if (isset($_POST['submit']) && isset($_POST['content'])) {
    $content = htmlspecialchars($_POST['content']);
    $controller->addClip();
}
if(isset($_GET['delid']))
{
    $delresult=$controller->deleteData($_GET['delid']);
    if($delresult=="ok")
    {
        echo"<script type='text/javascript'>";
        echo "window.location = 'home.php'";
        echo"</script>";
    }
}
$data = $controller->getClips();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="../static/styles.css">
</head>
<body class="main">
<div class="left">
    <img class="home" src="../static/home.jpg" alt="">
    <?php echo
        '<h2>Welcome ' . $_SESSION['name'] . '</h2>'
    ?>
    <button><a href="logout.php">Log Out</a></button>

    <p>Paste any text contents.</p>
    <form action="" method="post">
        <textarea name="content" rows="12"></textarea>
        <input type="submit" name="submit" class="submit-button">
    </form>
</div>
<div class="right">
    <?php
    if ($data != null) {
        foreach ($data[0] as $key => $value) {
            echo '
    <div class="item">
            <p>' . $value['content'] . '</p>
            <div>            
                <img class="copy" src="../static/copy.svg" alt="" onclick="copy(this)">
                <a href="home.php?delid='.$value['id'].'"><img class="copy" src="../static/delete.svg" alt=""></a>
            </div>    
    </div>

            ';
        }
    } else {
        echo
        '<p style="text-align: center">Clipboard empty! Try adding some content.</p>';
    }
    ?>
</div>
<p class="toast" id="toast">Copied to clipboard!</p>

</body>
<script>
    function copy(item){
        let toCopy = item.parentNode.parentNode.querySelector('p');
        let input = document.createElement("textarea");
        input.value = toCopy.textContent;
        document.body.appendChild(input);
        input.select();
        document.execCommand("Copy");
        input.remove();
        let toast = document.getElementById("toast")
        toast.classList.add("show")
        setTimeout(function (){
            toast.classList.remove("show")
        },1000)
    }
</script>
</html>
