<?php
require('../includes/db_autoload.inc.php');
// to check for same product id from both the table
$sql ="SELECT * FROM addtocart_tb";
$res1 = $conn->query($sql);
// initilize the $msg variable so that the each msg content is not overwritten in the loop
$msg ='';

if($res1->num_rows>0)
{
    while($row = $res1->fetch_assoc())
    {
        $productId =$row['productId'];
        $productQuantity = $row['productQuantity'];
        
        $sql2 = "SELECT productName, productPrice, productImage FROM productadd_tb WHERE productId ='".$productId."'";
        $res2 = $conn->query($sql2);
        if($res2->num_rows>0)
        {
            while($row2 = $res2->fetch_assoc())
            {
                $productName = $row2['productName'];
                $productPrice = $row2['productPrice'];
                $productImage = $row2['productImage'];

                $msg .= '<div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                <img src="../admin/assets/productImages/'.$productImage.'" class="img-fluid rounded-start mt-2" alt="...">
                                </div>
                                <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">'.$productName.'</h5>
                                    <p class ="card-text" name="price">Price ₹'.$productPrice.'</p>
                                    <form action ="" metho="POST">
                                        <div class="input-group mb-3" style="width:130px">
                                            <button class="input-group-text decrement-btn">-</button>
                                            <input type="number" class="form-control bg-white text-center input-qty" disabled value="'.$productQuantity.'">
                                            <button class="input-group-text increment-btn">+</button>
                                        </div>
                                    </form>
                                </div>
                                </div>
                            </div>
                        </div>';
            }

        }
        else
        {
            $msg = '<div class="alert alert-warning" role="alert">Nothing in the cart right now</div>';
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
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <?php if(isset($msg)){echo $msg;}?>
            </div>
        </div>
    </div>
<script src="../assets/js/custom.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
</body>
</html>
