<?php 

class Square {
	protected $side;
	protected $area;
	private $perimeter;
	
	public function __construct($a){
		$this->side = $a;
	}

	public function calculate_area()
	{
		return $this->area = $this->side*$this->side;
	}

	final public function calculate_perimeter()
	{
		return $this->perimeter = $this->side*4;
	}

	public function get_side(){
		return $this->side;
	}

	public function set_side($s){
		return $this->side = $s;
	}
}