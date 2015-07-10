<?php

//    $i = 0;
//    do {
//        $i += 11*13*17*19*20;
//    } while (!($i % 18 == 0 && $i % 16 == 0 && $i % 15 == 0 && $i % 14 == 0 && $i % 12 == 0));
//    echo $i;
//    exit;

function isNotOne($a) {
    return $a != 1;
}

$numbers = range(1, 20);
$divisor = [2, 3, 5, 7, 11, 13, 17, 19];
$lcm = [];

while ($numbers) {
    do {
        $passed = FALSE;
        foreach ($numbers as &$n) {
            if ($n % $divisor[0] == 0) {
                $n /= $divisor[0];
                if (!$passed)
                    $lcm[] = $divisor[0];
                $passed = TRUE;
            }
        }
    } while ($passed);
    array_shift($divisor);
    $numbers = array_filter($numbers, 'isNotOne');
}

$total = 1;
foreach ($lcm as $n) {
    $total *= $n;
}
echo '$total ===> ', print_r($total, TRUE), '<br>';
