<?php
$host="localhost";
$user="root";
$pass="";
$db="smart_store";
$conn = mysqli_connect($host,$user,$pass,$db);
mysqli_query($conn,"set names utf8");
if($conn)
    //echo "Kết nối thành công"
?>