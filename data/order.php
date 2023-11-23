<?php
function createOrder($post, $total, $conn)
{
    $uid = $_COOKIE['uid'];
    $idOrder = "DH" . md5(uniqid(rand(), true));
    $fullname = $post['fullname'];
    $city = $post['city'];
    $district = $post['district'];
    $ward = $post['ward'];
    $phone = $post['phone'];
    $request = "INSERT INTO `order` (`id_order`, `fullname`, `city`,`district`,`ward`, `phone`, `total`, `userID`)VALUES ('$idOrder','$fullname','$city','$district','$ward','$phone','$total','$uid')";
    if (mysqli_query($conn, $request)) {
        $request = "SELECT * FROM cart inner join products on cart.id like products.id WHERE cart.userID =$uid";
        $response = mysqli_query($conn, $request);
        if ($response == true) {
            if (mysqli_num_rows($response) > 0) {
                while ($row = mysqli_fetch_array($response)) {
                    $data[] = $row;
                    $id = $row['id'];
                    $name = $row['name'];
                    $thumbnail = $row['thumbnail'];
                    $quantity = $row['quantity'];
                    $price = $row['price'];
                    echo $price;
                    createOrderDetails($idOrder, $id, $name, $thumbnail, $quantity, $price,$conn);

                    
                }
                
            }
        }
        
    }
}

function createOrderDetails($idOrder, $id, $name, $thumbnail, $quantity, $price,$conn){
    
    $request = "INSERT INTO `order_detail` (`id_order`, `id`, `name`, `thumbnail`, `quantity`, `price`) VALUES ('$idOrder','$id','$name','$thumbnail','$quantity','$price')";
    if(mysqli_query($conn,$request)){
        $uid = $_COOKIE['uid'];
        $request = "DELETE FROM cart WHERE userID = $uid";
        if(mysqli_query($conn,$request)){
            echo '<script type="text/javascript">
            Swal.fire({
                title: "Đặt hàng thành công!",
                icon: "success",
                timer: 2000,
                timerProgressBar: true,
                showConfirmButton: false,
                
            });
            </script>';
            echo '<meta http-equiv="refresh" content="0;url=index.php?quanly=donhang">';
        }
    }
    
    

}

function getOrder($conn){
    $uid = $_COOKIE['uid'];
    $request = "SELECT * FROM `order` INNER JOIN order_detail on `order`.`id_order`like order_detail.id_order WHERE `order`.userID =$uid";
    $response = mysqli_query($conn,$request);
    if ($response) {
        if (mysqli_num_rows($response) > 0) {
            while ($row = mysqli_fetch_array($response)) {
                $data[] = $row;
            }
            return $data;
        }
    }
    
}