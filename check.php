<?php
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
   
    //$password = md5($password."asd343313r3435");

    require "connect.php";

    $result = $mysql->query("SELECT * FROM `user` WHERE `name` = '$name' AND `password` = '$password'");

    $user = $result->fetch_assoc();

    if(count($user) == 0)
    {
        echo "Пользователь не найден";
        exit();
    }

    setcookie('user', $user['name'], time() + 3600* 24, "/");

    $mysql->close();
    
    header('Location: account.php');
?>