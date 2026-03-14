<?php
function cetak($arr): void {

    for ($x = 0; $x < count($arr); $x++) {
        echo "Nama: $arr[$x] \n";
    }

}

$nama = array("Andi", "Budi", "Cecep");
cetak($nama);

//Cara menambah satu nilai
echo "Setelah diadd satu buah nilai \n";
$nama[] = "Zaim";
cetak($nama);

//Cara menambah beberapa nilai sekaligus
echo "Setelah diadd lebih dari satu buah nilai \n";
array_push($nama, "Mega", "Caca");
cetak($nama);
?>