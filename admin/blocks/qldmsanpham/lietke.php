<?php
    $sql_lietke = "SELECT * FROM danhmuc ORDER BY id_danhmuc ASC";
    $query_lietke = mysqli_query($conn, $sql_lietke);
?>
<p class="lk">Danh mục sản phẩm</p>

<table id="table">
  <tr>
    <th width="7%">ID</th>
    <th>Tên danh mục</th>
    <th>Tùy chọn</th>
  </tr>
<?php
$i = 0;
while($row = mysqli_fetch_array($query_lietke)){
    $i++;
?>
  <tr>
    <td> <?php echo $i ?></td>
    <td><?php echo $row['tendanhmuc'] ?></td>
    <td>
        <a href="blocks/qldmsanpham/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Xóa</a> | 
        <a href="?action=qldmsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Sửa</a>
    </td>
  </tr>
<?php
}
?>
</table> 

