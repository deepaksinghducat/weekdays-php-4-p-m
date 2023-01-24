<?php require_once '../layouts/header.php'; ?>
<?php require_once '../layouts/navigation.php'; ?>


<?php 
    spl_autoload_register(function($class){
        require '../classes/'.$class.'.php';
    });

    $databaseClass = new Database();
    
    $orderClass = new Order($databaseClass->connect());

    $orders = $orderClass->getOrders();
?>

<div class="container  mb-4">

    <div class="row">
        <div class="col-sm-2">
            <?php require_once '../layouts/sidebar.php'; ?>
        </div>
        <div class="col-sm-10">
            <h1>Order</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">S No</th>
                        <th scope="col">Order Id</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($orders as $key => $order): ?>
                        <tr>
                            <th scope="row"><?=$key + 1?></th>
                            <td>#<?=$order['id']?></td>
                            <td>$<?=$order['sub_total']?></td>
                            <td><a href="view.php?id=<?=$order['id']?>" class="btn btn-primary">View</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require_once '../../layouts/footer.php'; ?>