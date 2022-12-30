<?php

/**
 *  Post Class
 */
class Post
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
     *  Get all posts
     * 
     * return array | boolean
     */
    public function getAllPosts()
    {
        $stmt = $this->connection->prepare("select * from posts order by id desc");
        $query = $stmt->execute();

        if ($query) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        return false;
    }

    /**
     *  Get posts by id
     * 
     * return object | boolean 
     */
    public function getPostById($id)
    {
        $stmt = $this->connection->prepare("select * from posts where id =:id");
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

        $description = $_POST['description'];

        $image_path = '';

        if (isset($_FILES['image'])) {

            $image_path = $this->uploadFile();
        }

        $sql = "insert into posts(name, description, image_path) values('$name', '$description', '$image_path')";

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

        $description = $_POST['description'];

        $id = $_POST['post_id'];

        $image_path = '';

        if ($_FILES['image']['error'] == UPLOAD_ERR_NO_FILE) {

            $stmt = $this->connection->prepare("update posts set name=:name , description=:description where id=:id");

            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":description", $description);
            $stmt->bindParam(":id", $id);

            return $stmt->execute();
        } else {

            $image_path = $this->uploadFile();

            $stmt = $this->connection->prepare("update posts set name=:name , description=:description , image_path=:image_path where id=:id");

            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":description", $description);
            $stmt->bindParam(":image_path", $image_path);
            $stmt->bindParam(":id", $id);

            return $stmt->execute();
        }
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
        $stmt = $this->connection->prepare("delete from posts where id=:id");

        $stmt->bindParam(":id", $id);

        $query = $stmt->execute();

        return $query;
    }

    /**
     *  Upload file 
     * 
     * return string 
     */
    public function uploadFile()
    {
        $randomString =  md5(rand(0, 20));

        $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

        $tmp_name = $_FILES['image']['tmp_name'];

        $dir = "uploads/" . $randomString . '.' . $ext;

        move_uploaded_file($tmp_name, $dir);

        return $dir;
    }
}
