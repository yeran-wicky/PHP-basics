<?php

class cylinder {
    var $carr = array(0,0,0);

    public function __construct($rad,$hei,$the) {
        $carr[0] = $rad;
        $carr[1] = $hei;
        $carr[2] = $the;
        $this -> array = $carr;
    }

    // public function rad($val) {
    //     $this -> array[0] = $val;
    // }

    // public function hei($val) {
    //     $this -> array[1] = $val;
    // }

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

    public function calchvol() {
        $radius = $this -> array[0];
        $height = $this -> array[1];
        $theta = $this -> array[2];
        $hvolume = (1/2) * $radius * $radius * ($theta - sin($theta)) * $height;
        return $hvolume;
    }
}
$radi = $_POST['radius'];
$heig = $_POST['height'];
$thet = $_POST['theta'];

$s1 = new cylinder($radi,$heig,$thet);
// $s1 -> rad(1000);
// $s1 -> hei(2000);

echo "\nArea = " . $s1->calcarea() . "\n";
echo "Volume = " . $s1->calcvol() . "\n";
echo "Horizontal volume = " . $s1->calchvol() . "\n";