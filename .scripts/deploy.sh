#!/bin/bash
set -e

echo "Deployment started ..."

# Enter maintenance mode or return true
# if already is in maintenance mode
(php artisan down) || true

# Pull the latest version of the app
git reset --hard
git pull origin main

# Install composer dependencies
composer update --optimize-autoloader --ignore-platform-reqs

# Clear the old cache
php artisan clear-compiled

# Recreate cache
php artisan optimize

# Compile npm assets
#yarn
#yarn build

# Run database migrations
php artisan migrate --force

php artisan optimize:clear

# Exit maintenance mode
php artisan up

echo "Deployment finished!"
