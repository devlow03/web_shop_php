<?php 
// xử lý sửa sản phẩm
include ('../../connect/conn.php');
$id_sp=$_GET["idsanpham"];
$ten_sp=$_POST['ten_sp'];
$gia_sp=$_POST['gia_sp'];
$s_l=$_POST['s_l'];
$noi_dung=$_POST['n_d'];
$tinh_trang=$_POST['tinh_trang'];
$noi_bat=$_POST['noi_bat'];
if (isset($_POST['suasp'])) {
    $sql_sua = "UPDATE SANPHAM SET tensanpham='$ten_sp',giasp='$gia_sp',soluong='$s_l',noidung='$noi_dung',tinhtrang='$tinh_trang',noibat='$noi_bat'
    where id_sanpham='$id_sp'";
    mysqli_query($conn, $sql_sua);
    header('location:../../index.php?action=qlsanpham&query=them');
}
?>