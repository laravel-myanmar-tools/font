<?php

namespace LaravelMyanmarTools\Font\Concerns;

use LaravelMyanmarTools\Font\Services\ToUnicodeService;

trait CanCheckZawgyiFont
{
    public function isZawgyiFont(string $str): bool
    {
        $fontType = ToUnicodeService::checkFontType($str);
        if ($fontType == 'zg' || $fontType == 'mm') {
            return true;
        }

        return false;
    }
}
