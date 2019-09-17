<?php 

class Square extends Rectangle {
	public $side;
	

	public function __construct($s){
	 //...
	}

	public function area_calc(){
		return  pow(2, $this->side);
	}
}
