<?php
    $sql_sua = "SELECT * FROM danhmuc WHERE id_danhmuc = '$_GET[iddanhmuc]' LIMIT 1";
    $query_sua = mysqli_query($conn,$sql_sua);
?>

<P class="admin">Sửa danh mục sản phẩm</P>

<form method="POST" action="blocks/qldmsanpham/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>">
    <?php
        while($dong = mysqli_fetch_array($query_sua)){
    ?>
    <label class="demuc">Tên danh mục</label>
    <input type="text" id="danhmuc" value="<?php echo $dong['tendanhmuc']?>" name="tendm" required>
    <label class="demuc">ID</label>
    <input type="text" id="danhmuc" value="<?php echo $dong['id_danhmuc']?>" name="" disabled >
    <input type="submit" name="suadm" value="Sửa danh mục">
    <?php
        }
    ?>
</form>
