<?php
$arr = [
    ['model' => 'model1', 'CPU' => 3, 'HDD' => 1000, 'DR' => 1, 'SDD' => 1, 'LP' => 20, 'P' => 500, 'D' => 20],
    ['model' => 'model2', 'CPU' => 5, 'HDD' => 500, 'DR' => 2, 'SDD' => 1, 'LP' => 30, 'P' => 1000, 'D' => 30],
    ['model' => 'model3', 'CPU' => 5, 'HDD' => 400, 'DR' => 3, 'SDD' => 1, 'LP' => 40, 'P' => 600, 'D' => 40],
    ['model' => 'model4', 'CPU' => 5, 'HDD' => 100, 'DR' => 4, 'SDD' => 1, 'LP' => 60, 'P' => 700, 'D' => 50],
    ['model' => 'model5', 'CPU' => 3, 'HDD' => 200, 'DR' => 5, 'SDD' => 1, 'LP' => 50, 'P' => 800, 'D' => 60]
];
$arr1 = [];
for ($i=0; $i < count($arr) ; $i+= 1) { 
    $CPU = $arr[$i]['CPU'];
    $HDD = $arr[$i]['HDD'];
    $DR = $arr[$i]['DR'];
    $SDD = $arr[$i]['SDD'];
    $LP = $arr[$i]['LP'];
    $P = $arr[$i]['P'];
    $D = $arr[$i]['D'];
    $MSC = ((($CPU + $DR)*1000 + $HDD)*($SDD + 1)/$P)*100 + ($LP+$D);
    $arr[$i]['MSC'] = $MSC;
    $arr1[$i] = $MSC;
}
$sum = array_sum($arr1);
$average = $sum / count($arr1);
echo $average;
?>
<table border="1">
    <tr>
        <td>Модел</td>
        <td>Процесор</td>
        <td>Хард диск</td>
        <td>Резолюция на дисплея</td>
        <td>SSD</td>
        <td>Производителност</td>
        <td>Цена</td>
        <td>Търсене</td>
        <td>Коефициент на пазарен успех</td>
    </tr>
    <?php for($j = 0; $j < count($arr); $j += 1) { ?>
        <tr>
            <td><?= $arr[$j]['model'] ?></td>
            <td><?= $arr[$j]['CPU'] ?></td>
            <td><?= $arr[$j]['HDD'] ?></td>
            <td><?= $arr[$j]['DR'] ?></td>
            <td><?= $arr[$j]['SDD'] ?></td>
            <td><?= $arr[$j]['LP'] ?></td>
            <td><?= $arr[$j]['P'] ?></td>
            <td><?= $arr[$j]['D'] ?></td>
            <td><?= $arr[$j]['MSC'] ?></td>
        </tr>
    <?php } ?>
</table>
<?php
$max = $arr[0]['MSC'];
$max_model = $arr[0]['model'];
for ($k=0; $k < count($arr); $k+= 1) { 
    if ($arr[$k]['MSC'] > $arr[0]['MSC'] ) {
        $max = $arr[$k]['MSC'];
        $max_model = $arr[$k]['model'];
    }
}
echo 'Моделът с най-голям коефициент на пазарен успех е ' . $max_model . ' с коефициент : ' . $max . '.';  
