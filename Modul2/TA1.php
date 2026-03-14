<?php

$n = isset($_GET['n']) ? intval($_GET['n']) : 0;

function prima($x){
    if($x < 2) return false;
    for($i = 2; $i <= sqrt($x); $i++){
        if($x % $i == 0){
            return false;
        }
    }
    return true;
}

function jumlahFaktor($x){
    $count = 0;
    for($i = 1; $i <= sqrt($x); $i++){
        if($x % $i == 0){
            if($i * $i == $x){
                $count += 1;
            }else{
                $count += 2;
            }
        }
    }
    return $count;
}

$hasil = 0;
$max = 0;

for($p = 2; $p <= $n; $p++){
    
    if($n % $p == 0 && prima($p)){
        
        $totalTelur = $n * $p;
        $faktor = jumlahFaktor($totalTelur);
        
        if($faktor > $max){
            $max = $faktor;
            $hasil = $p;
        }
    }
}

echo $hasil;

?>