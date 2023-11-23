<?php
if($data = getOrder($conn)){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin đơn hàng</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .main-gh {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .title {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px;
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .fold-giohang {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
            margin-bottom: 10px;
        }

        .hinhanh-gh img {
            max-width: 80px;
            max-height: 80px;
        }

        .ten-sp, .gia-sp, .soluong {
            flex: 1;
            margin-left: 10px;
        }

        .frm-khachhang {
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        .btn-dathang {
            text-align: center;
            margin-top: 20px;
        }

        button {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }
    </style>
</head>
<body>

<div class="main-gh">
    <div class="title">
        <h3>Thông tin đơn hàng</h3>
    </div>

    <?php foreach ($data as $row): ?>
        <div class="fold-giohang">
            <div class="hinhanh-gh">
                <img src="<?php echo $row['thumbnail'] ?>" alt="Product Thumbnail">
            </div>
            <div class="ten-sp"><?php echo $row['name'] ?></div>
            <div class="gia-sp"><?php echo number_format($row['price'], 0, ",", ".") ?>₫ </div>
            <div class="soluong">Số lượng: <?php echo $row['quantity'] ?></div>
        </div>
    <?php endforeach; ?>

    <form action="" method="post" class="frm-khachhang">
        <div class="thongtin-kh">
            <h3>Thông tin khách hàng</h3>
        </div>
        <table>
            <tbody>
                <tr>
                    <td>
                        <input type="text" readonly name="hoten" autocomplete="off" value="Khách hàng: <?php echo $data[0]['fullname'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" readonly name="diachi" autocomplete="off" value="Địa chỉ: <?php echo $data[0]['ward'] . $data[0]['district'] . $data[0]['city'] ?>">
                    </td>
                    <td>
                        <input type="text" readonly name="sodt" autocomplete="off" value="Số điện thoại: <?php echo $data[0]['phone'] ?>">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p>Tổng tiền: <?php echo number_format($data[0]['total'], 0, ",", ".") ?>₫ </p>
                    </td>
                </tr>
                <tr>
                    <!-- Uncomment the following lines if you want to include a cancel order button -->
                    <!-- <td colspan="2" class="btn-dathang">
                        <a href=""><button type="button" name="xoadonhang">Hủy đơn hàng</button></a>
                    </td> -->
                </tr>
            </tbody>
        </table>
    </form>
</div>

</body>
</html>
<?php
}
else{
    echo 'Không có đơn hàng nào cả';
}