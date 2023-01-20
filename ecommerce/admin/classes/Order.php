<?php 


class Order {
    public $connection;

    public function __construct($connection) {
        $this->connection = $connection;
    }

    public function getOrders() {

    }

    public function getOrdersByOrderId($orderId) {

    }

    public function getOrderItemsByOrderId($orderId) {

    }

    public function createOrder($data) {
        $sql = "insert into orders(sub_total, tax, grand_total, is_guest, cart_id) values(:sub_total, :tax, :grand_total, :is_guest,:cart_id)";

        $statement = $this->connection->prepare($sql);
        $statement->bindParam(':sub_total', $data['sub_total']);
        $statement->bindParam(':tax', $data['tax']);
        $statement->bindParam(':grand_total', $data['grand_total']);
        $statement->bindParam(':is_guest', $data['is_guest']);
        $statement->bindParam(':cart_id', $data['cart_id']);

       
        $result = $statement->execute();

        if ($result) {
            return $this->connection->lastInsertId();
        }

        return null;
    }

    public function createOrderItem($data, $orderId) {


        $sql = "insert into order_items(product_id, quantity, price, cart_id, order_id) values(:product_id, :quantity, :price, :cart_id, :order_id)";

        $statement = $this->connection->prepare($sql);
        $statement->bindParam(':product_id', $data['product_id']);
        $statement->bindParam(':quantity', $data['quantity']);
        $statement->bindParam(':price', $data['price']);
        $statement->bindParam(':cart_id', $data['cart_id']);
        $statement->bindParam(':order_id', $orderId);
       
        $result = $statement->execute();

        if ($result) {
            return true;
        }

        return null;
    }
}