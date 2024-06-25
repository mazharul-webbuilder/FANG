<?php

$previous = 0;
$next = 1;
$count = 2;

/**
 * Get nTh number Fibonacci number
 */
function Fibonacci($n)
{
    if ($n > 1){
        return Fibonacci($n - 1) + Fibonacci($n - 2);
    } else{
        return $n;
    }
}

echo Fibonacci(36);

//
//echo $previous . PHP_EOL;
//echo $next . PHP_EOL;
//



/**
 * Generate Fibonacci using recursion
 */

//function genFibonacci($previous, $next)
//{
//    global $count;
//
//    if ($count < 10){
//        $newFibonacci = $previous + $next;
//        echo $newFibonacci . PHP_EOL;
//        $previous = $next;
//        $next = $newFibonacci;
//        $count += 1;
//        genFibonacci($previous, $next);
//    }
//}
//genFibonacci($previous, $next);


/**
 * Generate Fibonacci using for loop
*/

//for ($i=3; $i<=5; $i++){
//    $newFibonacci = $previous + $next;
//    echo $newFibonacci . PHP_EOL;
//    $previous = $next;
//    $next = $newFibonacci;
//}