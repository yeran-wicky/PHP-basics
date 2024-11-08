<?php

class Employee {

}

class Customer {

}

// Created 3 objects. 2 for class 'Employee', 1 for class 'Customer'
$mike = new Employee;
$richard = new Employee;
$david = new Customer;


/////////////// Usage of 'get_class()' ///////////////

echo '<pre>' . 
get_class($mike);   // Returns the class name of the object / instance. Syntax: get_class($object) / get_class($instance)
echo '</pre>';

echo '<pre>' . 
get_class($david);  // Returns the class name of the object / instance. Syntax: get_class($object) / get_class($instance)
echo '</pre>';


/////////////// Usage of 'is_a()' ///////////////

if (is_a($mike, 'Employee')) {    // Returns true OR false if the object belongs to the specified class. Syntax: is_a($object, $class_name)
    echo '<pre>mike belongs to the class: Employee</pre>';
}
else{
    echo '<pre>mike does not belongs to the class: Employee</pre>';
}


if (is_a($david, 'Employee')) {    // Returns true OR false if the object belongs to the specified class. Syntax: is_a($object, $class_name)
    echo '<pre>david belongs to the class: Employee</pre>';
}
else{
    echo '<pre>david does not belongs to the class: Employee</pre>';
}


// Can also use like this

if (is_a($richard, get_class($richard))) {  // Returns true OR false if the object belongs to the specified class. Syntax: is_a($object, $class_name)
    echo '<pre>True</pre>';
}
else{
    echo '<pre>False</pre>';
}