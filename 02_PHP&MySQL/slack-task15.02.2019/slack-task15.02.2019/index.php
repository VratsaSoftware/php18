<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>slack task</title>
</head>
<body>
<?php

$day = "sunday";

if ($day == "sunday" || $day == 'saturday'){
    echo "this is not working day";

}
elseif($day = "monday" || $day = "tuesday" || $day = "wednesday" || $day = "thursday" || $day = "friday"){
        echo "this is working day ";
}

?>

</body>
</html>