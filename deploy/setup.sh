#!/usr/bin/env bash
set -euo pipefail

PROJECT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
cd "$PROJECT_DIR"

echo "==> Installing PHP dependencies (if needed)"
composer install --no-interaction --prefer-dist

echo "==> Setting storage permissions"
if command -v sudo >/dev/null 2>&1; then
  sudo chown -R "$USER:www" storage bootstrap/cache
  sudo chmod -R 775 storage bootstrap/cache
else
  chmod -R 775 storage bootstrap/cache 2>/dev/null || true
fi

echo "==> Running migrations and seeders"
php artisan migrate --force
php artisan db:seed --force

echo "==> Clearing caches"
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear

echo ""
echo "Setup complete."
echo ""
echo "Admin login:  /login"
echo "  Email:      admin@admin.com"
echo "  Password:   password"
echo ""
echo "Seller login: seller@example.com / password"
echo ""
echo "Nginx config: $PROJECT_DIR/nginx.conf"
echo "Apache/cPanel: use root .htaccess (already configured)"
