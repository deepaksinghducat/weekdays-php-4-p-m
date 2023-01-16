<?php require_once 'layouts/header.php'; ?>
<?php require_once 'layouts/navigation.php'; ?>

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
                                        <input type="text" class="form-control" id="address" placeholder="name@example.com">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="city" class="form-label">city</label>
                                        <input type="text" class="form-control" id="city" placeholder="name@example.com">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="state" class="form-label">state</label>
                                        <input type="text" class="form-control" id="state" placeholder="name@example.com">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="country" class="form-label">country</label>
                                        <input type="text" class="form-control" id="country" placeholder="name@example.com">
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
                                        <input type="text" class="form-control" id="address" placeholder="name@example.com">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="city" class="form-label">city</label>
                                        <input type="text" class="form-control" id="city" placeholder="name@example.com">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="state" class="form-label">state</label>
                                        <input type="text" class="form-control" id="state" placeholder="name@example.com">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="country" class="form-label">country</label>
                                        <input type="text" class="form-control" id="country" placeholder="name@example.com">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary mt-2">Proceed</button>
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