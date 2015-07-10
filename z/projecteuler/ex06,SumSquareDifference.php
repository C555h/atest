<?php

function pow2($a) {
    return pow($a, 2);
}

$a = range(1, 100);
$f = pow(array_sum($a), 2);
$s = array_sum(array_map('pow2', $a));
echo 'diference ===> ', print_r($f - $s, TRUE), '<br>';
