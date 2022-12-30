<?php

/**
 * 
 * 1. The Basics
 * 2. Properties
 * 3. Class Constants
 * 4. Autoloading Classes
 * 5. Constructors and Destructors
 * 6. Visibility
 * 7. Object Inheritance
 * 8. Scope Resolution Operator (::)
 * 9. Static Keyword
 * 10. Class Abstraction
 * 11. Object Interfaces
 * 12. Traits
 * 13. Anonymous classes
 * 14. Overloading
 * 15. Object Iteration
 * 16. Magic Methods
 * 17. Final Keyword
 * 18. Object Cloning
 * 19. Comparing Objects
 * 20. Late Static Bindings
 * 21. Objects and references
 * 22. Object Serialization
 * 
 */

// class Car
// {
//     // properties
//     protected $name = 'deepak singh gusain';

//     const FULL_NAME = 'deepak singh gusain';

//     // public function __construct($name) {
//     //    $this->name = $name;
//     // }

//     //    methods
//     public function getName()
//     {
//         // echo 'deepak';
//         return $this->name;
//     }

//     public function __destruct()
//     {
//         echo '<br>destruct';
//     }
// }

// class Maruti {

// }

// $car = new Car('deepak sadfsafdasfas');

// var_dump($car->name);

// $car = new Car();

// $car->name = 'deepak sadfsafdasfas';

// echo $car->name;

// echo Car::FULL_NAME;

// $car1 = new Car('tata');
// $car2 = new Car('Maruti');

// echo $car1->name;
// echo $car1->getName();

// class Modal extends Car {
//     public function getName()
//     {
//         return 'deepak';
//         // return $this->name;
//     }
// }

// $modal = new Modal();

// echo $modal->getName();


// class Cart {
//     public static $cartItems = [];

//     const FULL_NAME = 'deepak singh gusain';


//     public static function getAllItems() {

//         return self::FULL_NAME;
//         return self::$cartItems;
//     }
// }

// print_r(Cart::getAllItems());

// class Car {
//     // properties
//     private $name = "deepak singh gusain";
//     // private $name;


//     public const fullname = "deepak singh gusain const";

//     // methods
//     public function getName() {
//         return  "<br>".$this->name;
//         return self::fullname;
//     }

//     public function __construct($name)
//     {
//         echo "constructor called $name";
//         $this->name = $name;
//     }

//     public function __destruct()
//     {
//         echo "<br> destruct called";
//     }
// }


// $car = new Car();
// echo $car->getName() . "<br>";

// $car1  = new Car();
// echo $car1->getName() . "<br>";

// $car = new Car('deepak singh gusain');
// echo $car->getName() . "<br>";


// $car1 = new Car('varsha');
// echo $car1->getName() . "<br>";

// echo $car == $car ? "true" : "false";

// class ParentClass {
//     protected $name = "parent";

//     public function getParentName() {
//         return "<br>". $this->name;
//     }
// }

// $parentClass = new ParentClass();
// // echo $parentClass->name;
// echo $parentClass->getParentName();

// class ChildClass extends ParentClass {
//     // public $name = "child";

//     // public function getParentName() {
//     //     return "<br>".  $this->name ;
//     // }
// }

// $childClass = new ChildClass();

// echo $childClass->name;
// echo $childClass->getParentName();


// class ParentClass {
//     protected $name = "parent";

//     public function __construct($name = 'parent') {
//         $this->name = $name;
//     }

//     public function getParentName() {
//         return "<br>". $this->name;
//     }
// }


// class ChildClass extends ParentClass {

//     public function __construct($name = 'child') {
//         parent::__construct($name);
//         echo parent::getParentName();
//     }


//     public function getParentName() {
//         // echo parent::getParentName();
//         return "<br>". $this->name. "fasdfasf";
//     }

// }

// $childClass = new ChildClass('deepak');
// echo $childClass->getParentName();

// class First {

// }

// class Second  extends First{

// }

// class Third extends Second{

// }

// static 

// class StaticClass {
//     public static $cartItems = [];

//     public static function staticFunction() {
//         return "static function";
//     }
// }

// $staticClass = new StaticClass();

// $array = [['name' => 'test']];

// array_push($array,['name' => 'second']);


// $staticClass->cartItems = $array;
// echo "<pre>";
// print_r($array);

// $staticClass1 = new StaticClass();
// $array = [['name' => 'test']];


// $staticClass1->cartItems = $array;
// echo "<pre>";
// print_r($staticClass1->cartItems);

// $array = [['name' => 'test']];

