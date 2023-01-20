<?php

namespace LaravelMyanmarTools\Font;

use LaravelMyanmarTools\Font\Concerns\CanCheckUnicodeFont;
use LaravelMyanmarTools\Font\Concerns\CanCheckZawgyiFont;
use LaravelMyanmarTools\Font\Concerns\CanConvertUniToZg;
use LaravelMyanmarTools\Font\Concerns\CanConvertZgToUni;
use LaravelMyanmarTools\Font\Concerns\CanDetectFont;
use Spatie\Macroable\Macroable;

class Font
{
    use CanDetectFont,
        CanCheckUnicodeFont,
        CanCheckZawgyiFont,
        CanConvertZgToUni,
        CanConvertUniToZg,
        Macroable;
}
