<?php

function converRomanToDecimal($roman) {
    $convertingMap = [];
    $convertingMap['I'] = 1;
    $convertingMap['V'] = 5;
    $convertingMap['X'] = 10;

    $romanLength = strlen($roman);
    
    $decimal = 0;

    for($i = 0; $i < $romanLength; $i++) {
        $currentDecimal = $convertingMap[$roman[$i]];
        $nextDecimal = 0;
        if($i < $romanLength - 1) {
            $nextDecimal = $convertingMap[$roman[$i+1]];
        }
        if($nextDecimal > $currentDecimal) {
            $decimal -= $currentDecimal;
        } else {
            $decimal += $currentDecimal;
        }
    }

    return $decimal;
}
