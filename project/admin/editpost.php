<?php require_once 'database.php'; ?>

<?php

$id = (int) $_GET['id'];

if(! isset($_GET['id'])) {
    header("location: posts.php");
}

$post = [];

$stmt = $connection->prepare("select * from posts where id =:id");
$stmt->bindParam(":id", $id);
$query = $stmt->execute();

if ($query) {
    $post = $stmt->fetchObject();

    if(! $post) {
        header("location: posts.php");
    }
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
            <h3 class="card-title" style="width: 100%;">Edit Post
                <a href="posts.php" class="btn btn-primary" style="float: right;">Back</a>
            </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form action="updatepost.php" method="post" enctype="multipart/form-data">
                <input type="hidden" value="<?=$id?>" name="post_id">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="<?=$post->name?>">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" placeholder="Enter Description"><?=$post->description?></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                    <?php if($post->image_path) : ?>
                        <img src="<?=$post->image_path?>" alt="<?=$post->name?>" height="50">
                    <?php endif; ?>
                </div>
                <button class="btn btn-primary">Submit</button>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
</div>
<!-- /.content-wrapper -->

<?php require_once 'layouts/footer.php' ?>