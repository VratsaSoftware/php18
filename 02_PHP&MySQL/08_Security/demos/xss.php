<?php 

echo htmlspecialchars('<p>');
echo "<p></p>";
echo PHP_EOL;
echo htmlentities('@log<p>');
echo PHP_EOL;
echo strip_tags('<script>alert(1)</script>');
// echo '<script>alert(1)</script>';
echo PHP_EOL;

