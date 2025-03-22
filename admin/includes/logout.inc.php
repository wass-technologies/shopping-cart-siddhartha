<?php
include('../includes/db_autoload.inc.php');


if(isset($_POST['logout']))
{
    // echo $conn->error();
    echo '<script>location.href ="../index.php"</script>';

    // echo "Clicked on logouot";
}

?>