<?php

namespace LaravelMyanmarTools\Font\Concerns;

use LaravelMyanmarTools\Font\Enums\FontType;
use LaravelMyanmarTools\Font\Services\ToUnicodeService;

trait CanDetectFont
{
    public function detectMyanmarFont(string $str): string
    {
        $fontType = ToUnicodeService::checkFontType($str);
        if ($fontType == 'zg' || $fontType == 'mm') {
            return FontType::ZAWGYI->getValue();
        }

        return FontType::UNICODE->getValue();
    }
}
