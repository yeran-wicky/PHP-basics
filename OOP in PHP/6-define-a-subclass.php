<?php

// Main class
class Product {

    // Main class's properties which belongs to the Main class & also belongs to the sub classes
    var $product_name;
    var $cost_price;
    var $sales_price;

    // Main class's methods which belongs to the Main class & also belongs to the sub classes
    function calculate_sales_price() {
        $this -> sales_price = round($this -> cost_price * 1.2, 2);
    }

    // Another way to use above function (but how we set value using this function is also different. check there also)
    function calculate_sales_price_another_method() {
        return round($this -> cost_price * 1.2, 2);
    }
}

// A Sub class of the Main class (which includes properties (variables) and methods (functions) in the Main class)
class Computer extends Product {

    // Sub class's properties which ONLY belongs to this sub class
    var $processor;
    var $hard_disk;
    var $ram;
}

// Sub class of the Sub class "Computer"
class PowerSupply extends Computer {

}

// Another Sub class of the Main class
class Garment extends Product {

}

// Create an object (which belongs to the sub class "Computer")
$my_product = new Computer;
$my_garment = new Garment;

// Setting values for the created object
$my_product -> product_name = 'Lenovo Thinkpad X1 Carbon';
$my_product -> cost_price = 115000;
$my_product -> calculate_sales_price();
// Below is how we pass value using that another way of function. You can try commenting above one OR below one,
// nothing will change in the output. Because both does the same but in different ways
$my_product -> sales_price = $my_product -> calculate_sales_price_another_method();
$my_product -> processor = 'Intel Core i5';
$my_product -> hard_disk = 'Lexar NQ790 1TB NVMe';
$my_product -> ram = '8GB LPDDR3';

$my_array = get_object_vars($my_product);   // Returns an array with the properties of the given object. Syntax: get_object_vars($object_name);

// Outputting array
echo '<pre>Object variables for my_product';
print_r($my_array);
echo '</pre>';

///////////////////////////////////////////////////////////////////////
        
// class_parents($class_name or $object_name);     // Returns an array of parent classes of a class ($class_name) OR object ($object_name) is given

// Checking the parent (Main) class of "my_garment" object
echo '<pre>';
echo 'Parent class of Garment: ';
echo get_parent_class($my_garment);     // Returns the name of the parent class of the class ($class_name) OR object ($object_name). Syntax: get_parent_class($class_name or $object_name);
echo '</pre>';

echo '<br>';

// Checking if "Computer" is a subclass of "Product"
echo '<pre>';
if (is_subclass_of('Computer', 'Product')) {    // Returns true OR false after checking if a class ($class_name) OR object ($object_name) is a subclass of a class ($string) given. Syntax: is_subclass_of($class_name or $object_name, $string);
    echo 'Computer is a subclass of Product';
}
else {
    echo 'Computer is NOT a subclass of Product</pre>';
}

echo '<br>';

// Checking if "Computer" is a subclass of "Garment"
echo '<pre>';
if (is_subclass_of('Computer', 'Garment')) {
    echo 'Computer is a subclass of Garment';
}
else {
    echo 'Computer is NOT a subclass of Garment</pre>';
}

// Getting a list of class parents for PowerSupply
$parents = class_parents('PowerSupply');
echo '<pre>';
print_r($parents);
echo '</pre>';
