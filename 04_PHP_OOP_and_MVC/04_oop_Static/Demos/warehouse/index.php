<?php 

include 'Document.php';
include 'Request.php';
include 'Sale.php';

echo Request::set_start_doc_number(200);
echo '<p></p>';
echo Sale::set_start_doc_number(300);