<?php

$data = getCategory($conn);

?>

<div class="menu">
    <ul class="list_menu">
        <li><a class="one" href="index.php">Trang chủ</a></li>
        <?php
        for ($i = 0; $i < count($data); $i++) {
        ?>
            <li><a class="one" href="index.php?quanly=dmsanpham&id=<?php echo $data[$i]['id_category'] ?>"><?php echo $data[$i]['name_type'] ?></a></li>
        <?php
        }
        ?>
        <li><a class="one" href="index.php?quanly=giohang">Giỏ hàng</a></li>
        <li><a class="one" href="index.php?quanly=donhang">Đơn hàng</a></li>
        <li><a class="one" href="admin/login.php">Đăng nhập</a></li>
    </ul>
    <div class="topnav">
        <div class="search-container">
            <form method="POST" action="index.php?quanly=timkiem">
                <input type="text" placeholder="Tìm kiếm.." name="tukhoa">
                <button type="submit" name="timkiem"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
</div>