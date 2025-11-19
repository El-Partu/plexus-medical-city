#!/bin/bash
# Wait for database to be ready (optional, useful for Railway/Postgres or MySQL)
sleep 5

# Run migrations
php artisan migrate --force

# Seed database if needed
# php artisan db:seed --force

# Start Apache
exec "$@"
