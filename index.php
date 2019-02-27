<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Age">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>https:</title>
</head>
<body>
<?php

$x   = rand(1, 10);
$num = '';
//var_dump($x);

if (isset($_POST['submit'])) {
    $num = $_POST['num']; // Add this to set value for $num variable
    if ($num < $x)
    {
        echo " Your number is lower! <br />";
    } elseif ($num > $x)
    {
        echo " Your number is higher! <br />";
    } elseif ($num == $x)
    {
        echo " Congratulations! You guessed the hidden number. <br />";
    } else
    {
        echo " You never set a number! <br />";
    }
}
?>
<p>
<form action="" method="post">
    <input type="number" name="num">
    <button type="submit" name="submit">Guess</button>
    <button type="reset" name="Reset">Reset</button>
</form>
</p>

</body>
</html>