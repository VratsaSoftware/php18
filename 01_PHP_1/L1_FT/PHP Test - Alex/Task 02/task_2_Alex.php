<?php

$arr = [['name' => 'city_1', 'Y' => '1950', 'P' => '200000', 'NF' => '7', 'SH' => '40', 'CA' => '500', 'YI' => '300'],
        ['name' => 'city_2', 'Y' => '1947', 'P' => '400000', 'NF' => '10', 'SH' => '60', 'CA' => '300', 'YI' => '500'],
        ['name' => 'city_3', 'Y' => '1820', 'P' => '300000', 'NF' => '15', 'SH' => '70', 'CA' => '100', 'YI' => '200'],
        ['name' => 'city_4', 'Y' => '1760', 'P' => '700000', 'NF' => '9', 'SH' => '50', 'CA' => '600', 'YI' => '100'],
        ['name' => 'city_5', 'Y' => '1889', 'P' => '100000', 'NF' => '20', 'SH' => '45', 'CA' => '300', 'YI' => '240'],
       ];

$count = count($arr);

$tig_1 = (((($arr[0]['NF']+$arr[0]['SH'])/$arr[0]['CA'])*100)*$arr[0]['P']/$arr[0]['CA'])*(2019 - $arr[0]['Y']);
$tig_2 = (((($arr[1]['NF']+$arr[1]['SH'])/$arr[1]['CA'])*100)*$arr[1]['P']/$arr[1]['CA'])*(2019 - $arr[1]['Y']);
$tig_3 = (((($arr[2]['NF']+$arr[2]['SH'])/$arr[2]['CA'])*100)*$arr[2]['P']/$arr[2]['CA'])*(2019 - $arr[2]['Y']);
$tig_4 = (((($arr[3]['NF']+$arr[3]['SH'])/$arr[3]['CA'])*100)*$arr[3]['P']/$arr[3]['CA'])*(2019 - $arr[3]['Y']);
$tig_5 = (((($arr[4]['NF']+$arr[4]['SH'])/$arr[4]['CA'])*100)*$arr[4]['P']/$arr[4]['CA'])*(2019 - $arr[4]['Y']);


echo '<ul>
         <li>' . $arr[0]['name'] . ': ' . $tig_1 . '</li>
         <li>' . $arr[1]['name'] . ': ' . $tig_2 . '</li>
         <li>' . $arr[2]['name'] . ': ' . $tig_3 . '</li>
         <li>' . $arr[3]['name'] . ': ' . $tig_4 . '</li>
         <li>' . $arr[4]['name'] . ': ' . $tig_5 . '</li>
      </ul>';

$avg = ($tig_1 + $tig_2 + $tig_3 + $tig_4 + $tig_5) / 5;

echo 'Average TIG: ' . $avg;


echo '<table border="1">
         <tr>
            <td>Име</td>
            <td>Година на основаване</td>
            <td>Население</td>
            <td>Брой предприятия</td>
            <td>Брой спортни зали</td>
            <td>Брой културни мероприятия годишно</td>
            <td>Годишен приход на глава от население</td>
         </tr>';
         for ($i=0; $i < $count; $i++) { 
            echo '<tr>';
            foreach ($arr[$i] as $value) {
               echo '<td>'.$value.'</td>';
            }
            echo '</tr>';
         }
         echo '</table>';


$min = min($tig_1, $tig_2, $tig_3, $tig_4, $tig_5);

echo 'Minimum TIG: ' . $min;