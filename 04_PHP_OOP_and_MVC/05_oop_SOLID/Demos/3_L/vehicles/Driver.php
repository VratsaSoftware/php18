<?php  

class Driver {

    function go(Vehicle $v) {
        $v->startEngine();
        $v->accelerate();
    }
}
