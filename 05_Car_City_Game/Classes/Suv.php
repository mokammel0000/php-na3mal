<?php

require 'CommonMethods.php';

class Suv extends Car
{
    use CommonMethods;   //trait that u can use it's methods beside your parent' methods
    final public function __construct($color, $position, $speed = 0)
    {
        parent::__construct($color, $position, $speed);
        $this->seats = 7;
    }

    
}

