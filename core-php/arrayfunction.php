<?php 

// 1 array()

// $array = [10,20,30,40,50];

$array = array(10,20,30,40,50);

$num = 10;

// print_r($array);

// 2 is_array()

// if(is_array($num)) 
//     echo "is array";
// else 
//     echo "not array";

// 3 in_array()

// if(in_array(100, $array)) 
//     echo "in array";
// else 
//     echo "not  in array";

// 4 array_merge()
// $array2 = array(60,70,80,90,100);

// $mergedArray = array_merge($array, $array2);

// print_r($mergedArray);

// 5 array_keys()

// $key = array_keys($array);

// $array2  = array(
//     "id" => "1",
//     "name" => "deepak",
//     "email" => "deepak@gmail.com",
// );

// $key = array_keys($array2);

// print_r($key);

// 6 array_key_exists()

// $keyExist = array_key_exists("name1", $array2);

// print_r($keyExist);


// 7 array_shift()
// array_shift($array2);

// print_r($array2);

// echo "<pre>";

// print_r($array2);


// unset($array2['name']);

// print_r($array2);


// 8 array_push()

// echo "<pre>";

// print_r($array);

// array_push($array, 60);

// print_r($array);



// 9  array_pop()

// echo "<pre>";

// print_r($array);

// array_pop($array);

// print_r($array);


// 10 array_values()

// echo "<pre>";

// $values = array_values($array2);

// print_r($values);

// 11 array_map()

// echo "<pre>";

// print_r($array);


// $mulitplyBy2 = array_map(function($item) {
//     return $item * 2;
// }, $array);

// print_r($mulitplyBy2);

// 12 array_unique()

// $array = [10,10,20,20,30,30];

// $uniqueArray = array_unique($array);
// echo "<pre>";

// print_r($array);

// print_r($uniqueArray);

// 13 array_slice()

// $array = [10,10,20,20,30,30];

// $sliceArray = array_slice($array, 0,1);
// echo "<pre>";

// print_r($sliceArray);


// 14 array_diff()

// $array1  = [10,20,30,40,60];
// $array2  = [60,70,80,90,100];

// $diffArray = array_diff($array2, $array1);
// echo "<pre>";

// print_r($diffArray);

// 15 array_search()
// $array1  = [10,20,30,40,60,60];

// $searchArray = array_search(60,$array1); 
// echo "<pre>";

// print_r($searchArray);

// 16 array_reverse()

// $array1  = [10,20,30,40,60,60];

// echo "<pre>";

// $reverseArray = array_reverse($array1);

// print_r($reverseArray);

// 17 array_unshift(),,

// $array1  = [10,20,30,40,60,60];

// echo "<pre>";

// print_r($array1);

// array_unshift($array1, 100);

// print_r($array1);

// 18 array_splice()
// echo "<pre>";

// print_r($array1);

// $key = array_search(10, $array1);

// array_splice($array1, $key, 1);

// print_r($array1);
