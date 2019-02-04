<form action="#" method="post">
<input type="text" name="string">
<input type="submit" name="submit" value="Check">
</form>

<?php
if (isset($_POST['submit'])) {
	$str = $_POST['string'];
    if (!empty($str)) {
    $words = explode(' ', $str);
        for ($i = 0; $i < count($words); $i+= 1) {
        $letters = str_split($words[$i]);
            for ($k = 0; $k < count($letters) ; $k+= 1) {     
            }
        }
    }
}

