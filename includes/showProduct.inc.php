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
                echo '<a href="#" class="btn btn-primary">Buy &#8377 '.$row['productPrice'].'</a>';
                echo '<a href="#" class="btn btn-warning">Add to Cart</a>';
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