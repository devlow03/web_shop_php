<?php 

session_start();
session_destroy();

header("Location: login.php"); //chuyển hướng về trang đăng nhập

?>