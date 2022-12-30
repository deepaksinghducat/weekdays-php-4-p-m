<?php 

try{

    $number = 0;

    if($number == 0) {
        throw new \Exception("number should be greater than zero");
    }

    echo 10/$number;

}catch(Exception $e){
    throw new Exception($e->getMessage());
    echo "something went wrong";
}
