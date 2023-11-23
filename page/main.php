<div id=main>
    
    <div class="maincontent"><!--Thân trang-->
        <?php
        if(isset($_GET['quanly'])){
            $tam=$_GET['quanly'];
        }else{
            $tam='';
        }
        if($tam=='dmsanpham'){
            include("main/danhmuc.php");
        }elseif($tam=='lienhe'){
            include("main/lienhe.php");
        }elseif($tam=='sanpham'){
            include("main/sanpham.php");
        }elseif($tam=='giohang'){
            include("main/giohang.php");
        }elseif($tam=='donhang'){
            include("main/donhang.php");
        }elseif($tam=='timkiem'){
                include("main/search.php");
        }else{
            include("main/index.php");
        }
        ?>
    </div>
</div>



