bojidar_angelov [12:04 PM]

<?php

if (!empty($_POST)) {

   $year = $_POST['year'];



if((0 == $year % 4) && (0 != $year % 100) || (0 == $year % 400))

{

echo "$year  е високосна година.";    

}



else  

{  

echo "$year не е високосна година";    

}

}

?>
<!DOCTYPE html>

<html>

<body>

 <form method="post" action="">

     <input type="text" name="year">

     <input type="submit" name="submit" value="Check">    

 </form>

</body>

</html>