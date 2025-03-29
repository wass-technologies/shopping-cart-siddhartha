<?php

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
                echo '<form action="" method="POST" class="form-group">
                <input type="hidden" name="productId" value ="'.$row['productId'].'">
                <button type="submit" class="btn btn-primary btn-md btn-block mr-2" name="buyProd">Buy &#8377 '.$row['productPrice'].'</button></form>';
                echo '<form action="" method="POST" class="form-group d-flex">
                <input type="hidden" name="productId" value ="'.$row['productId'].'">
                <button type="submit" class="btn btn-success btn-md btn-block" name="tocart">Add to Cart</button></form>';
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

include('addToCart.inc.php');

