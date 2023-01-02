<?php


class ProductImage
{

    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function store($data)
    {
        $statement = $this->connection->prepare('insert into product_images(image_path,product_id) values (:image_path,:product_id)');
        $statement->bindParam(':image_path', $data['image_path']);
        $statement->bindParam(':product_id', $data['product_id']);

        $result = $statement->execute();

        if ($result) {
            return true;
        }

        return false;
    }
}
