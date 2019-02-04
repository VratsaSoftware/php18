<form method="post" action="test.php">
	<input type="text" name="username" placeholder='username'>
	<input type="password" name="pass" placeholder='password'>
	<input type="submit" name="submit" value="login">
</form>
<?php 
// var_dump($_GET);
var_dump($_POST);
?>