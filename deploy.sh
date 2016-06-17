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
echo "database & migrations..."
createuser -e -d -r -s -P -h localhost -p 5432 mir24
createdb -e -U mir24 -h localhost -p 5432 mir24
echo -n "Enter password again:": 
read password
echo
sed -i -- "s/secret/$password/g" .env
php artisan migrate
php artisan db:seed
echo "setting key..."
php artisan key:generate

echo "Complete"