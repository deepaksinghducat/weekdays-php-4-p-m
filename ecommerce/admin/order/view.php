<?php require_once '../layouts/header.php'; ?>
<?php require_once '../layouts/navigation.php'; ?>


<?php 
    spl_autoload_register(function($class){
        require '../classes/'.$class.'.php';
    });

    $databaseClass = new Database();
    
    $orderClass = new Order($databaseClass->connect());

    $addressClass = new Address($databaseClass->connect());

    $id = $_GET['id'];

    if(! isset($id) || $id == '' ) {
        header('Location: index.php');
    }

    $order = $orderClass->getOrdersByOrderId($id);

    $billingAddress = $addressClass->getAddressByCartId($order['cart_id'], 'billing');

    $shippingAddress = $addressClass->getAddressByCartId($order['cart_id'], 'shipping');

    $products = $orderClass->getProductItemsByOrderItemId($order['id']);

    // $images = $productImageClass->getProductImageByProductId($id);

    if(! $order) {
        header('Location: index.php');
    }
?>

<div class="container mt-2 mb-2">
    <div class="row">
        <div class="col-sm-2">
            <?php require_once '../layouts/sidebar.php'; ?>
        </div>
        <div class="col-sm-10">
            <h1>Order id</h1>

            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Order Summary
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    Order Created On
                                </div>
                                <div class="col-sm-9">
                                    <?=$order['created_at']?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    Sub Total
                                </div>
                                <div class="col-sm-9">
                                    $<?=$order['sub_total']?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-3">
                                   Tax
                                </div>
                                <div class="col-sm-9">
                                    $<?=$order['tax']?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-3">
                                   Grand Total
                                </div>
                                <div class="col-sm-9">
                                    $<?=$order['grand_total']?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item mt-2">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Shipping Details
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-group">
                                        <li class="list-group-item active" aria-current="true">Billing Details</li>
                                        <li class="list-group-item"><?=$billingAddress['address']?></li>
                                        <li class="list-group-item"><?=$billingAddress['city']?></li>
                                        <li class="list-group-item"><?=$billingAddress['state']?></li>
                                        <li class="list-group-item"><?=$billingAddress['country']?></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-group">
                                        <li class="list-group-item active" aria-current="true">Shipping Details</li>
                                        <li class="list-group-item"><?=$shippingAddress['address']?></li>
                                        <li class="list-group-item"><?=$shippingAddress['city']?></li>
                                        <li class="list-group-item"><?=$shippingAddress['state']?></li>
                                        <li class="list-group-item"><?=$shippingAddress['country']?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item mt-2">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Product Details
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">S No</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Quantity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($products as $key => $product): ?>
                                    <tr>
                                        <th scope="row"><?=$key + 1?></th>
                                        <td>
                                            <img src="../<?=$product['image_path']?>" alt="" height="50">
                                        </td>
                                        <td><?=$product['name']?></td>
                                        <td>$<?=$product['price']?></td>
                                        <td><?=$product['quantity']?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once '../../layouts/footer.php'; ?>