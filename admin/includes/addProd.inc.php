<?php

 // start of code to add new product to database
 if($_SERVER['REQUET_METHOD']=='POST' && isset($_POST['addProduct']))
 {
   if(($_POST['productName']=="")||($_POST['productPrice']=="")||($_POST['productDescription']=="")||empty($_FILES['productImage']))
   {
     $msg='<div class="alert alert-warning alert-dismissible fade show" role="alert">
         <strong>Fill all Fields</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>';
   }
   else
   {
     $productName=$conn->real_escape_string($_POST['productName']);
     $productPrice=$conn->real_escape_string($_POST['productPrice']);
     $productDescription=$conn->real_escape_string($_POST['productDescription']);
     // image upload
     $productImage=$_FILES['productImage']['name'];
     $tmp_productImage=$_FILES['productImage']['tmp_name'];
     $productImage_size=$_FILES['productImage']['size'];
// sperate the extension
     $extension=explode(".",$productImage);
// permissible extension list
     $permit_ext=array("jpeg","jpg","png","avif");

     //check for file size

     if($productImage_size>15728640)
     {
       $msg='<div class="alert alert-warning alert-dismissible fade show" role="alert">
         Image size too big.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>';
     }
     else
     {
       // check if the supported file is uploaded or not
       if(in_array($extension[1],$permit_ext))
       {
      //    print_r($extension);
         move_uploaded_file($tmp_productImage,"./assets/productImages/".$productImage);
         $sql="INSERT INTO productadd_tb(productName, productPrice, productDescription, productImage)
               VALUES('$productName','$productPrice','$productDescription','$productImage')";

         if($conn->query($sql)===TRUE)
         {
           $msg='<div class="alert alert-success alert-dismissible fade show" role="alert">
           <strong>Product Added</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
           </div>'; 
         }
         else{
           $msg='<div class="alert alert-warning alert-dismissible fade show" role="alert">
         <strong>Failed to Add the product</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>';
         }
       }
       else{
         $msg='<div class="alert alert-warning alert-dismissible fade show" role="alert">
         Not the supported Image format<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>';

       }
     }
   }
 }