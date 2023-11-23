<?php
include '../../connect/conn.php';

// xử lý thêm, sửa và xóa sản phẩm
$a = $_POST['tendm'];
//them
if(isset($_POST['themdm'])){
    $sql_add = "INSERT INTO danhmuc(tendanhmuc) VALUES('".$a."')";
    mysqli_query($conn,$sql_add);
    header('location:../../index.php?action=qldmsanpham&query=them');
//sua
}elseif(isset($_POST['suadm'])){
    $sql_up = "UPDATE danhmuc SET tendanhmuc ='".$a."' where id_danhmuc = '$_GET[iddanhmuc]'";
    mysqli_query($conn,$sql_up);
    header('location:../../index.php?action=qldmsanpham&query=them');
}else{
    //xoa
    $id=$_GET['iddanhmuc'];
    $sql_xoa = "DELETE FROM danhmuc WHERE id_danhmuc = '".$id."'";
    mysqli_query($conn,$sql_xoa);
    header('location:../../index.php?action=qldmsanpham&query=them');
}
?>
