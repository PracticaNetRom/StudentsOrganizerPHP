<?php
    require_once('connection.php');
    $db_name="studenti";
    $user=$_POST['username'];//iau datele din formularul de logare
    $pass=$_POST['password'];

    $user = mysql_real_escape_string($user);
    $pass = mysql_real_escape_string($pass);

    $sql="select *from users a where a.Username='$user' and a.Password='$pass';";
    $result=mysql_query($sql);
    $count=mysql_num_rows($result);
    if($count==1){
        session_start();

        $_SESSION["username"]=$user;
        $_SESSION["password"]=$pass;
        header("location:index.php");
    }else{
        echo "Wrong login info";
    }
?>