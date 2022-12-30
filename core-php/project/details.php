<?php 

$connection = require_once 'admin/database.php';

require_once 'admin/class/post.php';

$id = (int) $_GET['id'];

if (!isset($_GET['id'])) {
    header("location: index.php");
}

$postClass = new Post($connection);

$post = $postClass->getPostById($id);

// var_dump($post);

// die;

?>

<?php require_once 'layouts/header.php'; ?>
<?php require_once 'layouts/navigation.php'; ?>


<!--================ Hero sm Banner start =================-->
<section class="mb-30px">
    <div class="container">
        <div class="hero-banner hero-banner--sm">
            <div class="hero-banner__content">
                <h1>Blog details</h1>
                <nav aria-label="breadcrumb" class="banner-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!--================ Hero sm Banner end =================-->

<!--================ Start Blog Post Area =================-->
<section class="blog-post-area section-margin">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="main_blog_details">
                    <img class="img-fluid" src="./admin/<?=$post->image_path?>" alt="<?=$post->name?>">
                    <br>
                    <a href="#">
                        <h4><?=$post->name?></h4>
                    </a>
                   
                    <p><?=$post->description?></p>
                </div>
            </div>
        </div>
</section>
<!--================ End Blog Post Area =================-->

<?php require_once 'layouts/footer.php'; ?>
<?php require_once 'layouts/end.php'; ?>