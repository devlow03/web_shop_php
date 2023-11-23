<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $data = getProductByCategory($conn,$id);
    }
    
?>
<!-- Hiển thị sản phẩm theo danh mục -->
<h3>Sản phẩm: <?php echo $data[1]['name_type'] ?> </h3>
<ul class="product_list">
    <!--Vòng lặp-->
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