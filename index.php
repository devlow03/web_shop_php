<?php
 require "config/conn.php";
 require "data/category.php";
 require "data/product.php";
 require "data/cart.php";
 require "data/order.php";
 $uid=$_COOKIE['uid'];
        if($_COOKIE['uid'] == null){
            $uid=rand(0,10000000); 
        }
        // tạo cookies với php
        setcookie('uid',$uid, time() + (86400 * 30), "/");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/giohang.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <title>Bán Hàng</title>
</head>
<body>
    <div class="wrapper"> 
        <?php
            include "page/header.php";
            include "page/menu.php";
            include "page/main.php";
            include "page/footer.php";
        ?>
    </div>
</body>
</html>