<?php
    
function factorial($number) {
    return $number == 1 ? 1: 
            bcmul($number, factorial($number - 1));
}

//http://math.stackexchange.com/a/636529/206282
//(x+y)!/(x!y!) ==> (2x)!/(x!^2)
$n = 20;
$result = factorial($n*2) / pow(factorial($n), 2);

echo '$result ===> ', print_r($result, TRUE), '<br>';
exit;

$size = 20 +1;
$grid = array_fill(0, $size, array_fill(0, $size, 1));
for ($x = 1; $x < $size; $x++) {
    for ($y = 1; $y < $size; $y++) {
        $grid[$x][$y] = $grid[$x-1][$y] + $grid[$x][$y-1];
    }
}

var_dump($x, $y);

echo '$result ===> ', print_r($grid[$size-1][$size-1], TRUE), '<br>';