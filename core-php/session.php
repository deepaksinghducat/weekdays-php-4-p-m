<?php 

session_start();

$_SESSION['name'] = ['name' => "fsafadf"]; // session value put by key

unset($_SESSION['name']); // session specific value delete by key

echo $_SESSION['name']['name']; // session ki value get 

session_destroy(); // all session destroy

// var_dump($_SESSION['name']);
