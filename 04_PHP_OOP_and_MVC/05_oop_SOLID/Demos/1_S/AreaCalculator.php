<?php 

class AreaSumCalculator { 
 
 	protected $shapes; 
 
 	public function __construct($shapes = array()) {       
 		$this->shapes = $shapes;  
 	} 
 
 	public function sum() {      
 	 // logic to calculate and sum the areas  
 	} 
 
 	public function output() {       
 		return "Sum of the areas of provided shapes: ". $this->sum();  
 	} 

 }