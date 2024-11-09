<?php

class Employee {

    // Methods (Functions)
    function greet() {
        return 'Hello World!';
    }

    function get_basic_salary() {

    }
}

// Create an object
$person1 = new Employee;

// Calling the method (function): "greet()"
// This outputs "Hello World!"
echo '<pre>' . $person1 -> greet() . '</pre>';

////////////////////////////////////////////////////////////

$var1 = get_class_methods('Employee');  // Returns an array with the methods of a given class ($class_name) or object ($object_name). Syntax: get_class_methods($class_name or $object_name);

echo '<pre>';
print_r($var1);
echo '</pre>';

// Even if we used an object name, the result is same as above. (Above, class name is used)
$var2 = get_class_methods($person1);

echo '<pre>';
print_r($var2);
echo '</pre>';

////////////////////////////////////////////////////////////

$var3 = method_exists('Employee', 'greet');     // Returns true OR false if the method ($string) exists in the class ($class_name) or object ($object_name) given. Syntax: method_exists($class_name or $object_name, $string);

if ($var3) {    // Or you can type like this: "if (method_exists('Employee', 'greet')) {" without creating a variable "$var3" 
    echo '<pre>Method "greet" exists</pre>';
}
else {
    echo '<pre>Method "greet" does not exists</pre>';
}

//

if (method_exists('Employee', 'address')) {
    echo '<pre>Method "address" exists</pre>';
}
else {
    echo '<pre>Method "address" does not exists</pre>';
}

//

if (method_exists('Employee', 'get_basic_salary')) {
    echo '<pre>Method "get_basic_salary" exists</pre>';
}
else {
    echo '<pre>Method "get_basic_salary" does not exists</pre>';
}

// Also we can use object name, instead of class name. output will be same as above

if (method_exists($person1, 'get_basic_salary')) {
    echo '<pre>Method "get_basic_salary" exists</pre>';
}
else {
    echo '<pre>Method "get_basic_salary" does not exists</pre>';
}