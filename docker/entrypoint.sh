#!/bin/sh

set -e
composer install
php bin/phpunit tests
exec "$@"