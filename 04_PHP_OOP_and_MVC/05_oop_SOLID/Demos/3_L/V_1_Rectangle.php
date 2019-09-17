<?php 

class Rectangle extends Square {
	public $b_side;
	

	public function __construct($a, $b){
	 //...
	}

	public function area_calc(){
		return  $this->a_side*$this->b_side;
	}
}
