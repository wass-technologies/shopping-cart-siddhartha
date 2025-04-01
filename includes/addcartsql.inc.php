<?php
// session_start();
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
        $sNo=$row['sNo'];
        
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
                                    <form action ="" method="POST">
                                        <div class="input-group mb-3" style="width:130px">
                                            <button class="input-group-text decrement-btn">-</button>
                                            <input type="number" class="form-control bg-white text-center" value="'.$productQuantity.'" name="input-qty">
                                            <button class="input-group-text increment-btn">+</button>
                                            <input type="hidden" name="sNo" value="'.$sNo.'">
                                            <br>
                                            <button type="submit" class="btn btn-sm btn-success text-white mt-3" name="qty">Confirm</button>
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


include('./updateQty.inc.php');




