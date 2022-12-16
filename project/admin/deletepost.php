<?php

require_once 'session.php';

$connection = require_once 'database.php';

require_once 'class/post.php';

if (isset($_GET['id'])) {

    $postClass = new Post($connection);

    $query = $postClass->delete($_GET['id']);

    header('location: posts.php');
} else {
    header('location: posts.php');
}
