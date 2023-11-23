<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $data = getProductDetail($conn,$id);
    }
    
?>
<!-- Hiển thị chi tiết sản phẩm -->
<h3 class="ten"><?php echo $data['name'] ?></h3>
<div class="wrapper_ct">
    <div class="img_sp">
        <img width="70%" src="<?php echo $data['thumbnail'] ?>">
    </div>
    <form method="POST" action="index.php?quanly=sanpham&id=<?php echo $data['id']?>">
        <div class="chitiet">
            
            <p>Giá: <?php echo number_format($data['price'],0,',','.').'đ' ?></p>
            <p>Danh muc: <?php echo $data['name_type'] ?></p>
            <p>Nội dung: <?php echo $data['descript'] ?></p>
            <p><input class="them" name="addCart" type="submit" value="Mua ngay"></p>
        </div>
        <input type="hidden" name="id" value="<?php echo $data["id"] ?>">
    </form>
</div> 
<?php
   if(isset($_POST['addCart'])){
    $uid = $_COOKIE['uid'];
    addToCart($_POST,$conn,$uid);
    
   }
?>

