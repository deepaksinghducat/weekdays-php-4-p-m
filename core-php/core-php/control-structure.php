<?php

/**
 * 
 * 1. if
 * 2. else
 * 3. elseif
 * 4. alternative syntax for control structure
 * 5. while
 * 6. do-while
 * 7. for
 * 8. foreach
 * 9. break
 * 10. continue
 * 11. switch
 * 12. match
 * 14. return
 * 15. require
 * 16. include
 * 17. require_once
 * 18. include_once
 */

// value 10
// ui1 

// value 11
// ui2

//  if else / elseif

// $value = 1;

// if ($value > 10) 
//     echo "value is $value asfasfdf";
// elseif ($value == 10)
//     echo "value is $value asfasfdf";
// else 
//     echo " asfasfdf";


// check the person can vote or not 

// $age = 10;

// if($age >= 18) {
//     echo "person can vote";
// }else {
//     echo "person can not vote";
// }

//  switch

// $value = 11;

// if(true) : 
//     echo "value is asfasfdf";
// endif;

// switch ($value) {
//     case 10:
//         echo "value is 10";
//         echo "<br>";
//         break;

//     case 11:
//         echo "value is 10";
//         echo "<br>";
//         break;

//     case 12:
//         echo "value is 10";
//         echo "<br>";
//         break;

//     default:
//         echo "default";
// }


//  for

// $array = [10,20,30,40,50];

// echo $array[0];

// i -> 1
// total - 5

// echo sizeof($array);

// echo count($array);

// for ($i=0; $i < count($array)  ; $i++) { 
//     echo $array[$i] . "<br>";
// }

// for ($i=0; $i < 10 ; $i++) { 
//     echo $i. "<br>";
// }

// foreach($array as $key => $value) {
//     echo $key." " .$value ."<br>";
// }

// while

// $number = 10;

// while ($number > 0) {
//     echo $number. "<br>";

//     $number--;
// }

// $number = 123;

// $temp = $number;
// $count = 0;

// while ($temp != 0) {

//     $count++;

//     $temp = (int) ($temp / 10);
// }

// echo $count;

// $number = 21212121;


// $count = 0;

// for ( $temp = $number ; $temp != 0 ;  $temp = (int) ($temp / 10)) { 

//     $count++;
   
// }

// echo $count;


// do while

// $number = 11;

// do {
//     echo $number. "<br>";
//     $number--;

// } while ($number > 10);

//  break / continue / return

// $array = [10,"",30,40,50];

// for ($i=0; $i < count($array); $i++) { 
    
    // if($array[$i] == 20) {
    //     return;
    // }
   

    // echo $array[$i]. "<br>";

    // if($array[$i] == 10) {
    //     break;
    // }

    // if($array[$i] == "") {
    //     continue;
    // }

    // echo $array[$i]. "<br>";
// }

// match 

// $value = 20;

// $value = match($value) {
//     10 => "10",
//     20 => "20",
//     30 => "10"
// };

// var_dump($value);
// 1 2
// c c
// *           r 1
// * *         r 2
// * * *       r
// * * * *  
// * * * * * *































//  if

// else

// elseif

// alternative syntax for control structure
// if ($a == 5):  'A is equal to 5' endif; 

// switch


// while 

// do-while 

// for 

// foreach

// break

// continue

// match

/**
 * return
 * 
 * return returns program control to the calling module. Execution resumes at the expression 
 * following the called module's invocation.
 * 
 * If called from within a function, the return statement immediately ends execution of the current 
 * function, and returns its argument as the value of the function call. 
 * return also ends the execution of an eval() statement or script file.
 * 
 */

/**
 *  require
 *  
 * require is identical to include except upon failure it will also produce a fatal E_COMPILE_ERROR level error. 
 * In other words, it will halt the script whereas include only emits a warning (E_WARNING) which allows the script to continue.
 * 
 */


/**
 * include
 * 
 * Files are included based on the file path given or, if none is given, the include_path specified. 
 * If the file isn't found in the include_path, include will finally check in the calling script's own directory 
 * and the current working directory before failing. The include construct will emit an E_WARNING if it cannot find a file; 
 * this is different behavior from require, which will emit an E_ERROR.
 * 
 */

/**
 * require_once 
 * 
 * The require_once expression is identical to require except PHP will check if the file has already been included, 
 * and if so, not include (require) it again.
 */


/**
 * include_once 
 * 
 * The include_once statement includes and evaluates the specified file during the execution of the script. 
 * This is a behavior similar to the include statement, with the only difference being that if the code from a 
 * file has already been included, it will not be included again, and include_once returns true. 
 * As the name suggests, the file will be included just once.
 * 
 */

 $value = true;

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- <h1>heading</h1> -->

    <?php // if($value): ?>
    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt nobis deserunt natus possimus dicta maiores, porro in optio doloremque error, dolorem dolor, voluptate consectetur sint. Enim ullam nemo maiores deleniti!</p> -->
    <?php // endif; ?>
</body>
</html>