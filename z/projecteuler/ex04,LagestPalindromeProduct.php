<?php

function palindrome() {
    $i = 999999;
    do {
        if ($i == strrev($i))
            yield $i;
    } while (--$i);
}

foreach (palindrome() as $p) {
    for ($i = 100; $i <= 999; $i++) {
        if ($p % $i == 0){
            if (strlen((string) $p / $i) != 3)
                continue;
            echo $p;
            exit;
        }
    }
}
