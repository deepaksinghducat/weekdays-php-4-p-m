<?php 

require_once 'database.php';

if(isset($_POST)) {
 
    $name = $_POST['name'];

    $description = $_POST['description'];

    $id = $_POST['post_id'];

    $image_path = '';

    if($_FILES['image']['error'] == UPLOAD_ERR_NO_FILE) {
   
        $stmt = $connection->prepare("update posts set name=:name , description=:description where id=:id");

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":description", $description);
        $stmt->bindParam(":id", $id);

        $query =  $stmt->execute();

        if($query) {
            header('location: posts.php');
        }

    }else {
    
        $randomString =  md5(rand(0,20));

        $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

        $tmp_name = $_FILES['image']['tmp_name'];

        $dir = "uploads/".$randomString.'.'.$ext;

        move_uploaded_file($tmp_name, $dir);

        $image_path = $dir;

        $stmt = $connection->prepare("update posts set name=:name , description=:description , image_path=:image_path where id=:id");

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":description", $description);
        $stmt->bindParam(":image_path", $image_path);
        $stmt->bindParam(":id", $id);

        $query =  $stmt->execute();

        if($query) {
            header('location: posts.php');
        }
    }   
}
