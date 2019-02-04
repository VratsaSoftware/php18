<?php
if (isset($_POST['calculate'])) {
    $age = $_POST['age'];
}

$arr = '<ul>
<li><a>Rakia</a></li>
<li><a>Vodka</a></li>
<li><a>Cola</a></li>
</ul>';


if (!empty($_POST)) {
    if ($age > 18) {
    echo $arr;
    }
    if ($age < 18) {
    echo "No alcohol for you!";
    }
}