<?php

require './ex03,LargestPrimeFactor.php';
ob_clean();


set_time_limit(9999999);

function genTriangleNumbers() {
    $i = 0;
    $triangle = 0;
    while (TRUE) {
        $triangle = bcadd($triangle, ++$i);
        yield $triangle;
    }
}

function countDivisors($number) {
//    https://anupamsaha.wordpress.com/2011/05/16/find-total-number-of-divisors-of-an-integer-in-php/
    $primes = generatorPrimeNumber();
    $divisors = [];
    while ($number > 1) {
        while (bcmod($number, $primes->current()) == 0) {
            $divisors[] = $primes->current();
            $number = bcdiv($number, $primes->current());
        }
        $primes->next();
    }
    
    $count = 1;
    foreach (array_count_values($divisors) as $value) {
        $count *= $value + 1;
    }
    return $count;
}


foreach (genTriangleNumbers() as $number) {
    if (countDivisors($number) > 500)
        break;
}
echo "Result ===> $number";
//$g->next();
//echo $g->current();
//1768140   1879  
//1768140   1879 ,576
//1766260 ===> 1879 ,576
//1768140.00 ===> 1879 ,576
//1768140.00 ===> 1880 ,576
//76576500.00 ===> ,576