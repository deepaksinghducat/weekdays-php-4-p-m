<?php 

$connection = require_once 'admin/database.php';

require_once 'admin/class/post.php';

$postClass = new Post($connection);

$posts = $postClass->getAllPosts();

?>

<?php require_once 'layouts/header.php'; ?>
<?php require_once 'layouts/navigation.php'; ?>

<?php require_once 'layouts/banner.php'; ?>


    <!--================ Blog slider start =================-->  
    <!--================ Blog slider start =================-->  
    <section>
      <div class="container">
        <div class="owl-carousel owl-theme blog-slider">
        <?php foreach($posts as $post): ?>
          <div class="card blog__slide text-center">
            <a href="details.php?id=<?=$post['id']?>">
              <div class="blog__slide__img">
                <img class="card-img rounded-0" src="./admin/<?=$post['image_path']?>" alt="">
              </div>              
            </a>
            <div class="blog__slide__content">
              <a class="blog__slide__label" href="details.php?id=<?=$post['id']?>"><?=$post['name']?></a>
              <p><?=$post['created_at']?></p>
            </div>
          </div>
          <?php endforeach; ?>       
        </div>
      </div>
    </section>
    <!--================ Blog slider end =================-->  


<?php require_once 'layouts/footer.php'; ?>
<?php require_once 'layouts/end.php'; ?>
