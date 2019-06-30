<?php 

class Page {
	public $title;
	public $content;
	public $footer;
	
	public function __construct($t, $c, $f) {
		$this->title = $t;
		$this->content = $c;
		$this->footer = $f;
	}

	public function render_header(){
		$str = $this->render_title();
		return $str;
	}
	public function render_title() {
		$str = '<h1>'.$this->title.'</h1>';
		return $str;
	}
	public function render_content() {
		$str = '<p>'.$this->content.'</p>';
		return $str;
	}
	public function render_footer() {
		$str = '<p>'.$this->footer.'</p>';
		return $str;
	}
}
