<!DOCTYPE>
<html lang="en">
<head>
    <title>Task2</title>
</head>
<body>
    <?php

        $People = [
                    'name' => 'tsvetan',
                    'height' =>1.75,
                    'age'   => 16,
                    'kilograms' => 85,

                    ];
        //var_dump($People);

        $index = (($People['height']*3)-($People['kilograms']*2))/($People['age']^3);
        //var_dump($index);

        $arr_add = ['Index' => "$index"];
        $People_after_merge = array_merge($People,$arr_add);
        //var_dump($People_after_merge);

        foreach ($People_after_merge as $key => $value){
                echo '<table border="1">'.
                "<tr>
                    <td>
                        $key
                    </td>
                    <td>
                        $value
                    </td>
                </tr>
            </table>";

        }

    ?>

</body>
</html>