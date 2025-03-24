<?php
include('../../includes/db_autoload.inc.php');

session_start();
session_destroy();

echo '<script>location.href="../index.php"</script>';
?>