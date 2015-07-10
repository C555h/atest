<?php

$max = 0;
for ($i = 1000000; $i > 1; $i--) {
    $n = 0;
    $number = $i;
    while ($number != 1) {
//        echo '$number ===> ', print_r($number, TRUE), '<br>';
        $n++;
        
//        var_dump($number, $number % 2 == 0, $number / 2, $number * 2 + 1);
        $number = $number % 2 == 0 ?
                $number / 2 :
                $number * 3 + 1;
    }
    
    if ($max < $n)
        $max = "$n - $i";
}
echo '$max ===> ', print_r($max, TRUE), '<br>';
