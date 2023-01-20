<?php

namespace LaravelMyanmarTools\Font\Services;

/**
 * credit: ToUnicode (Laravel Easy Converter)
 * original: https://github.com/KyawNaingTun/tounicode/blob/master/src/Services/Converter.php
 */
class ToUnicodeService
{
    public static function checkFontType($value)
    {
        $regexUni = '/[ဃငဆဇဈဉညဋဌဍဎဏဒဓနဘရဝဟဠအ]်|ျ[က-အ]ါ|ျ[ါ-း]|\x{103e}|\x{103f}|\x{1031}[^\x{1000}-\x{1021}\x{103b}\x{1040}\x{106a}\x{106b}\x{107e}-\x{1084}\x{108f}\x{1090}]|\x{1031}$|\x{1031}[က-အ]\x{1032}|\x{1025}\x{102f}|\x{103c}\x{103d}[\x{1000}-\x{1001}]|ည်း|ျင်း|င်|န်း|ျာ|င့်/u';
        $regexZG = '/\s\x{1031}| ေ[က-အ]်|[က-အ]း/u';
        $regexMM = '/[\x{1000}-\x{109f}\x{aa60}-\x{aa7f}]+/u';

        if (preg_match($regexUni, $value)) {
            return 'uni';
        } elseif (preg_match($regexZG, $value)) {
            return 'zg';
        } elseif (preg_match($regexMM, $value)) {
            return 'mm';
        } else {
            return 'eng';
        }
    }
}
