#!/bin/bash
set -e 

echo "Migrating database 'php artisan migrate --force'..."
php artisan migrate --force
php artisan migrate:refresh
php artisan db:seed
