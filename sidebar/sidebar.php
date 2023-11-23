
<div class="sidebar">
<h3>Sản phẩm nổi bật</h3>

    <ul class="list_sidebar">
    <?php
        $sql_product = "SELECT * FROM sanpham, danhmuc where sanpham.id_danhmuc=danhmuc.id_danhmuc and noibat='2'  order by id_sanpham  desc limit 0,2";
        $query_product = mysqli_query($conn, $sql_product);
        while ($row = mysqli_fetch_array($query_product)) {
    ?>
         <li>
            <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
                <img src="admin/blocks/qlsanpham/img/<?php echo $row['hinhanh'] ?>">
                <p class="title_prouduct"><?php echo $row['tensanpham'] ?></p>
                <p class="price_product">Giá: <?php echo number_format($row['giasp'],0,',','.'). 'VND'?></p>
            </a>
        </li>
    <?php
    }
    ?>
    </ul>
</div>
