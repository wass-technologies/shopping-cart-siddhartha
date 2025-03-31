<?php
require('../includes/db_autoload.inc.php');
// to check for same product id from both the table
$sql ="SELECT * FROM addtocart_tb";
$res1 = $conn->query($sql);
if($res1->num_rows>0)
{
    while($row = $res1->fetch_assoc())
    {
        $productId =$row['productId'];
        $productQuantity = $row['productQuantity'];
        // echo $productQuantity;
        // echo $productId;
        $sql2 = "SELECT productName, productPrice FROM productadd_tb WHERE productId ='".$productId."'";
        $res2 = $conn->query($sql2);
        if($res2->num_rows>0)
        {
            $row = $res2->fetch_assoc();
            $productName = $row['productName'];
            $productPrice = $row['productPrice'];

            // echo $productName;
            // echo $productPrice;
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add to cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h3>This is show to cart page</h3>

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
</body>
</html>