<?php
if (!empty($_POST)){
    $int = $_POST['number'];

    if ($int % 3){
       echo "Препоръчително облекло: за дъждовно време";

    }//even
    else{
        echo "Препорачитело облекло: за горещо време";
    }

}