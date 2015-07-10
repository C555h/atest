<?php

$sundayCount = 0;
for ($year = 1901; $year <= 2000; $year++)
    for ($month = 1; $month <= 12; $month++)
        $sundayCount += (new DateTime("$year-$month-01"))->format('N') == 7;
    
echo '$sundayCount ===> ', print_r($sundayCount, TRUE), '<br>';