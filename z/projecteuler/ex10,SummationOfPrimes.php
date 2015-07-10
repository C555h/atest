<?php

require './ex3.LargestPrimeFactor.php';
ob_clean();
set_time_limit(99999);

$i = 0;
foreach (generatorPrimeNumber() as $p) {
    if ($p > 2000000) 
        break;
    $i = bcadd($i, $p);
}
echo "result ==> $i";