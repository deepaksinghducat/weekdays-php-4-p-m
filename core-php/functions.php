<?php 

/**
 * 
 * 1. User-defined functions
 * 2. Function arguments
 * 3. Returning values
 * 4. Variable functions
 * 6. Anonymous functions
 * 7. Arrow Functions
 */

/**
 * User-defined functions
 * 
 * A function may be defined using syntax such as the following:
 */

//  function func() {
//     echo 10 + 20;
//  }

//  func();
//  func();
//  func();
//  func();
//  func();
//  func();

//  function calculator() {
//     switch('1') {
//         case '1': echo 10; break;
//     }
//  }


/**
 * Function arguments
 * 
 * Information may be passed to functions via the argument list, which is a comma-delimited list of 
 * expressions. The arguments are evaluated from left to right, before the function is actually 
 * called (eager evaluation).
 */

 /**
  * @param int $num1
  * @param int $num2
  * 
  * return void
  */
//  function addition($num1, $num2) {
//     echo $num1 + $num2;
//  }

//  addition(10,20);


/**
 * Returning values
 * 
 * Values are returned by using the optional return statement. Any type may be returned, 
 * including arrays and objects. This causes the function to end its execution immediately 
 * and pass control back to the line from which it was called
 */

//  $array = [10,50,40,90,10];

//  function maximum($arr) {
//     $max = $arr[0];

//     foreach($arr as $value) {
//         if($value > $max) {
//             $max = $value;
//         }
//     }

//     return $max;
//  }

//  $maxValue = maximum($array);

//  echo $maxValue;

/**
 * Variable functions
 * 
 * PHP supports the concept of variable functions. This means that if a variable name has parentheses 
 * appended to it, PHP will look for a function with the same name as whatever the variable evaluates 
 * to, and will attempt to execute it. Among other things, this can be used to implement callbacks, 
 * function tables, and so forth.
 * 
 */

//  function fun() {
//     echo "function fun()";
//  }

//  $func = 'fun';

//  $func();

/**
 * Anonymous functions
 * 
 * Anonymous functions, also known as closures, allow the creation of functions which have no 
 * specified name. They are most useful as the value of callable parameters, but they have many 
 * other uses.
 */

//  $area = function() {
//     echo "area function";
//  };

//  $area();
 
/**
 * Arrow Functions
 * 
 * Arrow functions were introduced in PHP 7.4 as a more concise syntax for anonymous functions.
 */

 $area = fn($a) => $a + 10;

 echo $area(10);

