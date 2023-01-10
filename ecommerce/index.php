<?php require_once 'layouts/header.php'; ?>
<?php require_once 'layouts/navigation.php'; ?>

<?php

    spl_autoload_register(function ($class) {
        require './admin/classes/' . $class . '.php';
    });

    $databaseClass = new Database();

    $productClass = new Product($databaseClass->connect());

    $products = $productClass->getAllProductsWithImages();

?>

<div class="container  mb-4">
    <div class="row">
        <?php foreach ($products as $product) : ?>
            <div class="col-sm-3 mt-4">
                <div class="card">
                    <img src="admin/<?= $product['image_path'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $product['name'] ?></h5>
                        <p class="card-text"><?= $product['short_description'] ?></p>
                        <a href="product.php?id=<?= $product['id'] ?>" class="btn btn-primary">View More</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <ul class="pagination mt-2">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
</div>

<?php require_once 'layouts/footer.php'; ?>