<h4>Giỏ hàng</h4>
<table id="table">
  <tr>
    <th>ID</th>
    <th>Mã SP</th>
    <th>Tên sản phẩm</th>
    <th>Hình ảnh</th>
    <th>Số lượng</th>
    <th>Giá sản phẩm</th>
    <th>Thành tiền</th>
    <th>Quản lý</th>
  </tr>
<?php
  $data = [];
  if($data = getCart($conn)){
    $sum = 0;
    for ($i = 0; $i < count($data); $i++)  {
      $row = $data[$i];
 
 
    
?>




  <tr>
    <td><?php echo $row['idCart'] ?></td>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><img width="150px" src="<?php echo $row['thumbnail']; ?>"></td>
    <td>
      <a href="main/themgiohang.php?cong=<?php echo $row['id']; ?>"><i class="fa-solid fa-plus"></i></a>
      <span class="soluong"><?php echo $row['quantity']; ?></span>
      <a href="main/themgiohang.php?tru=<?php echo $row['id']; ?>"><i class="fa-solid fa-minus"></i></a>
    </td>
    <td><?php echo number_format($row['price'],0,',','.').'đ'; ?></td>
    <td><?php echo number_format($row['quantity'] * $row['price'],0,',','.').'đ' ?></td>
    <td><a href="main/themgiohang.php?xoa=<?php echo $row['id']; ?>">Xóa</a></td>
  </tr>
  <?php 
  $sum += $row['quantity'] * $row['price'];
  }
  
  ?>

    <tr>
        <td colspan="8">
            <p style="float: left;">Tổng tiền <?php echo number_format($sum ,0,',','.').'đ' ?></p>
            <p style="float: right;"><a href="main/themgiohang.php?xoatatca=1">Xóa tất cả </a></p>
        </td>
    </tr>

</table>


<style>
  form {
    max-width: 400px;
    margin: 0 auto;
    font-family: Arial, sans-serif;
  }

  h4 {
    text-align: center;
    color: #333;
  }

  label {
    display: block;
    margin-top: 10px;
    color: #555;
  }

  input {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    margin-bottom: 15px;
    box-sizing: border-box;
  }

  input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    cursor: pointer;
  }

  input[type="submit"]:hover {
    background-color: #45a049;
  }
</style>

<form action="index.php?quanly=giohang" method="post">
  <h4>Thông tin đặt hàng</h4>

  <!-- Thêm các trường thông tin liên quan đến đặt hàng, ví dụ: -->
  <label for="name">Họ và tên:</label>
  <input type="text" id="name" name="fullname" required>

  <label for="phone">Điện thoại:</label>
  <input type="phone" id="phone" name="phone" required>

  <label for="city">Tỉnh / Thành phố:</label>
  <input type="text" id="city" name="city" required>

  <label for="district">Quận / Huyện:</label>
  <input type="text" id="district" name="district" required>

  <label for="ward">Phường / Xã:</label>
  <input type="text" id="ward" name="ward" required>

  <!-- Các trường khác có thể thêm tùy vào yêu cầu của bạn -->

  <!-- Nút đặt hàng -->
  <input type="submit" value="Đặt hàng" name="order">
</form>
<?php
if(isset($_POST['order'])){
  createOrder($_POST,$sum,$conn);
}
  }
  else{
    echo "Không có sản phẩm trong giỏ hàng";
  }
