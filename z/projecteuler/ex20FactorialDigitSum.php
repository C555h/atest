<?php

$total = 0;
foreach (str_split(gmp_strval(gmp_fact(100))) as $n) {
    $total += $n;
}
echo "Result ===> $total";