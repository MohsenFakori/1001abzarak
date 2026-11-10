# محیط توسعه محلی

## محیط ثبت‌شده

| مؤلفه | نسخه / مقدار |
|---|---|
| سیستم‌عامل | Windows |
| محیط محلی | Laragon |
| مسیر Laragon | `D:\\Fix\\laragon` |
| PHP CLI | 8.3.16 |
| Composer | 2.8.4 |
| Node.js | 22.12.0 |
| npm | 10.9.0 |
| Git | 2.47.1.windows.1 |
| IDE | PhpStorm |

این اطلاعات از گزارش ترمینال Laragon ثبت شده‌اند. اتصال MySQL و ساخت دیتابیس هنوز تأیید نشده است.

## راه‌اندازی بدون Docker

1. مخزن را در پوشه‌ی وب Laragon clone کنید.
2. در Laragon سرویس MySQL را روشن کنید و دیتابیس `1000abzarak` را با collation برابر `utf8mb4_unicode_ci` بسازید.
3. در ریشه‌ی پروژه، `.env.example` را به `.env` کپی کنید و مقادیر اتصال MySQL را با محیط خود تطبیق دهید.
4. `composer install` و `npm install` را اجرا کنید.
5. `php artisan key:generate` را اجرا کنید.
6. `php artisan migrate` و سپس `npm run build` را اجرا کنید.
7. پروژه را از طریق Laragon یا `php artisan serve` اجرا کنید.

> دستور `make up` در Makefile برای محیطی که GNU Make در PATH دارد تعریف شده است. نصب GNU Make در محیط ثبت‌شده هنوز تأیید نشده؛ بنابراین دستورات بالا مسیر مطمئن‌تر برای Windows هستند.
