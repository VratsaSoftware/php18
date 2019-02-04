<!DOCTYPE>
<html lang="en">
<head >
    <meta charset="UTF-8">
    <title>Task1</title>
</head>
<body>
 <form action="#" method="post">
     <input type="number" name="age" placeholder="Insert your age ">
     <p><input  type="submit" name="submit" value="open menu" ></p>

 </form>


<?php
    if (!empty($_POST)){
        $age = $_POST['age'];


        if($age >= 18){
            echo "<p>Alcohol menu</p>
                   <ul>
                    <li>
                        Savoy Vodka 1l
                    </li>
                     <li>
                        grey goose Vodka 700ml
                        </li>   
                  </ul>";
        }
        elseif ($age < 18){

            echo"
                <p> Drinks without alcohol</p>
                    <ul>
                        <li>
                        Cappy pulpy;
                        </li>
                        <li>
                        queen`s
                        
                         </li>
                    </ul>
                    ";
        }//end of cheking for age
    }// end of cheking for $_POST
?>


</body>
</html>