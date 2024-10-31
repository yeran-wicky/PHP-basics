<?php

class cylinder {
    var $carr = array(0,0);

    public function __construct() {
        $this -> array = $carr;
    }

    public function rad($val) {
        $this -> array[0] = $val;
    }

    public function hei($val) {
        $this -> array[1] = $val;
    }

    public function calcarea() {
        $radius = $this -> array[0];
        $height = $this -> array[1];
        $area = 2 * (22/7) * $radius * ($radius + $height);
        return $area;
    }

    public function calcvol() {
        $radius = $this -> array[0];
        $height = $this -> array[1];
        $volume = (22/7) * $radius * $radius * $height;
        return $volume;
    }
}

$s1 = new cylinder();
$s1 -> rad(1000);
$s1 -> hei(2000);

echo "\nArea = " . $s1->calcarea() . "\n";
echo "Volume = " . $s1->calcvol() . "\n";