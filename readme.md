## How to use

At first you must customize general settings at .env file.
You need to change this parameters:
```php
APP_URL

DB_CONNECTION
DB_HOST
DB_PORT
DB_DATABASE
DB_USERNAME
DB_PASSWORD
```
Also you can customize this parameters, if it need:
```php
BASE_VK_HOST
BASE_INSTAGRAM_HOST
BASE_TELEGRAM_HOST

PAGINATION_PER_PAGE
```
After that you must create tables in you database. Use this comand in your terminal:
```php
php artisan migrate
```
It will autiamticaly create all needed tables in your database.
When your tables are creteted, use this comand in your terminal to fill them:
```php
php artisan db:seed
```
It will automaticaly seeds user_statuses table with needed data, and automaticaly fill rest user tables by fake data. 
There wil be 10 automaticaly generated users with all data. If you want to generate more users, please change argument in file
database/seeds/AllUserTablesSeeder.php like this:
```php
factory(User::class, 10)->create();
```
Too enter system, please use one of automaticaly generated users credentials. Password for all users is 'asdfg001'.
## Testing

Also there are several automatic tests. To run use comand in your terminal:
```php
vendor/bin/phpunit
```
 
