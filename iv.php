<!DOCTYPE html>

<html>

<body>
<?php
//ЗА ТОВА ТРЯБВА ДА ИМАШ ВХОДНИ ДАННИ ОТ ФОРМА
$day = $_POST['day'];

function workdays ($day) {

switch ($day) {

    case 'Monday':

        echo 'Working day';

        break;

ТУК ИЗРЕЖДАШ И ОСТАНАЛИТЕ СЛУЧАИ

   case "saturday":
   //СЪБОТА И НЕДЕЛЯ МОЖЕ И ДА НЕ ГИ ИЗРЕЖДАШ, АМИ ДА ОСТАНАТ ЗА ДЕФОЛТНИЯ СЛУЧАЙ - АКО НЕ Е ДЕН ОТ СЕДМИЦАТА ЩЕ БЪДЕ НЕРАБОТЕН ДЕН

       echo "Your  not working day";

       break;

       default: 
       //ТУК МОЖЕШ ДА СЛОЖИШ НАДПИСА ЗА НЕРАБОТЕН ДЕН

       break;

  }

}

workdays("Tuesday");

?>
  
</body>

</html>