<?php

session_start();

$sql="SELECT * FROM productadd_tb";
$result=$conn->query($sql);
if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
        echo '<div class="col-lg-3 col-md-6">';
        echo '<div class="card" style="width: 18rem;">';
            echo '<img src="./admin/assets/productImages/'.$row['productImage'].'" class="card-img-top mt-2" alt="...">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">'.$row['productName'].'</h5>';
                echo '<p class="card-text">'.$row['productDescription'].'</p>';
// to change the form action for the addToCart and buyNow
                echo '<form action="" method="POST" class="form-group">
                <input type="hidden" name="productId" value ="'.$row['productId'].'">
                <button type="submit" class="btn btn-primary btn-md btn-block mr-2" name="buyProd">Buy &#8377 '.$row['productPrice'].'</button>

                <input type="hidden" name="productId" value ="'.$row['productId'].'">
                <button type="submit" class="btn btn-success btn-md btn-block" name="tocart">
                Add to Cart</button>
                </form>';

            echo '</div>';
        echo '</div>';
        echo '</div>';
    }
}
else
{
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            New items comming soon!!.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
}


if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['tocart']))
{
    $productId = $_POST['productId'];
    // this code is fetch the price of the item that is to be added
    $sql1 = "SELECT * FROM productadd_tb WHERE productId='".$productId."'";
    $result = $conn->query($sql);
    if($result->num_rows>0)
    {
        $row = $result->fetch_assoc();
        $productPrice= $row['productPrice'];
    }
    
    // this is the code to add the item to cart tb
    $sql2 = "INSERT INTO addtocart_tb(productId, ProductQuantity, productPrice)VALUES($productId, 1, $productPrice)";
    if($conn->query($sql2)===TRUE)
    {
        $msg = '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Product has been added to cart</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>' ;
    }
    else{
        $msg = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Please Try again</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>' ;
    }
}