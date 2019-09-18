<?php 

class AreaCalculator { 
 
 	protected $shapes; 
 
 	public function __construct($shapes = array()) {       
 		$this->shapes = $shapes;  
 	} 
 
 	public function sum_areas() {      
 	  
 	  foreach($this->shapes as $shape) {
 	  		if(is_a($shape, 'ShapeInterface')) {
 	  			$area[] = $shape->calc_area();
 	  		} else {
				continue;
			}     
		}
		return array_sum($area); 
 	} 
 
 	public function output() {       
 		return "Sum of the areas of provided shapes: ". $this->sum();  
 	} 

 }