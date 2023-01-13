<?php require_once 'layouts/header.php'; ?>
<?php require_once 'layouts/navigation.php'; ?>

<?php
    spl_autoload_register(function ($class) {
        require './admin/classes/' . $class . '.php';
    });

    $id = $_GET['id'];

    if (!isset($id) || $id == '') {
        header('Location: index.php');
    }

    $databaseClass = new Database();

    $productClass = new Product($databaseClass->connect());

    $productImageClass = new ProductImage($databaseClass->connect());


    $product = $productClass->getProductById($id);

    $images = $productImageClass->getProductImageByProductId($id);

    if (!$product) {
        header('Location: index.php');
    }
?>

<div class="container mt-2  mb-2">
    <div class="row">
        <div class="col-sm-6">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php foreach ($images as $key => $value) : ?>
                        <div class="carousel-item <?php if ($key == 0) echo 'active' ?>">
                            <img src="admin/<?= $value['image_path'] ?>" class="d-block w-100" alt="...">
                        </div>
                    <?php endforeach; ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-sm-6">
            <h2><?= $product['name'] ?></h2>
            <p>$<?= $product['price'] ?></p>
            <p>
                <?= $product['description'] ?>
            </p>
            <a href="addtocart.php?id=<?=$product['id']?>" class="btn btn-primary">Add to Cart</a>
        </div>
    </div>
</div>

<?php require_once 'layouts/footer.php'; ?>