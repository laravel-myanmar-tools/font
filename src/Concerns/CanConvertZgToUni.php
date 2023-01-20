<?php

namespace LaravelMyanmarTools\Font\Concerns;

use LaravelMyanmarTools\Font\Services\RabbitService;

trait CanConvertZgToUni
{
    public function zgToUni(string $str): string
    {
        return RabbitService::zg2uni($str);
    }
}
