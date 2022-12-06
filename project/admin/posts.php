<?php require_once 'database.php'; ?>

<?php

$posts = [];

$stmt = $connection->prepare("select * from posts order by id desc");
$query = $stmt->execute();

if ($query) {
    $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
            <h3 class="card-title" style="width: 100%;">Posts
                <a href="createpost.php" class="btn btn-primary" style="float: right;">Add Post</a>
            </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($posts as $post) : ?>
                        <tr>
                            <td><?= $post['id'] ?></td>
                            <td><img src="<?= $post['image_path'] ?>" alt="<?= $post['name'] ?>"></td>
                            <td><?= $post['name'] ?></td>
                            <td><?= $post['description'] ?></td>
                            <td><?= $post['created_at'] ?></td>
                            <td>
                                <a href="editpost.php?id=<?= $post['id'] ?>" class="btn btn-primary">
                                    <i class="fa fa-eye"></i>
                                </a>

                                <a href="deletepost.php?id=<?= $post['id'] ?>" onclick="deleteRedirect(event)" class="btn btn-danger">
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