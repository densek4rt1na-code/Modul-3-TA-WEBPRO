<?php

$desimal = isset($_GET['n']) ? intval($_GET['n']) : 0;

$hexa = strtoupper(dechex($desimal));

echo "Bilangan desimal: " . $desimal . "<br>";
echo "Bilangan hexadecimal: " . $hexa;

?>