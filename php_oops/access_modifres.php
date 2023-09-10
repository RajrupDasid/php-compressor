<!-- 
    There are three access modifiers:

  *  public - the property or method can be accessed from everywhere. This is default
  * protected - the property or method can be accessed within the class and by classes derived from that class
  * private - the property or method can ONLY be accessed within the class

 -->
<?php

// use Fruit as GlobalFruit;

// class Fruit
// {
//     public $name;
//     protected $color;
//     private $weight;
// }
// $mango = new Fruit();
// $mango->name = "Mango";
// $mango->color = "Yellow";
// $mango->weight = "300";

use Fruit as GlobalFruit;

class Fruit
{
    public $name;
    public $color;
    public $weight;

    //public function can be accessed from anywhere
    function set_name($n)
    {
        $this->name = $n;
    }
    protected function set_color($c)
    {
        $this->color = $c;
    }
    private function set_weight($w)
    {
        $this->weight = $w;
    }
}

$apple = new Fruit();
$apple->set_name("Apple");
$apple->set_color("Red");
