<?php 

class Address {
    public $connection;

    public function __construct($connection){
        $this->connection = $connection;
    }

    public function storeAddressByCartId($data, $cartId) {

        $statement = $this->connection->prepare('insert into addresses(address, city, state, country, type, cart_id) values(:address, :city, :state, :country, :type, :cart_id)');
        $statement->bindParam(':address', $data['address']);
        $statement->bindParam(':city', $data['city']);
        $statement->bindParam(':state', $data['state']);
        $statement->bindParam(':country', $data['country']);
        $statement->bindParam(':type', $data['type']);
        $statement->bindParam(':cart_id', $cartId);

        $result = $statement->execute();

        if ($result) {
            return true;
        }

        return false;

    }

    public function checkAddressByCartId($cartId, $type){

    }

    public function updateAddressByCartId($cartId, $type) {

    }
}