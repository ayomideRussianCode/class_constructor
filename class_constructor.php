<?php


class User
{

    public $username;

    public function __construct($username)
    {
        $this->username = $username;
    }

    public function setUsername()
    {
        echo $this->username;
    }
}
$user = new User('bob');
echo $user->username;
echo "<br>";
?>

<?php

class Fruit
{
    public $name;
    public $color;
    public $car;

    function __construct($name, $color, $car)
    {
        $this->name = $name;
        $this->color = $color;
        $this->car = $car;
    }

    function get_name()
    {
        return $this->name;
    }

    function get_color()
    {
        return $this->color;
    }
    function get_car()
    {
        return $this->car;
    }
}

$apple = new Fruit("Apple", "Red", "Toyota");
echo $apple->get_name();
echo "<br>";
echo $apple->get_color();
echo "<br>";
echo $apple->get_car();
?>


