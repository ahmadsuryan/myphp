<?php

class Ape extends Animal {
    public $name,$legs,$cold_blooded;
    
    public function __construct($name) {
        parent::__construct($name);
    }

    public function yell() {
        echo "Auooo";
    }

}




