<?php

$unsortedNumbers = [7, 12, 9, 11, 3];

for ($i=0; $i<count($unsortedNumbers); $i++){
    if ($unsortedNumbers[$i] > $unsortedNumbers[$i+1]){
        $temp = $unsortedNumbers[$i];
        $unsortedNumbers[$i] = $unsortedNumbers[$i + 1];
        $unsortedNumbers[$i + 1] = $temp;
    }
}

foreach ($unsortedNumbers as $unsortedNumber) {
    echo $unsortedNumber . PHP_EOL;
}
