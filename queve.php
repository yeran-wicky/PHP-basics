<?php

class queve {
    var $arr = array();

    public function __construct() {
        $this -> arr =  array();
        print_r($this->arr);
    }

    public function addval($vals) {
        return array_push($this->arr,$vals);
        // print_r($this->arr);
    }

    public function view() {
        // print_r($this->arr);
    }
}

$s1 = new queve();
$s1 -> addval("1000");
// echo $s1 -> view();
$s1->arr;