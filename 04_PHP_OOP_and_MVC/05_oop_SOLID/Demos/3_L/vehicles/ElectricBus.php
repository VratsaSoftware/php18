<?php 

class ElectricBus extends Vehicle {
 
    function accelerate() {
        $this->increaseVoltage();
        $this->connectIndividualEngines();
    }
 
    private function increaseVoltage() {
        // Electric logic
    }
 
    private function connectIndividualEngines() {
        // Connection logic
    }
 
}