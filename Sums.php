<?php

function converRomanToDecimal($roman) {
    $convertingMap = [];
    $convertingMap['I'] = 1;
    $convertingMap['V'] = 5;
    $convertingMap['X'] = 10;

    $romanLength = strlen($roman);
    
    $decimal = 0;

    for($i = 0; $i < $romanLength; $i++) {
       $decimal += $convertingMap[$roman[$i]]; 
    }

    return $decimal;
}
