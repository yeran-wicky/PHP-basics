<?php

class Employee {

    var $emp_id;
    var $first_name;
    var $last_name;
    var $is_active;

}

// Created 2 objects
$person1 = new Employee;
$person2 = new Employee;

// Setting values for that 2 objects
$person1 -> emp_id = 100;
$person1 -> first_name = 'Yeran';
$person1 -> last_name = 'Wicky';
$person1 -> is_active = true;

$person2 -> emp_id = 101;
$person2 -> first_name = 'Yasasvi';
$person2 -> last_name = 'Jayoda';
$person2 -> is_active = true;

// Reading values
echo '<pre>ID is: ' . $person1 -> emp_id . '</pre>';
echo '<pre>First name is: ' . $person1 -> first_name . '</pre>';
echo '<pre>Last name is: ' . $person1 -> last_name . '</pre>';
echo '<pre>Full name is: ' . $person1 -> first_name . ' ' . $person1 -> last_name . '</pre>';
echo '<pre>Active status: ' . $person1 -> is_active . '</pre>';

// Same thing above, bit different
echo '<pre>';
print_r(
    'ID is: ' . $person1 -> emp_id . '<br>' .
    'First name is: ' . $person1 -> first_name . '<br>' .
    'Last name is: ' . $person1 -> last_name . '<br>' .
    'Full name is: ' . $person1 -> first_name . ' ' . $person1 -> last_name . '<br>' .
    'Active status: ' . $person1 -> is_active
);
echo '</pre>';

/////////////////////////////////////////////////////////////

$var1 = get_class_vars('Employee'); // Returns an array with the properties of the given class name. Syntax: get_class_vars($class_name);

// Can't get the output we want if we use just echo because it's an array
echo '<pre>' . $var1 . '</pre>';

// We must use print_r
echo '<pre>Class variables of class "Employee": <br>';
print_r($var1);
echo '</pre>';
// Above shows only the variables but no values, because we didn't given any when creating the class 'Employee'

/////////////////////////////////////////////////////////////

$var2 = get_object_vars($person1);  // Returns an array with the properties of the given object. Syntax: get_object_vars($object_name);

echo '<pre>Object variables of object "person1": <br>';
print_r($var2);
echo '</pre>';
// Above shows variables with their values of that object (person1)

/////////////////////////////////////////////////////////////

$var3 = property_exists('Employee', 'first_name');  // Returns true or false if the property ($string) exists in the class ($class_name) or object ($object_name) given. Syntax: property_exists($object_name or $class_name , $string);


if ($var3) {    // Or you can type like this: "if (property_exists('Employee', 'first_name')) {" without creating a variable "$var3" 
    echo '<pre>Property "first_name" found in "Employee" class</pre>';
}
else {
    echo '<pre>Property "first_name" cannot found in "Employee" class</pre>';
}

//

$var4 = property_exists('Employee', 'country');

if ($var4) {
    echo '<pre>Property "country" found in "Employee" class</pre>';
}
else {
    echo '<pre>Property "country" cannot found in "Employee" class</pre>';
}

