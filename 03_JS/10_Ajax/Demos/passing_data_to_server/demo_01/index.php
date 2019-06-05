<?php 
include 'database.php';

$read_query = "SELECT * FROM posts";

$result = mysqli_query($conn, $read_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ajax Demo</title>
</head>
<body>
	<div id="info">
		<?php 
		if (mysqli_num_rows($result) >0) {
			while($row = mysqli_fetch_assoc($result)){
				echo '<h1>'. $row['title'].'</h1>';
				echo '<p>'. $row['content'].'</p>';
				echo "<hr>";
			}
		}

		?>		
	</div>

	<form method="post" id="demo">
		<p><input type="text" name="title" placeholder="enter title ..." id="title" ></p>
		<p><textarea name="content" placeholder="enter description" id="content"></textarea></p>
		<input type="submit" name="submit" value="add post" id="submit">		
	</form>
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">
		$('#demo').submit(displayPost);
		function displayPost(e){
			//!!!!!!!!!!!!IMPORTANT!!!!!!!!!!
			e.preventDefault();
			// console.log(1);
			var title = $('#title').val();
			var content = $('#content').val();
			console.log(title,content)
			$.ajax({				
				type:'POST',
				url:'query.php',
				data:{	title:  	title,
						content: 	content },						
				success:function(response){
					console.log(response)
						var res = $.parseJSON(response);
						console.log(res);
						var h1 = $('<h1>').text(res.title);						
						var p = $('<p>').text(res.content);	
						var hr = $('<hr>');
						$('#info').append(h1);					
						$('#info').append(p);
						$('#info').append(hr);
					},
				error:function(data){
					//code to execute on error
				}
				});			
			}

	</script>
</body>
</html>