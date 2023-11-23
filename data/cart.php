<?php

function addToCart($post, $conn)
{
    $id = $post['id'];
    $quantity = 1;
    $uid = $_COOKIE['uid'];

    $request = "SELECT * FROM cart WHERE userId='$uid' AND id='$id'";
    $response = mysqli_query($conn, $request);

    if (mysqli_num_rows($response) <= 0) {
        $request = "INSERT INTO cart (userId, id, quantity) VALUES ('$uid', '$id', '$quantity')";
        mysqli_query($conn, $request);
    } else {
        while ($row = mysqli_fetch_array($response)) {
            $quantity = $row['quantity'] + $quantity;
            $request = "UPDATE cart SET quantity=$quantity WHERE cart.userId='$uid' AND cart.id='$id'";
            mysqli_query($conn, $request);
        }
    }

    
    echo '<script type="text/javascript">
    Swal.fire({
        title: "Đã thêm sản phẩm vào giỏ hàng!",
        icon: "success",
        timer: 2000,
        timerProgressBar: true,
        showConfirmButton: false,
        
    });
    </script>';
    echo '<meta http-equiv="refresh" content="0;url=index.php?quanly=giohang">';
    
    exit(); // Đảm bảo không có mã lệnh nào thực hiện sau lệnh header
}


function getCart($conn){
    $uid = $_COOKIE['uid'];
    $response = mysqli_query($conn, "SELECT * FROM cart inner join products on cart.id like products.id WHERE cart.userID =  $uid ORDER BY idCart DESC");
    if ($response) {
        if (mysqli_num_rows($response) > 0) {
            while ($row = mysqli_fetch_array($response)) {
                $data[] = $row;
            }
            return $data;
        }
    }
    
}


