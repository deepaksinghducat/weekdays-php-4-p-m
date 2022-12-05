<?php require_once 'database.php'; ?>

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
            <h3 class="card-title" style="width: 100%;">Add Post
                <a href="posts.php" class="btn btn-primary" style="float: right;">Back</a>
            </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form action="storepost.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" placeholder="Enter Description"></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <button class="btn btn-primary">Submit</button>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
</div>
<!-- /.content-wrapper -->

<?php require_once 'layouts/footer.php' ?>