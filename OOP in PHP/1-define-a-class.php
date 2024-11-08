<?php

class Employee {

}

////////////////////////////////////////////

$classes = get_declared_classes();  //Returns an array of defined classes

echo '<pre>';
print_r($classes);
echo '</pre>';

////////////////////////////////////////////

$class_name_1 = 'Employee';

if (class_exists($class_name_1)) {    // Checks if a particular class exists and returns true OR false
    echo '<pre>Class ' . $class_name_1 . ' is avaliable.</pre>';
}
else{
    echo '<pre>Class ' . $class_name_1 . ' is not avaliable.</pre>';
}

////////////////////////////////////////////

$class_name_2 = 'Fruit';

if (class_exists($class_name_2)) {    // Checks if a particular class exists and returns true OR false
    echo '<pre>Class ' . $class_name_2 . ' is avaliable.</pre>';
}
else{
    echo '<pre>Class ' . $class_name_2 . ' is not avaliable.</pre>';
}

////////////////////////////////////////////