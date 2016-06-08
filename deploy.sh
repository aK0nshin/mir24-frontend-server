#!/bin/bash

echo "Let the deploy begin!"
echo "npm..."
npm install
npm update
echo "composer..."
composer install
composer update
echo "permissions..."
sudo chown -R www-data:www-data storage/ && sudo chmod -R 755 storage/
echo "cache & config..."
php artisan cache:clear
php artisan config:clear
composer dump-autoload

createdb -e -h localhost -p 5432 mir24
php artisan migrate
php artisan db:seed

echo "Complete"
