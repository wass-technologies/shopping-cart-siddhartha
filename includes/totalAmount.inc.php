<?php

$sql ="SELECT SUM(productPrice*productQuantity) AS Total_price FROM addtocart_tb";

$result = $conn->query($sql);

$row=$result->fetch_assoc();

$Total_price = $row['Total_price'];

?>