<?php

$unorderedArray = [10, 25, 58, 11, 36, 98, 85, 5];

$minValue = $unorderedArray[0];

foreach ($unorderedArray as $key => $value){
    if ($value < $minValue){
        $minValue = $value;
    }
}

echo  $minValue;