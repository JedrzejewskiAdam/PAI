<?php
// Definiowanie dwóch zmiennych
$a = 10;
$b = 5;

// Dodawanie
$sum = $a + $b;
echo "Dodawanie: $a + $b = $sum\n";

// Odejmowanie
$difference = $a - $b;
echo "Odejmowanie: $a - $b = $difference\n";

// Mnożenie
$product = $a * $b;
echo "Mnożenie: $a * $b = $product\n";

// Dzielenie
if ($b != 0) {
    $quotient = $a / $b;
    echo "Dzielenie: $a / $b = $quotient\n";
} else {
    echo "Dzielenie przez zero jest niemożliwe\n";
}

// Modulo
$modulo = $a % $b;
echo "Modulo: $a % $b = $modulo\n";

// Potęgowanie
$power = $a ** $b;
echo "Potęgowanie: $a ^ $b = $power\n";
?>
