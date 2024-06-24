<?php

$previous = 0;
$next = 1;
$n = 18;

echo $previous . PHP_EOL;
echo $next . PHP_EOL;

for ($i=0; $i<($n); $i++){
    $result = $previous + $next;

    echo  $result . PHP_EOL;

    $previous = $next;
    $next = $result;
}