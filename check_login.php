<?php
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
   
    //$password = md5($password."asd343313r3435");

    require "connect.php";

    $result = $mysql->query("INSERT INTO `user` (`name`, `password`) VALUES ('$name', '$password')");

    $mysql->close();
    
    header('Location: account.php');
?>