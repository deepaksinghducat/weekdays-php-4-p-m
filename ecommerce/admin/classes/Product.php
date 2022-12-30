<?php


class Product
{

    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function getAllProducts()
    {

        $statement = $this->connection->prepare('Select * from products');

        $result =  $statement->execute();

        if ($result) {
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }

        return [];
    }

    public function getProductById($id)
    {
    }

    public function store($data)
    {
        $statement = $this->connection->prepare('insert into products(name,short_description,description,price,quantity) values (:name,:short_description, :description, :price, :quantity)');
        $statement->bindParam(':name', $data['name']);
        $statement->bindParam(':short_description', $data['short_description']);
        $statement->bindParam(':description', $data['description']);
        $statement->bindParam(':price', $data['price']);
        $statement->bindParam(':quantity', $data['quantity']);

        $result = $statement->execute();

        if ($result) {
            return true;
        }

        return false;
    }

    public function update($data, $id)
    {
    }

    public function delete($id)
    {
    }

    public function upload($data, $id)
    {
    }
}
