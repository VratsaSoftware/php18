<form method="post" action="">
	<input type="text" name="username" placeholder='username'>
	<input type="password" name="pass" placeholder='password'>
	<input type="submit" name="submit" value="login">
</form>
<?php 
var_dump($_POST);
if( !empty($_POST) ){
	$username = $_POST['username'];

	echo 'Welcome, ' . $username . '!';
}

?>