<?php

function generatorPrimeNumber() {
    $primeList = [2];
    yield 2;
    $next = 1;
    while (true) {
        $next += 2;
        $isPrime = TRUE;
        foreach ($primeList as $p) {
            if ($next % $p == 0) {
                $isPrime = FALSE;
                break;
            }
        }
        if (!$isPrime) continue;
        
        $primeList[] = $next;
        yield $next;
    }
}

$n = 600851475143; 

foreach ($d = generatorPrimeNumber() as $p) {
    do {
        $find = FALSE;
        if (!bcmod($n, $p)) {
//            var_dump($n, $p, $n % $p, bcdiv($n, $p));
//            echo ($n / $p) . '-';
            $n = bcdiv($n, $p);
            $find = TRUE;
//            echo $p.'.';
        }
    } while ($find);
    if ($n == 1)
        break;
}
print_r($p);