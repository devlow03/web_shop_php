<?php
include ('../../connect/conn.php');

$tensp = $_POST['tensanpham'];
$giasp = $_POST['giasp'];
$soluong = $_POST['soluong'];
//anh
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time().'_'.$hinhanh;
$noidung = $_POST['noidung'];
$tinhtrang = $_POST['tinhtrang'];
$noibat=$_POST['noibat'];
$danhmuc = $_POST['danhmuc'];
 
//xử lý thêm sản phẩm
if (isset($_POST['themsp'])) {
    $sql_them = "INSERT INTO sanpham (tensanpham, giasp, soluong, hinhanh, noidung, tinhtrang, noibat, id_danhmuc) 
    VALUES ('$tensp', '$giasp', '$soluong', '$hinhanh', '$noidung', '$tinhtrang', '$noibat', '$danhmuc')";
    mysqli_query($conn, $sql_them);
    move_uploaded_file($hinhanh_tmp, 'img/'.$hinhanh);
    header('location:../../index.php?action=qlsanpham&query=them');
}
?>