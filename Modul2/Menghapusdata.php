<?php
function cetak($arr): void {

    for ($x = 0; $x < count($arr); $x++) {
        echo "Nama: $arr[$x] \n";
    }
}

$nama = array("Andi", "Budi", "Cecep");
cetak($nama);

// Menghapus elemen menggunakan array_splice
echo "Setelah menghapus elemen pertama menggunakan array_splice \n";
array_splice($nama, 0, 2); // Menghapus "Andi"

cetak($nama);
?>