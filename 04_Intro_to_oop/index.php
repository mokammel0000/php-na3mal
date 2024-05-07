<?php 
include 'Classes/Product.php';

// later, you can use autoload to include files automatiacally

//new Product;    // create a new object from the Product Class
//$prod1 = new Product; //initalize this object to a variable(object) named $prod1

// $prod1 = new Product();  //it's recommended to put () at the end, however u can remove them
//                          // () indicates to the constructor that u want to call s
// //$prod1 is variable, and it's datatype is OBJECT

// $prod1-> name = "Laptop Bag";
// $prod1-> stock = 200;
// $prod1-> price = 80000;
// $prod1-> desc = "bla bla bla....";



$prod2 = new Product("Asus Laptop", 5, 32000, "bla bla bla....");

echo product::COMPANY_NAME . "<br>";   //convenient way
//echo product->COMPANY_NAME . "<br>";
echo $prod2::COMPANY_NAME . "<br>";
//echo $prod2->COMPANY_NAME . "<br>";

echo "<pre>";
var_dump($prod2);
//the constant is not  a member in $prod2
echo "</pre>";
