<?php 

require_once 'database.php';

if(isset($_POST)) {
    
    $name = $_POST['name'];

    $description = $_POST['description'];

    $image_path = '';

    if(isset($_FILES['image'])) {
        
        $randomString =  md5(rand(0,20));

        $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

        $tmp_name = $_FILES['image']['tmp_name'];

        $dir = "uploads/".$randomString.'.'.$ext;

        move_uploaded_file($tmp_name, $dir);

        $image_path = $dir;
    }

    $sql = "insert into posts(name, description, image_path) values('$name', '$description', '$image_path')";

    $query = $connection->exec($sql);

    if($query) {
        header('location: posts.php');
    }
}
