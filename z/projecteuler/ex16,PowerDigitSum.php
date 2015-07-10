<?php

$pow = pow(2, 1000);
$d = number_format($pow,0,'','');

$sum = 0;
foreach (str_split($d) as $n) {
    $sum += $n;
}

echo '$sum ===> ', print_r($sum, TRUE), '<br>';