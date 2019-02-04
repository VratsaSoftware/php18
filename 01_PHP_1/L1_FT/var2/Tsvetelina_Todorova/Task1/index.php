<?php
$rain_clothes = '<ul>
<li><a>Дъждобран</a></li>
<li><a>Чадър</a></li>
<li><a>Яке</a></li>
</ul>';

$sun_clothes = '<ul>
<li><a>Рокля</a></li>
<li><a>Бански</a></li>
<li><a>Слънчеви очила</a></li>
</ul>';



if (isset($_POST['check'])) {
    $date = $_POST['date'];
}
if (!empty($_POST)) {
    if ($date % 2 == 0) {
    $clothes = $rain_clothes;       
} else {
    $clothes = $sun_clothes;
    }
}
echo 'Облечете: ' . $clothes . '.';
