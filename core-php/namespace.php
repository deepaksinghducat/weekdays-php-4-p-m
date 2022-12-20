<?php

// spl_autoload_register(function($filename) {
//     require_once "$filename.php";
// });

require_once    "Testing.php";
require_once    "Test.php";

use App\Testing;
use App\Test\Test;
use App\Testing\TestingOne;
use App\Test\TestingOne as One;

/**
 * 
 * 1. Namespaces overview
 * 2. Defining namespaces
 * 3. Declaring sub-namespaces
 * 4. Using namespaces: Basics
 * 5. Using namespaces: Aliasing/Importing
 */

/**
 * Namespaces overview
 *
 * What are namespaces? In the broadest definition namespaces are a way of encapsulating items. 
 * This can be seen as an abstract concept in many places. For example, in any operating system 
 * directories serve to group related files, and act as a namespace for the files within them.
 */

/**
 * Defining namespaces
 * 
 * Although any valid PHP code can be contained within a namespace, only the following types of code
 * are affected by namespaces: classes (including abstracts and traits), interfaces, functions and 
 * constants.
 * 
 * Namespaces are declared using the namespace keyword. A file containing a namespace must declare 
 * the namespace at the top of the file before any other code - with one exception: the declare 
 * keyword.
 */


 $test = new One();
 
 var_dump($test);


/**
 * Declaring sub-namespaces
 * 
 * Much like directories and files, PHP namespaces also contain the ability to specify a hierarchy of 
 * namespace names. Thus, a namespace name can be defined with sub-levels:
 */



