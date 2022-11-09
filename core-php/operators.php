<?php

// unary binary ternary

// oprand

// $b = 20;
// $c = 30;

// $a = $b + $c;

// echo $a;

// $a++;



/**
 *
 * 1. Arithmetic Operators
 * 2. Assignment Operators
 * 3. Comparison Operators
 * 4. Incrementing/Decrementing Operators
 * 5. Logical Operators
 * 6. String Operators
 * 7. Array Operators
 */

/**
 * Arithmetic Operators
 * 
 * +$a	Identity	Conversion of $a to int or float as appropriate.
 * -$a	Negation	Opposite of $a.
 * $a + $b	Addition	Sum of $a and $b.
 * $a - $b	Subtraction	Difference of $a and $b.
 * $a * $b	Multiplication	Product of $a and $b.
 * $a / $b	Division	Quotient of $a and $b.
 * $a % $b	Modulo	Remainder of $a divided by $b.
 * $a ** $b	Exponentiation	Result of raising $a to the $b'th power.
 * 
 */

 // $c = 10 + 20; // addition operator +
 // $c = 10 - 20; // substraction operator -
 // $c = 10 * 20; // multiplication operator *
 // $c = 10 / 20; // division operator /
 // $c = 10 % 20; // reminder operator %
 // $c = 10 ** 20; // Exponentiation operator **


/**
 * Assignment Operators
 * 
 * $a += $b	$a = $a + $b	Addition
 * $a -= $b	$a = $a - $b	Subtraction
 * $a *= $b	$a = $a * $b	Multiplication
 * $a /= $b	$a = $a / $b	Division
 * $a %= $b	$a = $a % $b	Modulus
 * $a **= $b	$a = $a ** $b	Exponentiation
 */

//   $a = 10;
//   $b = 20;

//   $a += $b;
//   $a -= $b;
//   $a *= $b;
//   $a /= $b;
//   $a %= $b;
//   $a **= $b;


/**
 * Comparison Operators
 *
 * $a == $b	Equal	true if $a is equal to $b after type juggling.
 * $a === $b	Identical	true if $a is equal to $b, and they are of the same type.
 * $a != $b	Not equal	true if $a is not equal to $b after type juggling.
 * $a <> $b	Not equal	true if $a is not equal to $b after type juggling.
 * $a !== $b	Not identical	true if $a is not equal to $b, or they are not of the same type.
 * $a < $b	Less than	true if $a is strictly less than $b.
 * $a > $b	Greater than	true if $a is strictly greater than $b.
 * $a <= $b	Less than or equal to	true if $a is less than or equal to $b.
 * $a >= $b	Greater than or equal to	true if $a is greater than or equal to $b.
 * $a <=> $b	Spaceship	An int less than, equal to, or greater than zero when $a is less than, equal to, or greater than $b, respectively.
 */

//  $value = "10";

//  if($value === 10) {
//     echo "value is 10";
//  }

// $value = 0;

// if($value >= 0) {
//     echo "value is greater than 0";
// }

// $value = 0;

// if($value <= 0) {
//     echo "value is less than 10";
// }

// $value = 10;

// if($value !== 10) {
//     echo "value is not equal to 10";
// }

// $value = 11;

// if($value <> 10) {
//     echo "value is not equal to 10";
// }

// $a = null;

// if($a == 10) {
//     echo "value is 10";
// }else {
//     echo "value is not 10";
// }


/**
 * Incrementing/Decrementing Operators
 * 
 * ++$a	Pre-increment	Increments $a by one, then returns $a.
 * $a++	Post-increment	Returns $a, then increments $a by one.
 * --$a	Pre-decrement	Decrements $a by one, then returns $a.
 * $a--	Post-decrement	Returns $a, then decrements $a by one.
 */

//  $a = 10;

//  $a++;

//  echo $a;

//  ++$a;

//  echo $a;

// --$a;

// echo $a;

// $a--;

// echo $a;



/**
 * Logical Operators 
 * 
 * $a and $b	And	true if both $a and $b are true.
 * $a or $b	Or	true if either $a or $b is true.
 * $a xor $b	Xor	true if either $a or $b is true, but not both.
 * ! $a	Not	true if $a is not true.
 * $a && $b	And	true if both $a and $b are true.
 * $a || $b	Or	true if either $a or $b is true. 
 */

//  $age = 10;

//  and 
//  if($age > 10 && $age < 12) {
//     echo "age is btw 10 to 12";
//  }

// or
//  if($age < 12 || $age > 10) {
//     echo "age is btw 10 to 12";
//  }

// if($age != 10) {
//     echo "age is $age";
// }


/**
 * String Operators
 *
 * There are two string operators. The first is the concatenation operator ('.'), 
 * which returns the concatenation of its right and left arguments. 
 * The second is the concatenating assignment operator ('.='), which appends the argument 
 * on the right side to the argument on the left side.
 */


//  $str = "lorem " . "fasfdasdf";

//  $str = "John";

//  $str .= "Smith";

//  echo $str;
 

/**
 * Array Operators
 * 
 * $a + $b	Union	Union of $a and $b.
 * $a == $b	Equality	true if $a and $b have the same key/value pairs.
 * $a === $b	Identity	true if $a and $b have the same key/value pairs in the same order and of the same types.
 * $a != $b	Inequality	true if $a is not equal to $b.
 * $a <> $b	Inequality	true if $a is not equal to $b.
 * $a !== $b	Non-identity	true if $a is not identical to $b.
 */

//  union
// $arr1  = [10,20,30];
// $arr2 = [10,20,30,40];


// var_dump($arr1 + $arr2);

// $arr = [10,20,30,40];

// array_push($arr, 10);

// var_dump($arr);

// $array = [10,20,30,40];

// $arr = &$array;

// array_push($arr, 10);

// var_dump($array);

// $arr = [10,20,30,40,60];

// if($array === $arr) {
//     echo "array is equal";
// }

// $array = [10,20,30,40,50];

// $arr = [10,20,30,40];

// if($array !=  $arr) {
//     echo "array are not equal";
// }

// 1 2
// c c
// *           r 1
// * *         r 2
// * * *       r
// * * * *  
// * * * * * *

//           *    
//         * *         
//       * * *       
//     * * * *  
//   * * * * *



for ($i=5; $i >= 1 ; $i--) { 

    for ($j=1; $j <= 5 ; $j++) { 

        if($i <= $j) {
            echo "*";
        }else{
            echo "&nbsp;&nbsp;";
        }            
    }
    echo "<br>";
}

// for ($i=5; $i <= 5 ; $i--) { 
//     for ($j=5; $j >=1 ; $j--) { 
//        echo "*";
//     }

//     echo "<br>";
// }




