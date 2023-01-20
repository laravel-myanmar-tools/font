[![Run tests](https://github.com/Laravel-Myanmar-Tools/font/actions/workflows/run-tests.yml/badge.svg?branch=main)](https://github.com/Laravel-Myanmar-Tools/font/actions/workflows/run-tests.yml)

# Font

PHP Myanmar Font for [Laravel Myanmar Tools](https://laravel-myanmar-tools.com)

## Installation

```bash
composer require laravel-myanmar-tools/font
```

## Usage

### Check Unicode Font

```php
use LaravelMyanmarTools\Font\Font;

$font = new Font;
$font->isUnicodeFont('မြန်မာပြည်'); // return true
```

### Check Zawgyi Font

```php
use LaravelMyanmarTools\Font\Font;

$font = new Font;
$font->isZawgyiFont('ျမန္မာျပည္'); // return true
```

### Detect Myanmar Font

```php
use LaravelMyanmarTools\Font\Font;

$font = new Font;
$font->detectMyanmarFont('မြန်မာပြည်'); // return "unicode"
$font->detectMyanmarFont('ျမန္မာျပည္'); // return "zawgyi"
```

### Zawgyi To Unicode

```php
use LaravelMyanmarTools\Font\Font;

$font = new Font;
$font->zgToUni('ျမန္မာျပည္'); // return "မြန်မာပြည်"
```

### Unicode To Zawgyi

```php
use LaravelMyanmarTools\Font\Font;

$font = new Font;
$font->zgToUni('မြန်မာပြည်'); // return "ျမန္မာျပည္"
```

## Customize

```php
use LaravelMyanmarTools\Font\Font;

$font = new Font;

$font::macro('isNumber', function(string $str) {
   return is_numeric($str);
});

$font->isNumber('12345'); // return true
```

## Testing

```bash
composer test
```

## Credit

-[ToUnicode (Laravel Easy Converter)](https://github.com/KyawNaingTun/tounicode)
-[Rabbit-PHP](https://github.com/Rabbit-Converter/Rabbit-PHP)