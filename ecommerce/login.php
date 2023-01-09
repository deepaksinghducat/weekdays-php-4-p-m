<?php require_once 'layouts/header.php'; ?>
<?php require_once 'layouts/navigation.php'; ?>

<?php

spl_autoload_register(function ($class) {
    require './admin/classes/' . $class . '.php';
});

$databaseClass = new Database();

$customerClass = new Customer($databaseClass->connect());

if (isset($_POST['login'])) {

    $data = $_POST;

    $customer = $customerClass->login($data);

    if ($customer) {
        $_SESSION['success'] = 'Registeration successfully';
        $_SESSION['current_customer'] = $customer;

        header('Location: ./admin/index.php');
    } else {
        $_SESSION['error'] = 'Credentials Not matched';
    }
}

?>

<style>
    .login {
        width: 50%;
        border: 2px solid #0d6efd;
        margin: 10px auto;
        padding: 20px
    }

    input {
        border-color: #1374d687 !important;
    }
</style>

<div class="container mt-4  mb-4">
    <form action="" method="POST" class="login">
        <h1 class="text-center">Login</h1>
        <div class="row">

            <div class="mb-3 col-sm-12">
                <label for="email" class="col-form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>

            <div class="mb-3 col-sm-12">
                <label for="password" class="col-form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>

            <div class="mb-3 col-sm-12">
                <input type="submit" name="login" value="Submit" class="btn btn-primary">
            </div>

        </div>
    </form>

</div>

<?php require_once 'layouts/footer.php'; ?>