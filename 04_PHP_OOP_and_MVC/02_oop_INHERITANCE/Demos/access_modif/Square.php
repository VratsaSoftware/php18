<?php 

class Square {
	public $side;
	public $area;
	
	public function __construct($a){
		$this->side = $a;
	}

	public function calculate_area()
	{
		return $this->area = $this->side*$this->side;
	}

	public function get_side(){
		return $this->side;
	}

	public function set_side($s){
		return $this->side = $s;
	}
}