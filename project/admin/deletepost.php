<?php 

require_once 'database.php';

if(isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    
    $stmt = $connection->prepare("delete from posts where id=:id");
    $stmt->bindParam(":id", $id);
    $query = $stmt->execute();

    if($query) {
        header('location: posts.php');
    }
}else {
    header('location: posts.php');
}