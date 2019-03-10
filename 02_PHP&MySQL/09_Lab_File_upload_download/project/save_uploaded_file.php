<?php include 'includes/db_connect.php'; 

if(isset($_POST["submit"])) {
  // var_dump($_POST);
  // var_dump($_FILES);
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["file_to_upload"]["name"]);
	$upload_ok = 1;
	$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

	$check = getimagesize($_FILES["file_to_upload"]["tmp_name"]);
    // var_dump($check);

	if($check !== false) {
		echo "File is an image - " . $check["mime"] . ".";
		$upload_ok = 1;
	} else {
		echo "File is not an image.";
		$upload_ok = 0;
	}

    // Check if file already exists
	if (file_exists($target_file)) {
		echo "Sorry, file already exists.";
		$upload_ok = 0;
	} 
  	// Check file size
	if ($_FILES["file_to_upload"]["size"] > 500000) {
		echo "Sorry, your file is too large.";
		$upload_ok = 0;
	} 
  	
  	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" 
		&& $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		$upload_ok = 0;
	} 

  // Check if $upload_ok is set to 0 by an error
	if ($upload_ok == 0) {
		echo "Sorry, your file was not uploaded.";
  		// if everything is ok, try to upload file
	} else {
		if (move_uploaded_file($_FILES["file_to_upload"]["tmp_name"], $target_file)) {
			$file 		= basename( $_FILES["file_to_upload"]["name"]);
			$username 	= $_POST['username'];

   			 //save the file name in DB
			$image_create_query = "INSERT INTO images (user, image)";
			$image_create_query .= " VALUES ('" .  $username . "', '" . $file . "')";

			$result = mysqli_query($conn, $image_create_query);

			if ($result) {
				// echo "The file ". $file . " has been uploaded.";
     			header('Location: index.php');
			}

		} else {
			echo "Sorry, there was an error uploading your file.";
     		// header('Location: index.php');

		}

	}
}
?>
