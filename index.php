<?php
include ('includes/db_autoload.inc.php');

if(isset($_SESSION['isLogin']))
{
  $adminemail=$_SESSION['adminemail'];
  echo $adminemail;
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shopping Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/index_main.css">
  </head>
  <body>
    <!-- <h1>This is shopping Cart</h1> -->

    <!-- This is the start of navbar -->
    <?php include('includes/navbar.inc.php');?>
    <!-- This is end of navbar -->

    <!-- start for cards of products -->
     <div class="container mt-4">
      <div class="row">

          <?php require('includes/showProduct.inc.php');?>
          <div class="col-g-3 col-md-6">
            <?php if(isset($msg)){echo $msg;}?>
          </div>
        </div>
     </div>
     <!-- end of cards of products -->
      <!-- start of footer -->

      <div class="container-fluid">
        <footer>
          <form action="" method="POST">
          <button type="submit" class="btn btn-sm btn-block text-white" name="admin_page">
            <a href="admin/dashboard.php">Go to Admin</a>
          </button>
        </form>
      </footer>
      </div>
       <!-- end of footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  </body>
</html>