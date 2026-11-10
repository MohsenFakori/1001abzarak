<?php

use Illuminate\Support\Facades\Artisan;

Artisan::command('about:project', function (): void {
    $this->info('هزار ابزارک — فاز ۱: اسکلت پروژه و زیرساخت توسعه');
})->purpose('Display project-specific development information.');
