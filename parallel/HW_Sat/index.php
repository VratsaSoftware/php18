<!DOCTYPE>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <meta charset="UTF-8">
<title>HW_sat</title>
</head>
<body class="row " style="font-size: 72px">




<?php
/**
 * User: tsvetan
 * Date: 2/8/2019
 * Time: 8:18 PM
 */

    echo "<div class=' col-lg-6 col-md-9 col-sm-12'>";


        date_default_timezone_set("Australia/Sydney");

         $final_time_Au = date("H:i:s", time());
         echo "The time in Australia is: $final_time_Au";
    echo "</div>";

    echo "<div class='col-md-offset-6 col-lg-6 col-md-9 col-sm-12'>";

         date_default_timezone_set("Europe/Sofia");

         $final_time_BG = date("H:i:s", time());
         echo  "The time in Bulgaria is: $final_time_BG";
    echo "</div>";

?>


</body>
</html>