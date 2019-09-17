<?php 

class Circle implements ShapeInterface { 
 	public $radius; 
 	public function __construct($radius) { 
 	    $this->radius = $radius; 
 	} 

 	public function calc_area() {      
 		return pi()*pow($this->radius, 2);
 	}
}