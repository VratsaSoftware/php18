<?php
$arr = [
    ['name' => 'Niki', 'age' => 20, 'height' => 160, 'weight' => 65],
    ['name' => 'Riki', 'age' => 30, 'height' => 170, 'weight' => 75],
    ['name' => 'Niki', 'age' => 40, 'height' => 150, 'weight' => 50],
    ['name' => 'Niki', 'age' => 60, 'height' => 180, 'weight' => 85],
    ['name' => 'Niki', 'age' => 50, 'height' => 192, 'weight' => 90],
];

$arr1 = [];
for ($i=0; $i < count($arr) ; $i+= 1) { 
    $age = $arr[$i]['age'];
    $height = $arr[$i]['height'];
    $weight = $arr[$i]['weight'];
    $ITM = ($height*3 - $weight*2)/(pow($age, 2));
    $arr[$i]['ITM'] = $ITM;
    $arr1[$i] = $ITM;
}

$sum = array_sum($arr1);
$average = $sum / count($arr1);
echo $average;

$min = $arr[0]['ITM'];
$min_name = $arr[0]['name'];
for ($k=0; $k < count($arr); $k+= 1) { 
    if ($arr[$k]['ITM'] < $arr[0]['ITM'] ) {
        $min = $arr[$k]['ITM'];
        $min_name = $arr[$k]['name'];
    }
}
echo 'The min name is ' . $min_name . ' with  ITM : ' . $min . ' .';
?>

<table border = 1>
    <tr>
        <td>Name</td>
        <td>Age</td>
        <td>Height</td>
        <td>Weight</td>
        <td>ITM</td>
    </tr>
    <?php for($m=0; $m < count($arr); $m++) { ?>
    <tr>
        <td><?= $arr[$m]['name'] ?></td>
        <td><?= $arr[$m]['age'] ?></td>
        <td><?= $arr[$m]['height'] ?></td>
        <td><?= $arr[$m]['weight'] ?></td>
        <td><?= $arr[$m]['ITM'] ?></td>
        <?php } ?>
    </tr>
<table>