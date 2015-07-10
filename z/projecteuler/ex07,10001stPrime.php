<?php

require './ex3.LargestPrimeFactor.php';
ob_clean();

$i = 0;
foreach (generatorPrimeNumber() as $p) {
    if (++$i == 10001) 
        break;
}
echo "result ==> $p";