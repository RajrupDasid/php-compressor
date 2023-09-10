<?php

// use Fruit as GlobalFruit;

// class Fruit
// {
//     public $name;
//     public $color;

//     public function __construct($name, $color)
//     {
//         $this->name = $name;
//         $this->color = $color;
//     }

//     public function intro()
//     {
//         echo "The fruit is {$this->name} and color is {$this->color}";
//     }
// }

// class Strawberry extends Fruit
// {
//     public function message()
//     {
//         echo "Am i Fruit or a berry ?";
//     }
// }
// $strawberry = new Strawberry("strawberry", "red");
// $strawberry->message();
// $strawberry->intro();
// class Fruit
// {
//     public $name;
//     public $color;
//     public function __construct($name, $color)
//     {
//         $this->name = $name;
//         $this->color = $color;
//     }
//     protected function intro()
//     {
//         echo "The fruit is {$this->name} and the color is {$this->color}.";
//     }
// }

// class Strawberry extends Fruit
// {
//     public function message()
//     {
//         echo "Am I a fruit or a berry? ";
//     }
// }

// Try to call all three methods from outside class
// $strawberry = new Strawberry("Strawberry", "red");  // OK. __construct() is public
// $strawberry->message(); // OK. message() is public
// $strawberry->intro(); // ERROR. intro() is protected
// class Fruit
// {
//     public $name;
//     public $color;
//     public function __construct($name, $color)
//     {
//         $this->name = $name;
//         $this->color = $color;
//     }
//     protected function intro()
//     {
//         echo "The fruit is {$this->name} and the color is {$this->color}.";
//     }
// }

// class Strawberry extends Fruit
// {
//     public function message()
//     {
//         echo "Am I a fruit or a berry? ";
//         // Call protected method from within derived class - OK
//         $this->intro();
//     }
// }

// $strawberry = new Strawberry("Strawberry", "red"); // OK. __construct() is public
// $strawberry->message(); // OK. message() is public and it calls intro() (which is protected) from within the derived class
// class Fruit
// {
//     public $name;
//     public $color;
//     public function __construct($name, $color)
//     {
//         $this->name = $name;
//         $this->color = $color;
//     }
//     public function intro()
//     {
//         echo "The fruit is {$this->name} and the color is {$this->color}.";
//     }
// }

// class Strawberry extends Fruit
// {
//     public $weight;
//     public function __construct($name, $color, $weight)
//     {
//         $this->name = $name;
//         $this->color = $color;
//         $this->weight = $weight;
//     }
//     public function intro()
//     {
//         echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
//     }
// }

// $strawberry = new Strawberry("Strawberry", "red", 50);
// $strawberry->intro();
// PHP - The final Keyword

// The final keyword can be used to prevent class inheritance or to prevent method overriding.

// The following example shows how to prevent class inheritance:
// final class Fruit
// {
//     // some code
// }

// // will result in error
// class Strawberry extends Fruit
// {
//     // some code
// }

// class Fruit
// {
//     final public function intro()
//     {
//         // some code
//     }
// }

// class Strawberry extends Fruit
// {
//     // will result in error
//     public function intro()
//     {
//         // some code
//     }
// }
