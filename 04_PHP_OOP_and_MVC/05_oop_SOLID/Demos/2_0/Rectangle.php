<?php 

class Rectangle extends Square {
	public $b_length;

	public function __construct($b, $a){
		$this->b_length = $b;
		parent::__construct($a);
	}

	public function calc_area(){
		return $this->length*$this->b_length;
	}
}