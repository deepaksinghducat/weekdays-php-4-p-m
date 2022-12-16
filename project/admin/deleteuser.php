<?php

require 'session.php';

$connection = require_once 'database.php';

require_once 'class/user.php';

if (isset($_GET['id'])) {

    $userClass = new User($connection);

    $query = $userClass->delete($_GET['id']);

    header('location: users.php');
} else {
    header('location: users.php');
}
