<P class="admin">Thêm sản phẩm</P>

<form method="POST" action="blocks/qlsanpham/xuly.php" enctype="multipart/form-data">
    <label class="demuc">Tên sản phẩm</label>
    <input type="text" id="danhmuc" name="tensanpham" required>

    <label class="demuc">Giá sản phẩm</label>
    <input type="text" id="danhmuc" name="giasp" required>

    <label class="demuc">Số lượng</label>
    <input type="text" id="danhmuc" name="soluong" required>

    <label class="demuc">Hình ảnh</label>
    <input type="file" id="file_photo" name="hinhanh"> <br>

    <label class="demuc">Nội dung</label> <br>
    <textarea name="noidung" style="resize:none"></textarea> <br>

    <label class="demuc">Danh mục</label> 
    <select name="danhmuc">
    <?php
        $sql_danhmuc = "SELECT * FROM danhmuc ORDER BY id_danhmuc DESC";
        $query_danhmuc = mysqli_query($conn, $sql_danhmuc);
        while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
    ?>
        <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
    <?php
        }
    ?>
    </select>
    <label class="demuc">Tình trạng</label>
    <select name="tinhtrang">
        <option value="1">Kích hoạt</option>
        <option value="0">Ẩn</option>
    </select>
    </select>
    <label class="demuc">Nổi bật</label>
    <select name="noibat">
        <option value="3">Không</option>
        <option value="2">Có</option>
    </select>
    <input type="submit" name="themsp" value="Thêm sản phẩm">
</form>