<?php
    $sql_sua = "SELECT * FROM sanpham WHERE id_sanpham = '$_GET[idsanpham]' ";
    $query_sua = mysqli_query($conn,$sql_sua);
?>
<!--  Trang sửa sản phẩm -->
<P class="admin">Sửa danh mục sản phẩm</P>
<form method="POST" action="blocks/qlsanpham/xl.php?idsanpham=<?php echo $_GET['idsanpham'] ?>">
    <?php
        while($dong = mysqli_fetch_array($query_sua)){
    ?>
    <label class="demuc">Tên Sản Phẩm</label>
    <input type="text" id="danhmuc" value="<?php echo $dong['tensanpham']?>" name="ten_sp" required>
    <label class="demuc">Giá</label>
    <input type="text" id="danhmuc" value="<?php echo $dong['giasp']?>" name="gia_sp" required>
    <label class="demuc">Số Lượng</label>
    <input type="text" id="danhmuc" value="<?php echo $dong['soluong']?>" name="s_l" required>
    <label class="demuc">nội dung</label><br>
    <textarea type="text" id="danhmuc" name="n_d" required > <?php echo $dong['noidung']?> </textarea><br>
    </select>
    <label class="demuc">Tình trạng</label>
    <select name="tinh_trang">
        <option value="1">Kích hoạt</option>
        <option value="0">Ẩn</option>
    </select>
    <label class="demuc">Nổi bật</label>
    <select name="noi_bat">
        <option value="3">Không</option>
        <option value="2">Có</option>
    </select>
    
    <input type="submit" name="suasp" value="Sửa Sản Phẩm">
    <?php
        }
    ?>
</form>
