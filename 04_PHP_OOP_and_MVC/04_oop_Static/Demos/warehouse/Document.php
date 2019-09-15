<?php 

abstract class Document {
	public $document_number;
	static public $start_document_number;

	static public function set_start_doc_number($num){
		return self::$start_document_number = $num;
	}
}