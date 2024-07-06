<?php

$unsortedNumbers = [7, 12, 9, 11, 3];
$n = count($unsortedNumbers);

for ($i=0; $i<$n-1; $i++){
    for ($j=0; $j<$n-1-$i; $j++){
        if ($unsortedNumbers[$j] > $unsortedNumbers[$j+1]){
            $temp = $unsortedNumbers[$j];
            $unsortedNumbers[$j] = $unsortedNumbers[$j+1];
            $unsortedNumbers[$j+1] = $temp;
        }
    }
}


foreach ($unsortedNumbers as $unsortedNumber) {
    echo $unsortedNumber . PHP_EOL;
}
 