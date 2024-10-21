<?php

class queve {
    var $arr = array();

    public function __construct() {
        $this -> arr =  array(1,2,3,3,4,5);
        print_r($this->arr);
    }
}

$s1 = new queve();
// $s1 -> addval("1000");
// echo $s1 -> view();