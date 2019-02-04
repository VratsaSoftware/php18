<form method="post">
	<p>search</p>
	<input type="text" name="search">
	<p>replace</p>
	<input type="text" name="replace">
	<p>text</p>
	<input type="text" name="text">
	<input type="submit" name="submit">	
</form>

<?php 

if (!empty($_POST)) {
	// var_dump($_POST);
	$search = $_POST['search'];
	$replace = $_POST['replace'];
	$text = $_POST['text'];

	$res_text = str_replace($search, $replace, $text);
	echo $text;
	echo "<p></p>";
	echo $res_text;
}

