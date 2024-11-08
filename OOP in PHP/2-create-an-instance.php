<?php

class Employee {

}

class Customer {

}

$mike = new Employee;
$richard = new Employee;
$david = new Customer;

echo '<pre>' . 
get_class($mike);   //Returns the class name of the object / instance
echo '</pre>';

echo '<pre>' . 
get_class($david);  //Returns the class name of the object / instance
echo '</pre>';