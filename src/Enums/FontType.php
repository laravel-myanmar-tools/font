<?php

namespace LaravelMyanmarTools\Font\Enums;

enum FontType
{
    case UNICODE;
    case ZAWGYI;

    public function getValue(): string
    {
        return match ($this) {
            FontType::UNICODE => 'unicode',
            FontType::ZAWGYI => 'zawgyi',
        };
    }
}
