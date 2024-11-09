<?php

class Employee {

    // Create 2 properties
    var $first_name;
    var $last_name;

    // Create a function
//  function full_name() {
//      return $first_name . ' ' . $last_name;
//  }

    // If we build the function like that, we'll gonna have a error saying
    // that $first_name & $last_name is undefined. Php doesn't know that
    // they are properties in this class unless we use "this" keyword.
    // So, we need to modify the function as given below.
    
    // Modified function
    function full_name() {
        return $this->first_name . ' ' . $this->last_name;
    }

    // After using "$this" keyword, then it will identify them as they are properties (variables) in THIS class
    // Now, function will gonna work as we wanted
}

// Create an object
$person1 = new Employee;

// Setting values for the object we created above
$person1 -> first_name = 'Yeran';
$person1 -> last_name = 'Wicky';

// Outputting the value returned by the function full_name
echo '<pre>' . $person1 -> full_name() . '</pre>';