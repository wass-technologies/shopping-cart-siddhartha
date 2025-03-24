<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./dashboard.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="./addProduct.php">Add Products</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown link
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </li>
                <?php if (isset($msg)){ echo 'welcome admin';}?>
            </ul>
            <form action="" method="POST">
                <button type="submit" class="btn btn-danger btn-sm btn-block"><a href="./includes/logout.inc.php" class="text-white">Logout</a></button>
            </form>
            </div>
        </div>
    </nav>

<style>
    .btn
    {
        text-color:white;
    }
    .btn>a{
        text-decoration: none;
        text-color:white;
    }

</style>