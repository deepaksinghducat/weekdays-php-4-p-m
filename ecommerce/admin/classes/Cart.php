<?php


spl_autoload_register(function ($class) {
    require $class . '.php';
});

class Cart
{
    public $connection;

    public $productClass;

    public function __construct($connection)
    {
        $this->connection = $connection;

        $this->productClass = new Product($connection);
    }

    public function addCart($productId)
    {
        $cartId = isset($_SESSION['cart_id']) ? $_SESSION['cart_id'] : 0;
        $customerId = isset($_SESSION['current_customer']) ? $_SESSION['current_customer']['id'] : 0;

        $isGuest = $customerId > 0 ? 1 : 0;

        $statement = $this->connection->prepare('select * from carts where id=:id');
        $statement->bindParam(':id', $cartId);

        $result = $statement->execute();

        if ($result) {
            $cart =  $statement->fetch(PDO::FETCH_ASSOC);

            if ($cart) {
                $this->addCartItem($cart['id'], $productId);
            } else {
                $sql = "insert into carts(is_guest) values(:is_guest)";

                $statement = $this->connection->prepare($sql);
                $statement->bindParam(':is_guest', $isGuest);

                $result = $statement->execute();

                if ($result) {

                    $lastIndex = $this->connection->lastInsertId();

                    $_SESSION['cart_id'] = $lastIndex;

                    $this->addCartItem($lastIndex, $productId);
                }
            }
        }

        return null;
    }

    public function getCartItems($cartId)
    {
        $statement = $this->connection->prepare('select * from cart_items where cart_id=:cart_id');
        $statement->bindParam(':cart_id', $cartId);

        $result = $statement->execute();

        if ($result) {
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }

        return null;
    }

    public function addCartItem($cartId, $productId)
    {
        $product = $this->productClass->getProductById($productId);

        $cartItemExist = $this->checkCartitemExists($cartId, $productId);

        if ($cartItemExist) {

            $quantity = (int) $cartItemExist[0]['quantity'] + 1;

            $cartItemId = $cartItemExist[0]['id'];

            $this->updateCartItem($quantity, $cartItemId);
        } else {
            if ($product) {
                $quantity = 1;

                $sql = "insert into cart_items(product_id, cart_id, price, quantity) values(:product_id, :cart_id, :price, :quantity)";

                $statement = $this->connection->prepare($sql);
                $statement->bindParam(':product_id', $product['id']);
                $statement->bindParam(':cart_id', $cartId);
                $statement->bindParam(':price', $product['price']);
                $statement->bindParam(':quantity', $quantity);


                $result = $statement->execute();

                if ($result) {
                    return true;
                }

                return false;
            }
        }
    }

    public function getCart()
    {
    }

    public function updateItemFromCart()
    {
    }

    public function deleteItemFromCart($id)
    {
    }

    public function checkCartitemExists($cartId, $productId)
    {
        $statement = $this->connection->prepare('select * from cart_items where cart_id=:cart_id and product_id=:product_id');
        $statement->bindParam(':cart_id', $cartId);
        $statement->bindParam(':product_id', $productId);

        $result = $statement->execute();

        if ($result) {
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }

        return null;
    }

    public function collectTotals()
    {
        $cartId = isset($_SESSION['cart_id']) ? $_SESSION['cart_id'] : 0;

        if ($cartId > 0) {
            $cartItems = $this->getCartItems($cartId);

            $price = 0;

            foreach ($cartItems as $cartItem) {
                $price += $cartItem['price'];
            }

            $tax = 0;

            $grandTotal = $price + $tax;

            $statement = $this->connection->prepare('update carts set  sub_total=:sub_total ,tax=:tax,grand_total=:grand_total where id =:id');
            $statement->bindParam(':sub_total', $price);
            $statement->bindParam(':tax', $tax);
            $statement->bindParam(':grand_total', $grandTotal);
            $statement->bindParam(':id', $cartId);

            $result = $statement->execute();

            if ($result) {
                return true;
            }
        }
    }

    public function updateCartItem($quantity, $cartItemId)
    {
        $sql = "update cart_items set quantity=:quantity where id=:id";

        $statement = $this->connection->prepare($sql);
        $statement->bindParam(':quantity', $quantity);
        $statement->bindParam(':id', $cartItemId);

        $result = $statement->execute();

        if ($result) {
            return true;
        }

        return false;
    }
}
