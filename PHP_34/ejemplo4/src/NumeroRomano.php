<?php

class NumeroRomano {
    private static $specialArabicNumbers = [1000, 900, 500, 400, 100, 90, 50, 40, 10, 9, 5, 4, 1];
    private static $specialRomanSymbol = ["M", "CM", "D", "CD", "C", "XC", "L", "XL", "X", "IX", "V", "IV", "I"];

    private $roman;

    function __construct(int $arabic) {
        $remainingArabic = $arabic;
        $this->roman = "";

        for ($romanSymbolIndex = 0; $romanSymbolIndex < count(SELF::$specialRomanSymbol); $romanSymbolIndex++) {
            $remainingArabic = $this->addRomanSymbolIfArabicIsLargeEnough($remainingArabic, $romanSymbolIndex);
        }
    }

    private function addRomanSymbolIfArabicIsLargeEnough(int $arabic, int $romanSymbolIndex) {
        $integerDivision = (int)($arabic / SELF::$specialArabicNumbers[$romanSymbolIndex]);
        $this->concatenate(SELF::$specialRomanSymbol[$romanSymbolIndex], $integerDivision);

        $remaining = $arabic % SELF::$specialArabicNumbers[$romanSymbolIndex];
        return $remaining;
    }

    private function concatenate(string $romanSymbol, int $times): void {
        for ($i = 0; $i < $times; $i++) {
            $this->roman .= $romanSymbol;
        }
    }

    function getValue() {
        return $this->roman;
    }
}
