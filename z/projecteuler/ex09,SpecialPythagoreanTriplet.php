<?php
$start = microtime(true);
if ($_GET) {
    function poptws($x = 12) {
	// Find the product of the Pythagorean triplet {a,b,c}, for which a + b + c = $x.
	$p = 0;
	for ($m = 1; $m < 6; $m++) {
		for ($n = 1; $n < 21; $n++) {
			$a = pow($n, 2) - pow($m, 2);
			$b = 2 * $m * $n;
			$c = pow($n, 2) + pow($m, 2);
			if (($a + $b + $c) == $x) {
				$p = $a * $b * $c;
                                var_dump($a, $b, $c);
				break 2;
			}
		}
	}
	return $p;
    }
    echo poptws(24); // 0.0011 seconds
    
    echo 'microtime(true) - $start ===> ', print_r(microtime(true) - $start, TRUE), '<br>';
    exit;
}

$c = 500;
while (true) {

    $powC = pow($c, 2);
    $a = 1;
    do {
        $b = 1000 - ($c + $a);
        if (pow($a, 2) + pow($b, 2) == $powC)
            break 2;
        ++$a;
    } while ($a <= $b);

    $c--;
}
echo "The product of abc: " . ($a * $b * $c);

echo 'microtime(true) - $start ===> ', print_r(microtime(true) - $start, TRUE), '<br>';


