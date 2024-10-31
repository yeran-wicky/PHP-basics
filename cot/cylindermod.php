<?php

class Cylinder {
    // Define the array to hold radius and height
    private $carr = array(0, 0);

    // Constructor
    public function __construct() {
        $this->carr = array(0, 0);
    }

    // Method to set radius
    public function rad($val) {
        $this->carr[0] = $val;
        print_r($this->carr);
    }

    // Method to set height
    public function hei($val) {
        $this->carr[1] = $val;
        print_r($this->carr);
    }

    // Method to calculate surface area
    public function calcarea() {
        $radius = $this->carr[0];
        $height = $this->carr[1];
        $area = 2 * (22/7) * $radius * ($radius + $height);
        return $area;
    }

    // Method to calculate volume
    public function calcvol() {
        $radius = $this->carr[0];
        $height = $this->carr[1];
        $volume = (22/7) * $radius * $radius * $height;
        return $volume;
    }
}

// Instantiate the Cylinder class and set radius and height
$s1 = new Cylinder();
$s1->rad(7);
$s1->hei(21);

// Calculate and display the surface area and volume
echo "Surface Area: " . $s1->calcarea() . "\n";
echo "Volume: " . $s1->calcvol() . "\n";
