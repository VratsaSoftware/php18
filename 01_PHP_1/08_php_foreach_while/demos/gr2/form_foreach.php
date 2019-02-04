<?php 
$phone_numbers = [	
					'John Smith'=> '+1-555-8976',
					'Lisa Smith'=> '+1-555-1234',
					'Sam Doe'	=> '+1-555-5030',
				];

?>
<form action="" method="get">
	<select name="man">
		<?php 
		foreach ($phone_numbers as $man => $phone) {
			echo "<option value='$man'>$man</option>";
		}
		?>
	</select>
	<input type="submit" name="submit" value="send">
</form>
<?php 
	if( !empty($_GET) ){
		$man = $_GET['man'];
		echo $man .'`s phone number is '. $phone_numbers[$man];
	}
?>