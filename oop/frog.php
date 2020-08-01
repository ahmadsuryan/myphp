<?php

class Frog extends Animal {

    public function __construct($name) {
        parent::__construct($name);
        $this->set_legs(4);
        $this->set_cold_blooded('true');
    }

    public function jump() {
        echo "hop hop";
    }

}




