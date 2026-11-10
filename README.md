# هزار ابزارک

مجموعه‌ای آنلاین از ابزارک‌های کاربردی و سرگرم‌کننده برای کاربران فارسی‌زبان.

## وضعیت پروژه

فاز جاری: ۱ — اسکلت پروژه و زیرساخت توسعه.

## پیش‌نیازهای محیط محلی

- Windows و Laragon (محیط ثبت‌شده)
- PHP 8.3 یا بالاتر
- Composer 2
- Node.js 22 LTS و npm
- MySQL 8 با افزونه‌ی PDO MySQL برای PHP
- Git

توسعه‌ی محلی بدون Docker انجام می‌شود. تفاوت این تصمیم با فرض زیرساخت Docker در PRD در `docs/adr/ADR-005-no-docker-local-development.md` ثبت شده است.

## راه‌اندازی

1. در MySQL دیتابیسی با نام `1000abzarak` و collation برابر `utf8mb4_unicode_ci` بسازید.
2. `.env.example` را به `.env` کپی کنید و تنظیمات اتصال را بررسی کنید.
3. در ریشه‌ی پروژه و ترمینال Laragon اجرا کنید:

```bash
composer install
npm install
php artisan key:generate
php artisan migrate
npm run build
php artisan serve
```

اسناد مرجع: [PRD](docs/prd/PRD-1000abzarak.md)، [UI Kit](docs/ui-kit/abzarak-uikit.html) و `docs/development-environment.md`.

## فرمان‌های رایج

```bash
php artisan test
vendor/bin/pint --test
vendor/bin/phpstan analyse
npm run lint
npm run build
```

Makefile نیز هدف‌های `up`، `down`، `test`، `lint`، `fresh` و `build` را برای محیط دارای GNU Make تعریف می‌کند.

## ساختار

- `app/`: هسته‌ی برنامه
- `docs/adr/`: تصمیم‌های معماری
- `docs/phase-01/`: معیارهای پذیرش فاز
- `resources/`: دارایی‌های فرانت‌اند و Blade
- `tests/`: تست‌های خودکار
- `database/migrations/`: فقط جداول زیرساختی فاز ۱

## شاخه‌بندی

توسعه‌ی فاز اول در `phase-01/scaffold` انجام می‌شود. `main` شاخه‌ی مبنا است و ادغام فقط پس از بررسی و تأیید مالک انجام خواهد شد.

