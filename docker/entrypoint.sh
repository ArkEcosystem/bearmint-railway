#!/usr/bin/env bash

sudo chown -R $USER:www-data /rails
#--- run installs
composer install --ignore-platform-reqs
#--- fire up services
sudo supervisord &
sudo chmod -R 775 /rails/database
sudo chmod -R 775 /rails/storage
sudo chmod -R 775 /rails/bootstrap/cache
rm -rf ~/.composer/
#--- laravel and cache setup
php artisan key:generate --force
php artisan migrate:fresh --force
php artisan storage:link
#after initial deployment
php artisan migrate --force
php artisan cache:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache
#--- run system scheduler
#sudo crond
bash
