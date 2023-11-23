
<?php
function getCategory($conn)
{

    $response = mysqli_query($conn, "SELECT * FROM `category`");
    if ($response) {
        if (mysqli_num_rows($response) > 0) {
            while ($row = mysqli_fetch_array($response)) {
                $data [] = $row;
            }
        }
       
    }
    return $data;
    
}
