<?php 

abstract class FoodFacilities implements FoodPreparation {
	public $menu;
	public $type;
	public $location;
	public $work_hours;
	public $name;

	public function __contruct($n, $l){
		$this->name = $n;
		$this->location = $l;
	}

	abstract public function sell();
	abstract public function receive_orders();
	abstract public function food_ingredients_delivery();
	abstract public function food_preparation();

}
