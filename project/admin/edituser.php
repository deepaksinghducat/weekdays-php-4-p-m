<?php $connection = require_once 'database.php'; ?>

<?php require_once 'class/user.php'; ?>

<?php

$id = (int) $_GET['id'];

if (!isset($_GET['id'])) {
    header("location: users.php");
}

$userClass = new User($connection);

$user = $userClass->getUserById($id);

if (! $user) {
    header("location: users.php");
}

?>

<?php require_once 'layouts/header.php'; ?>

<!-- Navbar -->
<?php require_once 'layouts/navbar.php'; ?>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<?php require_once 'layouts/aside.php'; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title" style="width: 100%;">Edit User
                <a href="posts.php" class="btn btn-primary" style="float: right;">Back</a>
            </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form action="updateuser.php" method="post" enctype="multipart/form-data">
                <input type="hidden" value="<?= $id ?>" name="user_id">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="<?= $user->name ?>">
                </div>
                <button class="btn btn-primary">Submit</button>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
</div>
<!-- /.content-wrapper -->

<?php require_once 'layouts/footer.php' ?>