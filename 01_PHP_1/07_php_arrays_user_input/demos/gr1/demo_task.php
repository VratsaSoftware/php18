<form method="post" action="demo_task.php">
	<input type="text" name="age" placeholder="age ...">
	<input type="submit" name="submit" value="test">
</form>
<?php 
var_dump($_POST);
if( !empty($_POST) ) {
	$age = $_POST['age'];

	if($age > 18) {
		echo 'Welcome!';
	} else {
		echo 'Not welcome!';
	}//end if age
}//end if not empty
?>