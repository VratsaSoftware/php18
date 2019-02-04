<form method="post">
	<input type="checkbox" name="test[]" value="product1">
	<input type="checkbox" name="test[]" value="product2">
	<input type="checkbox" name="test[]" value="product3">
	<input type="submit" name="submit">
</form>

<?php 

var_dump($_POST['test']);