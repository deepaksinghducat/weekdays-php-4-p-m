<?php

$number = 123454321;

$temp = $number;

$reverse = 0;

while($temp != 0) {
    $rem = $temp % 10;

    // echo $rem . "Rem <br>";

    $reverse = $reverse * 10 + $rem;

    // echo $reverse . "rev <br>";


    $temp = (int) ($temp / 10);

    // echo $temp . "tem <br>";

}

if($reverse == $number) {
    echo "Number is palindrome";
}else{
    echo "Number is not palindrome";

}