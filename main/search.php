<?php
    if(isset($_POST['timkiem'])){
        $keyword=$_POST['tukhoa'];
        $data = search($conn,$keyword);
    }
    
    
?>
<!-- Hiển thị sản phẩm tìm kiếm -->
<h3>Tìm kiếm: <?php echo $keyword ?> </h3>
    <ul class="product_list">
        <?php
            for ($i = 0; $i < count($data); $i++)  {
                $row = $data[$i];
        ?>
        <li>
            <a href="index.php?quanly=sanpham&id=<?php echo $row['id'] ?>">
                <img src="<?php echo $row['thumbnail'] ?>">
                <p class="title_prouduct"><?php echo $row['name'] ?></p>
                <p class="price_product">Giá: <?php echo number_format($row['price'],0,',','.'). 'VND'?></p>
            </a>
        </li>
        <?php
            }
        ?>
    </ul>