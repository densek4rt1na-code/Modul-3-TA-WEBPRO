<?php
// Fungsi kalkulator dengan semua operator
function kalkulator(float $a, string $op, float $b) {

    switch ($op) {

        // Penjumlahan
        case "+":
            return $a + $b;

        // Pengurangan
        case "-":
            return $a - $b;

        // Perkalian
        case "*":
            return $a * $b;

        // Pembagian
        case "/":
            return ($b == 0) ? "Error: Pembagian dengan nol tidak diperbolehkan." : $a / $b;

        // Modulus
        case "%":
            return ($b == 0) ? "Error: Modulus dengan nol tidak diperbolehkan." : $a % $b;

        // Perpangkatan
        case "^":
            return pow($a, $b);

        // Input tidak valid
        default:
            return "Operator tidak valid";
    }
}

// Penjumlahan
echo kalkulator(a: 3, op: "+", b: 5); // Output: 8

// Pembagian
echo ("\n" . kalkulator(a: 10, op: "/", b: 20)); // Output: 0.5

// Tidak valid
echo ("\n" . kalkulator(a: 10, op: "x", b: 20)); // Output: Operator tidak valid

?>