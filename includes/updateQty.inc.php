<?php
// session_start();
if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['qty']))
{
    $sNo = $_POST['sNo'];
    $input_qty = $_POST['input-qty'];
    // echo $input_qty;

    if($input_qty>0 && $input_qty<10)
    {
        $sql = "UPDATE addtocart_tb SET productQuantity=$input_qty WHERE sNo =$sNo";

        if($conn->query($sql)===TRUE)
        {
            echo '<script>location.href="addToCart.inc.php"</script>';
        }
    }
}