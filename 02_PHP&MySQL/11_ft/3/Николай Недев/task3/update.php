<?php 
$title = 'Update';
include "includes/header.php";

$hotel_id = $_GET['hotel'];

$read_query = "SELECT hotel_id , hotel_name, rooms, h.date_deleted, h.destination_id, destination_name FROM hotels h JOIN destinations d ON h.destination_id = d.destination_id ";
$read_query .= "WHERE h.hotel_id=". $hotel_id;

$result = mysqli_query($conn, $read_query);

$row_hotel = mysqli_fetch_assoc($result);

$destinations_query = "SELECT * FROM destinations";
$destinations_result = mysqli_query($conn, $destinations_query);

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="read.php"> Back to Read <span class="sr-only">(current)</span></a>
      </li>
  </div>
</nav>
<div class="container">
	<div class="row justify-content-md-center">
		<h2>Update</h2>
	</div>
	<div class="row justify-content-md-center">			
		<div class="col-sm-10">			
			<form method="post" action="">
				<div class="form-group">
					<label for="cinema_name">hotel name</label>
					<input type="text" class="form-control" id="cinema_name" name="hotel_name" value="<?= $row_hotel['hotel_name'] ?>">
				</div>
				<div class="form-group">
					<label for="cinema_places">rooms</label>
					<input type="text" class="form-control" id="hotel_rooms" name="hotel_rooms" value="<?= $row_hotel['rooms'] ?>">
				</div>				
				<div class="form-group">
					<label for="country">Select Destination</label>
					<select class="form-control" id="destination" name="destination_id">
						<?php if(mysqli_num_rows($destinations_result) > 0){ ?>							
							<?php while($row = mysqli_fetch_assoc($destinations_result)){ ?>
<?php var_dump($row)?>
								<option value="<?= $row['destination_id']; ?>" <?php if( $row['destination_id'] == $row_hotel['destination_id']) { echo 'selected'; } ?> ><?= $row['destination_name'] ?></option>

							<?php } ?>

						<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<button type="submit" name="submit" class="btn btn-success">SAVE Hotel</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php 
if(isset($_POST['submit'])){
		$hotel_name 			= $_POST['hotel_name'];
		$cinema_places 			= $_POST['rooms'];
		$destination_id 		= $_POST['destination_id'];
		
		//to do add hidden field product id
		$update_query = "UPDATE hotels SET hotel_name='" .$hotel_name. "', ";
		$update_query .="rooms=" . (int)$hotel_rooms .", ";
		$update_query .= "destination_id=" . (int)$destination_id;
		$update_query .= " WHERE hotel_id=" . $hotel_id ;
		var_dump($update_query);
		
		$result_update = mysqli_query($conn, $update_query);
		
		if($result_update){
		// echo "Success!";
			header('Location: read.php');
		} else {
			echo mysqli_error($conn);
		// echo "Please, try again later!";
		}
	}
include 'includes/footer.php';
?>
