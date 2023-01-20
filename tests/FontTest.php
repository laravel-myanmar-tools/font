<?php

it('can detect unicode font', function () {
    expect(uniString())->toBeUnicodeFont();
});

it('can detect zawgyi font', function () {
    expect(zgString())->toBeZawgyiFont();
});

it('can check unicode font', function () {
    expect(font()->isUnicodeFont(uniString()))->toBeTrue();
});

it('can check zawgyi font', function () {
    expect(font()->isZawgyiFont(zgString()))->toBeTrue();
});

it('can convert zg to uni', function () {
    expect(font()->zgToUni(zgString()))->toBe(uniString());
});

it('can convert uni to zg', function () {
    expect(font()->uniToZg(uniString()))->toBe(zgString());
});
