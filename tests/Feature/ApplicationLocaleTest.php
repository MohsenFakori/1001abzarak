<?php

it('uses Persian as the application locale', function () {
    expect(config('app.locale'))->toBe('fa')
        ->and(config('app.fallback_locale'))->toBe('fa');
});

it('stores application timestamps in UTC and exposes Tehran as display timezone', function () {
    expect(config('app.timezone'))->toBe('UTC')
        ->and(config('app.display_timezone'))->toBe('Asia/Tehran');
});
