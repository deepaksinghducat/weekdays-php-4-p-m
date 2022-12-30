<?php 

require 'session.php';

$connection = require_once 'database.php';

require_once 'class/post.php';

if(isset($_POST)) {
    
    $postClass = new Post($connection);

    $result =  $postClass->store();

    header('location: posts.php');
}
