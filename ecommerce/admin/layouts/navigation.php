<nav class="navbar bg-primary navbar-expand-lg" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand" href="../index.php">Ecommerce</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <form class="d-flex" style="margin-left: 10%;width: 60%;" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-success" type="submit">Search</button>
        </form>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                    <a class="nav-link" href="../cart.php">Cart</a>
                </li>    

                    <?php if(isset($_SESSION['current_user'])): ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?=$user['first_name']?>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="index.php">Profile</a></li>
                                <li><a class="dropdown-item" href="order.php">Orders</a></li>
                                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                            </ul>
                        </li>
                    <?php endif;?>
            </ul>
        </div>

    </div>
</nav>