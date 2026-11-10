# محیط توسعه محلی — هزار ابزارک

این سند وضعیت ابزارها را بر اساس خروجی‌هایی ثبت می‌کند که مالک پروژه در ترمینال Laragon ارائه کرده است.

## مشخصات محیط

| مؤلفه | نسخه / مقدار |
|---|---|
| سیستم‌عامل | Windows |
| محیط توسعه محلی | Laragon |
| مسیر نصب Laragon | `D:\\Fix\\laragon` |
| مسیر کاری ترمینال هنگام بررسی | `D:\\Fix\\laragon\\www` |
| PHP CLI | `8.3.16` |
| PHP executable | `D:\\Fix\\laragon\\bin\\php\\php-8.3.16-Win32-vs16-x64\\php.exe` |
| Composer | `2.8.4` |
| Node.js | `v22.12.0` |
| npm | `10.9.0` |
| Git | `2.47.1.windows.1` |
| IDE | PhpStorm |

این اطلاعات از خروجی `php -v`، `composer --version`، `node -v`، `npm -v` و `git --version` در Laragon Terminal ثبت شده‌اند. نسخه‌ی PHP مورد استفاده‌ی Composer نیز `8.3.16` گزارش شده است.

## موارد هنوز تأییدنشده

- نصب و نسخه‌ی MySQL 8 در Laragon و اتصال موفق PDO
- فعال بودن افزونه‌های موردنیاز PHP برای Laravel
- نصب GNU Make در PATH ویندوز
- راه‌اندازی کامل پروژه Laravel روی همین محیط

تا زمانی که تغییری در محیط رخ نداده، دوباره نسخه‌های ثبت‌شده‌ی PHP، Composer، Node.js، npm و Git درخواست نمی‌شوند.
