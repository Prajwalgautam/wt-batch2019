<?php
include_once('DbConfig.php');

class LoginController extends DbConfig
{
    public function signup()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $rpassword = $_POST['rpassword'];

        if ($password == $rpassword) {
            $emailcheck = $this->connection->query("select * from users where email='$email'");
            $count = $emailcheck->num_rows;
            if ($count == 0) {
                $signupquery = $this->connection->query("insert into users values('','$name','$email','$password')");
                if ($signupquery) {
                    return "ok";
                } else {
                    return "error";
                }
            } else {
                return "usedEmail";
            }

        } else {
            return "noMatch";
        }
    }

    public function deleteData($id){
        $uid = $_SESSION['user_id'];
        $this->connection->query("delete from board where id = '$id' and user_id = '$uid'");
    }

    public function addClip()
    {
        $content = $_POST['content'];
        $uid = $_SESSION['user_id'];
        $this->connection->query("insert into board values('','$uid','$content')");
    }

    public function login()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $emailcheck = $this->connection->query("select * from users where email='$email' and password='$password' ");
        $count = $emailcheck->num_rows;
        $values = $emailcheck->fetch_assoc();
        if ($count > 0) {
            $_SESSION['user_id'] = $values['id'];
            $_SESSION['name'] = $values['name'];
            echo "<script type='text/javascript'>";
            echo "window.location='home.php'";
            echo "</script>";
        } else {
            echo "<script type='text/javascript'>alert('Password not matched!');</script>";
        }

    }

    public function getClips()
    {
        $id = $_SESSION['user_id'];
        $qr = $this->connection->query("select id,content from board where user_id='$id'");
        $count = $qr->num_rows;
        $values = $qr->fetch_all(MYSQLI_ASSOC);
        if ($count > 0) {
            $data = array();
            $data[] = $values;
            return $data;
        }
    }
}