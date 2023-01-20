<?php

namespace LaravelMyanmarTools\Font\Concerns;

use LaravelMyanmarTools\Font\Services\ToUnicodeService;

trait CanCheckUnicodeFont
{
    public function isUnicodeFont(string $str): bool
    {
        $fontType = ToUnicodeService::checkFontType($str);
        if ($fontType == 'zg' || $fontType == 'mm') {
            return false;
        }

        return true;
    }
}
