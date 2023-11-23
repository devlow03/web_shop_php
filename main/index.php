<?php
if(isset($_GET['trang'])){
    $page = $_GET['trang'];
}else{
    $page = '';
}
if($page == '' || $page == '1'){
    $begin = 0;
}else{
    $begin = ($page * 10) - 10;
}
?>
<?php
    $data = getProducts($conn);
    
?>
<!-- Hiển thị sản phẩm mới nhất ởn trang chủ -->
<h3>Sản phẩm mới nhất</h3>
    <ul class="product_list">
        <?php
            for ($i = 0; $i < count($data); $i++)  {
        ?>
        <li>
            <a href="index.php?quanly=sanpham&id=<?php echo $data[$i]['id'] ?>">
                <img src="<?php echo $data[$i]['thumbnail'] ?>">
                <p class="title_prouduct"><?php echo $data[$i]['name'] ?></p>
                <p class="price_product">Giá: <?php echo number_format($data[$i]['price'],0,',','.'). 'VND'?></p>
            </a>
        </li>
        <?php
            }
        ?>
    </ul>
 <!--    Phân trang -->

 
 