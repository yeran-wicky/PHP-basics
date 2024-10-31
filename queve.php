<?php

class Queue {
    private $_size;
    private $_queue = [];

    public function __construct($size) {
        $this->_size = $size;
    }

    public function add($n) {
        if (count($this->_queue) >= $this->_size) {
            return false;
        }
        $this->_queue[] = $n;
        return true;
    }

    public function first() {
        if (count($this->_queue) == 0) {
            return null;
        }
        return $this->_queue[0];
    }

    public function size() {
        return count($this->_queue);
    }

    public function printQueue() {
        return implode(",", $this->_queue);
    }

    public function reverseQueve() {
        $this->_queue = array_reverse($this->_queue);
    }
}

// example usage
$q1 = new Queue(15);

// add elements to the queve
for ($i = 5; $i <= 15; ++$i) {
    $q1->add($i);
}

// shows first element in the queve
echo $q1->first() . "\n";

// shows queve size
echo $q1->size() . "\n";

// shows all queve elements
echo $q1->printQueue() . "\n";

// reverse and shows the queue elements
$q1->reverseQueve();
echo $q1->printQueue() . "\n";