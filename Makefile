.PHONY: up down test lint fresh build install key

install:
	composer install
	npm install

key:
	php artisan key:generate

up:
	php -r "file_exists('.env') || copy('.env.example', '.env');"
	composer install
	npm install
	php artisan key:generate
	php artisan migrate --force
	npm run build

down:
	@echo "Stop the PHP development server and Vite process in their terminal windows."

test:
	php artisan test

lint:
	vendor/bin/pint --test
	vendor/bin/phpstan analyse --no-progress
	npm run lint

fresh:
	php artisan migrate:fresh --seed

build:
	npm run build
