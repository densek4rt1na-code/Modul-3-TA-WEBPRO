<?php
function cetak($arr): void {
    for ($x = 0; $x < count($arr); $x++) {
        echo "Nama: $arr[$x] \n";
    }
}

$nama = array("Andi", "Budi", "Cecep");
cetak($nama);

// Cara mengupdate dengan index
echo "Setelah diupdate \n";
$nama[2] = "Zaim";
cetak($nama);
?>