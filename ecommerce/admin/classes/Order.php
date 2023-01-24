<?php 


class Order {
    public $connection;

    public function __construct($connection) {
        $this->connection = $connection;
    }

    public function getOrders() {
        
        $statement = $this->connection->prepare('Select * from orders order by id DESC');

        $result =  $statement->execute();

        if ($result) {
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }

        return [];
    }

    public function getOrdersByOrderId($orderId) {
        $statement = $this->connection->prepare('select * from orders where id=:id');
        $statement->bindParam(':id', $orderId);

        $result = $statement->execute();

        if ($result) {
            return $statement->fetch(PDO::FETCH_ASSOC);
        }

        return null;
      
    }

    public function getOrderItemsByOrderId($orderId) {
        $statement = $this->connection->prepare('Select * from order_items');

        $result =  $statement->execute();

        if ($result) {
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }

        return [];
    }

    public function createOrder($data) {
        $sql = "insert into orders(sub_total, tax, grand_total, is_guest, cart_id) values(:sub_total, :tax, :grand_total, :is_guest,:cart_id)";

        $statement = $this->connection->prepare($sql);
        $statement->bindParam(':sub_total', $data['subtotal']);
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

    public function getProductItemsByOrderItemId($orderId) {
        $sql = "
            select products.*, product_images.image_path, order_items.quantity from order_items 
            inner join products on products.id=order_items.product_id 
            inner join product_images on product_images.product_id=products.id
            where order_id =:order_id";
        
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(':order_id', $orderId);

        $result = $statement->execute();

        if ($result) {
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }

        return null;
    }
}