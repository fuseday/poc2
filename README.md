
## Installation steps

```bash
git clone git@github.com:fuseday/platform.git poc2
cp .env.example .env
touch database/database.sqlite
# remove composer repos from composer.json
rm composer.lock
composer install
php artisan key:generate
php artisan migrate:fresh --seed
composer require fuseday/torque
npm i @fuseday/torquejs
```
