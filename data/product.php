<?php
function getProducts($conn)
{
    $response = mysqli_query($conn, "SELECT * FROM `products`");
    if ($response) {
        if (mysqli_num_rows($response) > 0) {
            while ($row = mysqli_fetch_array($response)) {
                $data[] = $row;
            }
        }
    }
    return $data;
}
function getProductByCategory($conn, $idCategory)
{
    $response = mysqli_query($conn, "SELECT * FROM products inner join category on products.id_category like category.id_category WHERE products.id_category=$idCategory");
    if ($response) {
        if (mysqli_num_rows($response) > 0) {
            while ($row = mysqli_fetch_array($response)) {
                $data[] = $row;
            }
        }
    }
    return $data;
}

function getProductDetail($conn, $id)
{
    $response = mysqli_query($conn, "SELECT * FROM products inner join category on products.id_category like category.id_category WHERE products.id=$id");
    if ($response) {
        if (mysqli_num_rows($response) > 0) {
            $data = mysqli_fetch_array($response);
        }
    }
    return $data;
}

function search($conn,$key){
    $response = mysqli_query($conn, "SELECT * FROM products WHERE name LIKE '%".$key."%'");
    if ($response) {
        if (mysqli_num_rows($response) > 0) {
            while ($row = mysqli_fetch_array($response)) {
                $data[] = $row;
            }
        }
    }
    return $data;
}
