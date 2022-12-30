<?php require_once 'session.php'; ?>

<?php $connection = require_once 'database.php'; ?>

<?php require_once 'class/user.php'; ?>

<?php

$userClass = new User($connection);

$users = $userClass->getAllUsers();

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
            <h3 class="card-title" style="width: 100%;">User</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user) : ?>
                        <tr>
                            <td><?= $user['id'] ?></td>
                            <td><?= $user['name'] ?></td>
                            <td><?= $user['created_at'] ?></td>
                            <td>
                                <a href="edituser.php?id=<?= $user['id'] ?>" class="btn btn-primary">
                                    <i class="fa fa-eye"></i>
                                </a>

                                <a href="deleteuser.php?id=<?= $user['id'] ?>" onclick="deleteRedirect(event)" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
</div>
<!-- /.content-wrapper -->

<?php require_once 'layouts/footer.php' ?>