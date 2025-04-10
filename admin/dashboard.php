<?php
include ('../includes/db_autoload.inc.php');
session_start();
if(isset($_SESSION['isLogin']))
{
  $adminemail= $_SESSION['adminemail'];
}
else{
  // echo '<script>location.href="index.php"</script>';
  header('Location: index.php');
}

if(isset($_POST['admin_page']))
{
  if(isset($_SESSION['isLogin']))
  {
    echo '<script>window.alert("Returned to Admin dashboard")</script>';
  }
  else
  {
    // echo '<script>location.href="index.php"</script>';
    header('Location: index.php');
  }
}

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
    <!-- This is the start of navbar -->
    <?php include('includes/navbar.inc.php'); ?>
    <!-- This is end of navbar -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
