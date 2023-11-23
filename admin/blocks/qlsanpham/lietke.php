<?php
    $sql_lietke_sp = "SELECT * FROM sanpham, danhmuc WHERE sanpham.id_danhmuc=danhmuc.id_danhmuc ORDER BY id_sanpham ASC";
    $query_lietke_sp = mysqli_query($conn,$sql_lietke_sp);
?>
<!-- Liệt kê sản phẩm thêm vào thành công -->
<p class="lk">Liệt kê danh muc Sản phẩm</p>
<table id="table">
  <tr>
    <th>ID</th>
    <th>Tên sản phẩm</th>
    <th>Hình ảnh</th>
    <th>Giá SP</th>
    <th>Số lượng</th>
    <th>Danh mục</th>
    <th>Nội dung</th>
    <th>Trạng thái</th>
    <th>Nổi bật</th>
    <th>Quản lý</th>
  </tr>
<?php
$i = 0;
while($row = mysqli_fetch_array($query_lietke_sp)){
    $i++;
?>
  <tr>
    <td> <?php echo $i ?></td>
    <td><?php echo $row['tensanpham'] ?></td>
    <td><img src="blocks/qlsanpham/img/<?php echo $row['hinhanh'] ?>"width="150px"></td>
    <td><?php echo $row['giasp'] ?></td>
    <td><?php echo $row['soluong'] ?></td>
    <td><?php echo $row['tendanhmuc'] ?></td>
    <td><?php echo $row['noidung'] ?></td>
    <td><?php if($row['tinhtrang']==1){
        echo "Kích hoạt";
    }else{
        echo "Ẩn";
    }
    ?>
    </td>
    <td><?php if($row['noibat']==3){ 
        echo "Không";
    }else{
        echo "Có";
    }
    ?>
    </td>
    <td>
        <a href="?action=qlsanpham&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>">Sửa</a>
    </td>
  </tr>
<?php
}
?>
</table> 


