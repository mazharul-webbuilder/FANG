<?php

function Fibonacci($n)
{
    if ($n > 1) {
        return Fibonacci($n - 1) + Fibonacci($n - 2);
    } else{
        return $n;
    }
}

echo Fibonacci(5);