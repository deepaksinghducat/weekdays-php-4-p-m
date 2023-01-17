<?php require_once 'layouts/header.php'; ?>
<?php require_once 'layouts/navigation.php'; ?>


<?php
spl_autoload_register(function ($class) {
    require './admin/classes/' . $class . '.php';
});

$cartId = isset($_SESSION['cart_id']) ? (int)$_SESSION['cart_id'] : 0;

$databaseClass = new Database();

$addressClass = new Address($databaseClass->connect());


if (isset($_POST['proceed'])) {

    try {
        $biling = $_POST['billing'];
        $biling['type'] = 'billing';
    
        $addressClass->storeAddressByCartId($biling,$cartId);
    
        $shipping = $_POST['shipping'];
        $shipping['type'] = 'shipping';
    
        $addressClass->storeAddressByCartId($shipping,$cartId);
    
    } catch (\Throwable $th) {
        $_SESSION['error'] = "Something went wrong";
        header("Location: cart.php");
    }
    

  
}

?>

<div class="container mt-4  mb-4">
    <div class="row">
        <div class="col-sm-8">
            <form action="" method="post">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Billing Address
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" class="form-control" id="address" name="billing[address]">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="city" class="form-label">city</label>
                                        <input type="text" class="form-control" id="city" name="billing[city]">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="state" class="form-label">state</label>
                                        <input type="text" class="form-control" id="state" name="billing[state]">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="country" class="form-label">country</label>
                                        <input type="text" class="form-control" id="country" name="billing[country]">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mt-1">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Shipping Address
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" class="form-control" id="address" name="shipping[address]">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="city" class="form-label">city</label>
                                        <input type="text" class="form-control" id="city" name="shipping[city]">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="state" class="form-label">state</label>
                                        <input type="text" class="form-control" id="state" name="shipping[state]">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="country" class="form-label">country</label>
                                        <input type="text" class="form-control" id="country" name="shipping[country]">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button name="proceed" class="btn btn-primary mt-2">Proceed</button>
                </div>
            </form>
        </div>
        <div class="col-sm-4">
            <ul class="list-group">
                <li class="list-group-item active" aria-current="true">Order Summary</li>
                <li class="list-group-item d-flex justify-content-between">
                    <div>Subtotal:</div>
                    <div>$10.00</div>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <div>Tax:</div>
                    <div>$10.00</div>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <div>Grand total:</div>
                    <div>$10.00</div>
                </li>
            </ul>
        </div>
    </div>
</div>

<?php require_once 'layouts/footer.php'; ?>