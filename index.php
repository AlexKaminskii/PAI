<?php
// Definiowanie zmiennych
$a = 7;
$b = 3;

// Funkcje hiperboliczne
$sinhValue = sinh($a);
echo "Sinh($a) = $sinhValue\n";

$coshValue = cosh($a);
echo "Cosh($a) = $coshValue\n";

$tanhValue = tanh($a);
echo "Tanh($a) = $tanhValue\n";

// Funkcja gamma
$gammaValue = gamma($a);
echo "Gamma($a) = $gammaValue\n";

// Funkcja kombinacji (nCr)
function nCr($n, $r) {
    return factorial($n) / (factorial($r) * factorial($n - $r));
}

// Funkcja permutacji (nPr)
function nPr($n, $r) {
    return factorial($n) / factorial($n - $r);
}

// Funkcja obliczająca silnię
function factorial($n) {
    if ($n <= 1) {
        return 1;
    }
    return $n * factorial($n - 1);
}

$n = 5;
$r = 2;

$nCrValue = nCr($n, $r);
echo "$nCrValue kombinacji ($n choose $r)\n";

$nPrValue = nPr($n, $r);
echo "$nPrValue permutacji ($n permute $r)\n";

// Obliczanie logarytmu o dowolnej podstawie
function logBase($base, $number) {
    return log($number) / log($base);
}

$base = 2;
$number = 8;

$logBaseValue = logBase($base, $number);
echo "Logarytm o podstawie $base z $number = $logBaseValue\n";

// Funkcja sprawdzająca, czy liczba jest pierwsza
function isPrime($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

$primeCheck = 11;
$isPrimeValue = isPrime($primeCheck) ? 'jest' : 'nie jest';
echo "Liczba $primeCheck $isPrimeValue liczbą pierwszą\n";
?>
