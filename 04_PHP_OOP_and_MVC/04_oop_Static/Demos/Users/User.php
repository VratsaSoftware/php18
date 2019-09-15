<?php 

class User {
	static public $type = 'user';

	static public function getType(){
		echo self::$type;
	}

	static public function getOwnType(){
		echo static::$type;
	}
}