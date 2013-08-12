<?php

$convertingMap = [];
$convertingMap['I'] = 1;
$convertingMap['V'] = 5;
$convertingMap['X'] = 10;
$convertingMap['L'] = 50;
$convertingMap['C'] = 100;
$convertingMap['D'] = 500;
$convertingMap['M'] = 1000;

$decimal = 0;

function convertRomanToDecimal($roman)
{
    global $convertingMap, $decimal;

    $currentDecimal = $convertingMap[$roman[0]];

    if (isset($roman[1])) {
        convertRomanToDecimal(substr($roman, 1));       
        $nextDecimal = $convertingMap[$roman[1]];
        if ($nextDecimal > $currentDecimal) {
            $decimal -= $currentDecimal;
            return $decimal;
        }
    }

    $decimal += $currentDecimal;

    return $decimal;
}
