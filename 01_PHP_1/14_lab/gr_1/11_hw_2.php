<form action="" method="post">
	<input type="text" name="arr">
	<input type="submit" name="submit">	
</form>

<?php 

if (!empty($_POST['arr'])) {
	$input_str = $_POST['arr'];
	$input_arr = explode(' ', $input_str);

	function print_highest_element_between_two($arr){
		$res ='';
		$flag = 0;
	// var_dump($arr);
		$count = count($arr);
		for($i = 0; $i < $count; $i++){
			if($i == 0){
				if($arr[$i] > $arr[$i+1] && $arr[$i] > $arr[$count-1]){
					
					$res = $i;
					$flag++;
					break;
				}
			} elseif($i == $count-1){
				if($arr[$i] > $arr[0] && $arr[$i] > $arr[$i-1]){
					$res = $i;
					$flag++;

					break;
				}
			} else{
				if($arr[$i] > $arr[$i+1] && $arr[$i] > $arr[$i-1]){
					$res = $i;
					$flag++;

					break;
			}//end if
		}//end else
	}//end for

		if($flag!=0){

			echo $res;
		} else {		
			
			echo 'No such element';
		}
	}//end func def

	print_highest_element_between_two($input_arr);

}