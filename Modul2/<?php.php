<?php
function decToHex(int $decimal): string {
    if ($decimal === 0) return "0";

    $hexChars = "0123456789ABCDEF";
    $result   = "";
    $isNeg    = $decimal < 0;
    $n        = abs($decimal);

    while ($n > 0) {
        $result = $hexChars[$n % 16] . $result;
        $n      = (int)($n / 16);
    }

    return $isNeg ? "-" . $result : $result;
}

// Ambil input
$dec = isset($_GET['dec']) ? trim($_GET['dec']) : '';

// Validasi & output
if ($dec === '') {
    echo "Masukkan parameter ?dec=angka";
} elseif (!is_numeric($dec) || strpos($dec, '.') !== false) {
    echo "Input harus bilangan bulat!";
} else {
    echo decToHex((int)$dec);
}