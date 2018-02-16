#!/bin/bash

composer dump-autoload
php artisan optimize
php artisan config:cache
php artisan config:clear
#php artisan vendor:publish
php artisan serve
