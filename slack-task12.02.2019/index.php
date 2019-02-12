<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Leap year</title>
</head>
<body style="padding-left: 35px; background-color: skyblue;" > 
    <form action="#" method="post" class="form">
        <div class="form-group">
            <label style="border-left: 10px solid grey; background-color: white; text-decoration: underline; font-size: 35px">Insert your year</label>
            <input type="number" name="year" class="form-control" style="width: 35%; padding-left: 35px; ">
        </div>
        <button type="submit" class="btn btn-primary">Chek</button>
    </form>
<?php
    if (!empty($_POST)){
        $year = $_POST['year'];
    if((0 == $year % 4) && (0 != $year % 100) || (0 == $year % 400))
        {
            echo "$year is a Leap Year.";    
        } else {  
            echo "$year is not a Leap Year.";    
        }
    }
?>



</body>
</html>
Оставяш много празни редове в кода!
Формата е вложена в боди тага и трябва да е с отстъп!
Пренаредила съм кода, да изглежда добре!
Стиловите правила не се пишат инлайн
<body style="padding-left: 35px; background-color: skyblue;" > 
Трябва да имаш стилови правила в head тага
Цветовете се задават само с код!