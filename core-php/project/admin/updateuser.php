<?php

require 'session.php';

$connection = require_once 'database.php';

require_once 'class/user.php';

if(isset($_POST)) {
    
    $userClass = new User($connection);

    $result =  $userClass->update();

    header('location: users.php');
}

