<?php

namespace LaravelMyanmarTools\Font\Concerns;

use LaravelMyanmarTools\Font\Services\RabbitService;

trait CanConvertUniToZg
{
    public function uniToZg(string $str): string
    {
        return RabbitService::uni2zg($str);
    }
}
