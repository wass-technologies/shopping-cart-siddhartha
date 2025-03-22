<?php
include ('includes/db_autoload.inc.php');
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shopping Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <!-- <h1>This is shopping Cart</h1> -->

    <!-- This is the start of navbar -->
    <?php include('includes/navbar.inc.php');?>
    <!-- This is end of navbar -->

    <!-- start for cards of products -->
     <div class="container mt-4">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="card" style="width: 18rem;">
            <img src="assets/images/dell_vostro14.avif" class="card-img-top mt-2" alt="...">
            <div class="card-body">
              <h5 class="card-title">Dell Vostro-14</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Buy &#8377 1000.99</a>
              <a href="#" class="btn btn-warning">Add to Cart</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card" style="width: 18rem;">
            <img src="assets/images/dell_pro16.avif" class="card-img-top mt-2" alt="...">
            <div class="card-body">
              <h5 class="card-title">Dell Pro 16 Plus</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Buy &#8377 1100.99</a>
              <a href="#" class="btn btn-warning">Add to Cart</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card" style="width: 18rem;">
            <img src="assets/images/dell_pro14.avif" class="card-img-top mt-2" alt="...">
            <div class="card-body">
              <h5 class="card-title">Dell Pro 14 Premium</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Buy &#8377 900.99</a>
              <a href="#" class="btn btn-warning">Add to Cart</a>
            </div>
          </div>
        </div>
      </div>
     </div>
     <!-- end of cards of products -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>