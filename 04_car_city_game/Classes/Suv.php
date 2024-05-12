<?php

require 'CommonMethods.php';

class Suv extends Car
{
    final public function __construct($color, $position, $speed = 0)
    {
        parent::__construct($color, $position, $speed);
        $this->seats = 7;
    }
}
