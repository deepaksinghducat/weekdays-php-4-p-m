<?php 
$array = [10,30,40,5,90,10];

// $largestNumber = 0;
// $secondLargest = 0;

// foreach($array as $value) {
//     if($largestNumber < $value) {
//         $secondLargest = $largestNumber;
//         $largestNumber = $value;
//     }
// }

// echo "largestNumber: $largestNumber, secondLargest: $secondLargest";


$min_pair = [0,0];

$min_value = 0;

for($i = 0; $i < count($array); $i++) {
    // for($j = $i + 1 ; $j < count($array); $j++) {
    //     $sum = $array[$i]+$array[$j];
    //     if($sum < $min_value) {
    //         $min_value = $sum;
    //         $min_pair = [$array[$i], $array[$j]];
    //     }else{

    //     }
    // }
}

print_r($min_pair);

echo "<br>";

echo $min_value;

