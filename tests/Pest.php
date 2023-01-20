<?php

use LaravelMyanmarTools\Font\Enums\FontType;
use LaravelMyanmarTools\Font\Font;

expect()->extend('toBeUnicodeFont', function () {
    expect(font()->detectMyanmarFont($this->value))->toBe(FontType::UNICODE->getValue());
});

expect()->extend('toBeZawgyiFont', function () {
    expect(font()->detectMyanmarFont($this->value))->toBe(FontType::ZAWGYI->getValue());
});

function font()
{
    return new Font;
}

function uniString()
{
    return 'သီဟိုဠ်မှ ဉာဏ်ကြီးရှင်သည် အာယုဝဍ္ဎနဆေးညွှန်းစာကို ဇလွန်ဈေးဘေး ဗာဒံပင်ထက် အဓိဋ္ဌာန်လျက် ဂဃနဏဖတ်ခဲ့သည်။';
}

function zgString()
{
    return 'သီဟိုဠ္မွ ဉာဏ္ႀကီးရွင္သည္ အာယုဝၯနေဆးၫႊန္းစာကို ဇလြန္ေဈးေဘး ဗာဒံပင္ထက္ အဓိ႒ာန္လ်က္ ဂဃနဏဖတ္ခဲ့သည္။';
}
