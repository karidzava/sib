<?php
    require "connect.php";

    $the_cookie = $_COOKIE['user'];

    $product_price = $mysql->query("SELECT * FROM `product` WHERE `id` = {$_GET['id']}");

    

    while ( ($shop = mysqli_fetch_assoc($product_price)) )
        {
            $price = $shop['price'];
            $quantity = $shop['quantity'];
        }
	
    $update_summ = $mysql->query("UPDATE `user` SET `summ` = `summ` - $price WHERE `name` = '$the_cookie'");

    $update_quantity = $mysql->query("UPDATE `product` SET `quantity` = $quantity - 1 WHERE `id` = {$_GET['id']}");

    $mysql->close();
?>