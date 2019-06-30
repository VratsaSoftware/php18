<?php 

class Cube extends Square {
	
	public $volume;

	public function calculate_volume()
	{
		$side_area = parent::calculate_area();

		return $this->volume = $side_area*$this->side;

	}
	// public function calculate_perimeter(){
	// 	return $this->side*12;
	// }
}