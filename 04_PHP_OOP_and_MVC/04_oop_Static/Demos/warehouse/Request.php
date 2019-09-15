<?php 

class Request extends Document {
	// static public $start_document_number;

	public function __construct(){
		$this->document_number = self::$start_document_number;
		// self::$start_document_number = $this->document_number;
	}

	// static public function set_start_doc_number($num){
	// 	self::$start_document_number = $num;
	// }


}