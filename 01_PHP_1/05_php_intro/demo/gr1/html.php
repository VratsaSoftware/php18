<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		#first {
			color: #E94848;
		}

		#second {
			color: #0C17F8;
		}
	</style>
</head>
<body>
	
<?php 
$name = "My Name";
echo "<div>".$name."</div>";
$name = 'Your Name';
$id = "first";
echo "<div id=$id>".$name."</div>";
$name = 'His Name';
$id = "second";
echo "<div id=$id>".$name."</div>";
?>

</body>
</html>
