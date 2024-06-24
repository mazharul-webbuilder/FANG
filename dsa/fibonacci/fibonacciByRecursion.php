<?php

$previous = 0;
$next = 1;
$count = 2;

echo $previous . PHP_EOL;
echo $next . PHP_EOL;

function fibonacci($previous, $next)
{
    global $count;

    if ($count < 5){
        $newFibonacci = $previous + $next;
        echo $newFibonacci . PHP_EOL;
        $previous = $next;
        $next = $newFibonacci;
        $count += 1;
        fibonacci($previous, $next);
    } else{
        return 0;
    }
}

fibonacci($previous, $next);