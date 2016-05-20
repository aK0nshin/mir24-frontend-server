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

echo "Complete"
