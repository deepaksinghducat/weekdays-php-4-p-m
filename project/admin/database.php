<?php 

require_once 'constants.php';

class Database {

    public $connnection;

    public const host = 'localhost';   
    public const database = 'blog';   
    public const username = 'root';   
    public const password = '';   

    public static function getConnection() {
        $localhost = self::host;
        $dbname = self::database;
        
        return new PDO("mysql:host=$localhost;dbname=$dbname", self::username, self::password);
    }
}

return Database::getConnection();

