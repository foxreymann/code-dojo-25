<?php


function convertRomanToDecimal($roman)
{
    $convertingMap = [];
    $convertingMap['I'] = 1;
    $convertingMap['V'] = 5;
    $convertingMap['X'] = 10;
    $convertingMap['L'] = 50;
    $convertingMap['C'] = 100;
    $convertingMap['D'] = 500;
    $convertingMap['M'] = 1000;

    $decimal = 0;

    addFirstRomanDigit($roman, $decimal, $convertingMap);

    return $decimal;
}

function addFirstRomanDigit($roman, &$decimal, $convertingMap) {

    $currentDecimal = $convertingMap[$roman[0]];

    if(isset($roman[1])) {
        $nextDecimal = $convertingMap[$roman[1]];
        if($nextDecimal > $currentDecimal) {
            $decimal -= $currentDecimal;
        } else {
            $decimal += $currentDecimal;
        }
        $roman = substr($roman, 1);
        addFirstRomanDigit($roman, $decimal, $convertingMap);       
        return;
    }

    $decimal += $currentDecimal;
}
