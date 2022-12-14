<?php

/**
 *  User Class
 */
class User
{
    /**
     * Database connection object
     */
    public $connection;

    /**
     *  Constructor function
     * 
     * @param object $connection
     * 
     * return void 
     */
    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    /**
     *  Get all users
     * 
     * return array | boolean
     */
    public function getAllUsers()
    {
        $stmt = $this->connection->prepare("select * from users order by id desc");
        $query = $stmt->execute();

        if ($query) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        return false;
    }

      /**
     *  Get user by id
     * 
     * return object | boolean 
     */
    public function login()
    {
        $email = $_POST['email'];

        $password = $_POST['password'];

        $stmt = $this->connection->prepare("select * from users where email=:email and password=:password");
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $password);
        $query = $stmt->execute();

        if ($query) {
            $user = $stmt->fetchObject();

            if($user) {
                return true;
            }
        }

        return false;
    }

    /**
     *  Get user by id
     * 
     * return object | boolean 
     */
    public function getUserById($id)
    {
        $stmt = $this->connection->prepare("select * from users where id =:id");
        $stmt->bindParam(":id", $id);
        $query = $stmt->execute();

        if ($query) {
            return $stmt->fetchObject();
        }

        return false;
    }

    /**
     *  create resource 
     * 
     * return boolean 
     */
    public function store()
    {
        $name = $_POST['name'];

        $email = $_POST['email'];

        $password = $_POST['password'];

        $sql = "insert into users(name,email, password) values('$name','$email', '$password')";

        $query = $this->connection->exec($sql);

        return $query;
    }

    /**
     *  update resource 
     * 
     * return boolean 
     */
    public function update()
    {
        $name = $_POST['name'];

        // $password = $_POST['password'];

        // $email = $_POST['email'];

        $id = $_POST['user_id'];

        $stmt = $this->connection->prepare("update users set name=:name where id=:id");

        $stmt->bindParam(":name", $name);
        // $stmt->bindParam(":password", $password);
        // $stmt->bindParam(":email", $email);
        $stmt->bindParam(":id", $id);

        return $stmt->execute();
    }

    /**
     *  delete resource 
     * 
     * @param integer $id
     * 
     * return boolean 
     */
    public function delete($id)
    {
        $stmt = $this->connection->prepare("delete from users where id=:id");

        $stmt->bindParam(":id", $id);

        $query = $stmt->execute();

        return $query;
    }
}
