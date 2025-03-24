<?php
  include('../includes/db_autoload.inc.php');
  session_start();
  if(isset($_SESSION['isLogin']))
  {
    $adminemail=$_SESSION['adminemail'];
  }
  else
  {
    echo '<script>location.href="dashboard.php"</script>';
  }
// including the sql query
  include('includes/addProd.inc.php');
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add-Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <style>
    .container
    {
      margin-left:200px;
      /* background-color: grey; */
      padding:20px;
      margin-top:40px;
    }
  </style>
  <body>
    <!-- <h1>Add Products</h1> -->
     <?php include('./includes/navbar.inc.php');?>

  <!-- start of form to add to product -->
   <div class="container">
    <div class="row">
      <div class="row">
        <div class="col-lg-6">
          <form action="" method="post" class="form-group" enctype="multipart/form-data">
            <label for="productName" class="form-label">Enter Product Name</label>
            <input type="text" name="productName" placeholder="Provide the product name" class="form-control">

            <label for="productPrice" class="form-label">Enter Product Price</label>
            <input type="text" name="productPrice" placeholder="Provide the product price" class="form-control" inputmode="decimal" pattern="[0-9]*[.,]?[0-9]*">

            <label for="productDescription" class="form-label">Enter Product Description</label>
            <!-- <input type="text" name="productDescription" placeholder="Provide a brief description" class="form-control"> -->
             <textarea name="productDescription" cols="20" rows="5" class="form-control"></textarea>

            <label for="productImage" class="form-label">Enter Product Image</label>
            <input type="file" name="productImage" class="form-control">

            <button type="submit" name="addProduct" class="btn btn-block btn-md btn-dark mt-5">ADD</button>
          </form>
        </div>
        <div class="col-lg-3 mt-5">
        <?php
          if(isset($msg))
          {
            echo $msg;
          }
        ?>
      </div>
      </div>
    </div>
   </div>
   <!-- end of form to add products -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>