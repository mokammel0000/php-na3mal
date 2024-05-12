<?php

class Car
{
    public $color;
    public $position;
    public $speed;
    public $seats = 4;
    public $passengers = [];

    private static $counter = 0;


    public function __construct($color, $position, $speed = 0)
    {
        //optional parameter has it's own value from the method signature, 
        //if you don't pass a value to it, no problem, because it has it's own value....
        $this->color = $color;
        $this->position = $position;
        $this->speed = $speed ? $speed : rand(1, 100);
        self::$counter++;
    }

    public static function getCounter()
    {
        // return self::$counter;
        return Car::$counter;
    }

    final public function show()
    {
        echo '<img class="car" 
            src="partitials/images/' . $this->color . '.png" 
            style="top:' . $this->position . '% ;animation-duration: calc(200s/' . $this->speed . ')"; >';
    }

    public function add_passenger($name)
    {
        if (count($this->passengers) < $this->seats) {
            $this->passengers[] = $name;
        } else {
            echo 'there is no seat for this passenger, please wait the next car</br>';
        }
    }
}
