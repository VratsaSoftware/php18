<form method="post" action="">
	<input type="text" name="username" placeholder="username ...">
	check<input type="checkbox" name="check" value="check">
	yes<input type="radio" name="rad" value="yes">
	no<input type="radio" name="rad" value="no">
	<input type="submit" name="submit" value="test">
</form>
<?php 
var_dump($_POST);
?>