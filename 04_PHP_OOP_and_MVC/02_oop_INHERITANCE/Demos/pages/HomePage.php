<?php 

class HomePage extends Page {
	public $slider;
	public $banner;

	public function __construct($t, $c, $f, $sl, $ban){
		parent::__construct($t, $c, $f);
		$this->slider = $sl;
		$this->banner = $ban;
	}

	public function render_header(){
		$str = parent::render_header();
		$str.= $this->render_slider();

		return $str;
	}

	public function render_slider() {
		$str = '<p>'.$this->slider.'</p>';
		return $str;
	}

}