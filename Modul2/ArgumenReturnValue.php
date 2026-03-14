<?php
function Halo(int $x = 0, int $y = 0): int {
    return $x + $y;
}

//Melakukan echo kepada hasil pemanggilan fungsi
echo halo(5, 4);

//Melakukan assign nilai return dari fungsi kepada variabel
$z = halo(2, 2);
echo ("\n$z");
?>