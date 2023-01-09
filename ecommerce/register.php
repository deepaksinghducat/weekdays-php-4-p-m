<?php require_once 'layouts/header.php'; ?>
<?php require_once 'layouts/navigation.php'; ?>

<?php

spl_autoload_register(function ($class) {
    require './admin/classes/' . $class . '.php';
});

$databaseClass = new Database();

$customerClass = new Customer($databaseClass->connect());

if (isset($_POST['register'])) {

    $data = $_POST;

    $result = $customerClass->register($data);

    if ($result) {
        $_SESSION['success'] = 'Registeration successfully';
    } else {
        $_SESSION['error'] = 'Something went wrong';
    }

    header('Location: login.php');
}

?>


<style>
    .register {
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
    <form action="" method="POST" class="register">
        <h1 class="text-center">Register</h1>
        <div class="row">

            <div class="mb-3 col-sm-12">
                <label for="first_name" class="col-form-label">First Name</label>
                <input type="text" class="form-control" name="first_name" id="first_name">
            </div>

            <div class="mb-3 col-sm-12">
                <label for="last_name" class="col-form-label">Last Name</label>
                <input type="text" class="form-control" name="last_name" id="last_name">
            </div>

            <div class="mb-3 col-sm-12">
                <label for="email" class="col-form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>

            <div class="mb-3 col-sm-12">
                <label for="password" class="col-form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>

            <div class="mb-3 col-sm-12">
                <input type="submit" name="register" value="Submit" class="btn btn-primary">
            </div>

        </div>
    </form>

</div>

<?php require_once 'layouts/footer.php'; ?>