// array_push($array,['name' => 'second']);

// StaticClass::$cartItems = $array;

// print_r(StaticClass::$cartItems);

// echo StaticClass::staticFunction();


// abstraction 

// abstract class ParentClass {

//     abstract public function getName();

// }

// class ChildClass extends ParentClass  {

//     // abstract public function getName();
//     public function getName(){
//         return 'ChildClass';
//     }
// }

// interface 

// interface ParentInterface {
//     public function getName();
// }

// class ChildClass implements ParentInterface {
//     public function getName()
//     {
//         return 'ChildClass';
//     }
// }

// $childClass = new ChildClass();

// echo $childClass->getName();

// interface First
// {
//     public function getFirstName();
// }

// interface Second
// {
//     public function getSecondName();
// }

// class Third implements First, Second
// {
//     public function getFirstName()
//     {
//     }
//     public function getSecondName()
//     {
//     }
// }

// traits

// trait GetName
// {
//     public function getName()
//     {
//         return $this->name;
//     }
// }

// class First
// {
//     use GetName;

//     public $name = 'first';
// }

// class Second
// {
//     use GetName;

//     public $name = 'second';
// }

// $first = new First();
// echo $first->getName(). "<br>";

// $second = new Second();
// echo $second->getName();

// Anonymous classes
// class A {
//     public $name = 'A';
// }

// function getname($object) {
//     return $object->name;
// }

// echo getname(new A());

// Object Iteration
// class A {
//     public $name;

//     public function __construct($name) {
//         $this->name = $name;
//     }
// }

// $array = [
//     new A('deepak'),
//     new A('Jyoti'),
// ];

// foreach($array as $value) {
//     echo $value->name;
//     echo "<br>";
// }

//Magic Methods

// class A
// {
//     private $name;
//     private $age;

//     public function __set($var, $value) {
//         $this->{$var} = $value;
//     }

//     public function __get($var)
//     {
//         return $this->{$var};
//     }
// }

// $a = new A();

// $a->name = 'deepak';
// $a->age = 28;

// echo $a->name;
// echo $a->age;

// Final Keyword

// Final class A {

//     finalpublic $name = 'deepak';
//     final public function getName() {

//     }
// }

// class B extends A { 
    
// }

// Object Cloning

// class A {
//     public $name = "deepak";
// }

// $obj1 = new A();
// $obj1->name = 'jyoti';

// echo $obj1->name;

// $obj2 = clone $obj1;
// $obj2->name = 'deepak';

// echo $obj2->name;

// object reference

// class A {
//     public $name  = "deepak";
// }

// $obj1 = new A();

// $obj2 = &$obj1;

// echo $obj2->name = "deepak";

// final class Car {
    // final public function getCarName() {

    // }
// }

// class Maruti extends Car {
//     public function getCarName() {
//         return "maruti";
//     }   
// }

// $maruti = new Maruti();
// echo $maruti->getCarName();

// class Car {
//     public $name = "maruti";

//     public function __construct($name)
//     {
//         $this->name = $name;
//     }
// }

// echo "<pre>";

// $car1  = new Car('maruti');

// $car2 = $car1;
// $car2->name = "tata";

// echo $car2->name;

// echo "<br   >";

// echo $car1->name;

// $number = 10;

// $number2 =  $number;

// $number2 = 15;


// echo "<br   >";

// echo $number;

// $number = 10;


// function callByValue($value) {
//     $value = 15;

//     return $value;
// }


// function callByReference(&$value) {
//     $value = 15;

//     return $value;
// }

// echo callByValue($number);

// echo "<br>";

// echo $number;

// echo callByReference($number);

// echo "<br>";

// echo $number;

// function name() {
//     echo "name";
// }

// $varibaleFun = 'name';

// $varibaleFun();

// class Car {

//     public $name;
//     public function __construct($name)
//     {
//         $this->name = $name;
//     }

// }


// $car1 = new Car('maruti');

// // $car2 = new Car('tata');

// $car2 = $car1;

// echo $car1 === $car2 ? 'true': 'false';

// Late Static Bindings

// class Car {

//     private static $carModal = 2010;

//     public const name = "maruti";

//     function getCarModel(){
//         return static::$carModal;
//     }
// }



// Car::$carModal;

// $car = new Car();

// echo $car->getCarModel();


// 22. Object Serialization


// class Car {

//     private  $carModal = 2010;

//     public const name = "maruti";

//     function getCarModel(){
//         return static::$carModal;
//     }
// }

// $car = new Car();

// var_dump( unserialize(serialize($car)) );











