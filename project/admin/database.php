<?php 

require_once 'constants.php';

$localhost = LOCALHOST;
$dbname= DATABASE;

$connection = new PDO("mysql:host=$localhost;dbname=$dbname", USERNAME, PASSWORD);


