<?php
session_start();

$connection = require_once 'database.php';

require_once 'class/user.php';

if (isset($_POST)) {

    $userClass = new User($connection);

    $result =  $userClass->login();
    
    if ($result) {
        header('location: dashboard.php');
    } else {
        header("location: index.php");
    }
}
