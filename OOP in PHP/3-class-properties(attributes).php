<?php

class Employee {

    var $emp_id;
    var $first_name;
    var $last_name;
    var $is_active = false;

}

// Created an object
$person = new Employee;

// Setting values for that object
$person -> emp_id = 100;
$person -> first_name = 'Yeran';
$person -> last_name = 'Wicky';

// Reading values
echo '<pre>ID is: ' . $person -> emp_id . '</pre>';
echo '<pre>First name is: ' . $person -> first_name . '</pre>';
echo '<pre>Last name is: ' . $person -> last_name . '</pre>';

// Same thing above, bit different
echo '<pre>';
print_r(
    'ID is: ' . $person -> emp_id . '<br>' .
    'First name is: ' . $person -> first_name . '<br>' .
    'Last name is: ' . $person -> last_name
);
echo '</pre>';

//////////////////////////////////////////////

