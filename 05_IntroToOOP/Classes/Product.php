<?php
/*
#the best practise in php is to put every class in a specific file, 
    make the name of the file as same as the class name...
    and put all the class files in a folder that's name is classes (to autoload them laterlay).

#also put a class named funcions and put all your funcions in it

#also put a folder named partitials and put all your images, header, footer and bars in it


variables in the class is named: PROPERTIES 
functions in the class is named: METHODS
*/

class Product
{
    //Properties
    //prefered that NOT to put an initial value to your properties....
    public const COMPANY_NAME = 'AL-KAMEL GROUP';
    //it's a fixed class member, objects can't instantiate a copy from it
    //so, u can't called it using the object name, u should call it using the class name.

    //variable are be instantiated automatically with each new object, 
    //so u should call the variable using it's object name
    public $name;
    public $price;
    public $stock; 
    public $desc;

    //Methods
    /*
    constructor is a special method in the class
    it's name is static, u can't change it
    calls automatically when u create a new object from the class
    there are some addotion steps to create multiple functions...
    */

    public function __construct($pName, $pPrice, $pStock, $pDesc) 
    {
        $this-> name = $pName;
        $this-> price = $pPrice;
        $this-> stock = $pStock;
        $this-> desc = $pDesc;
    }

    //in php 8, we can do that
    //put the class properties directly in the parameters
    // public function __construct($this->name, $this->price, $this->stock, $this->desc) 
    // {
    // }

    public function calc_vat()
    {
        return $this->price * 15/ 100;
        #return $prod1->price * 15/ 100;
        #return $prod2->price * 15/ 100;
        /*this class can be instantiated with infinite number of objects...
        each object can contain it's properties and methods
        this indicates to the current object that u call the function from it
        ex. $this->price == $prodq->price.   */
    }

    public function __destruct()
    {
        //this code is being excecuted at the end of the object life....
        echo "the destructor of ". $this-> name;
    }
}