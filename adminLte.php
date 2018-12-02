chat Process:-
https://bootsnipp.com/snippets/featured/message-chat-box

adminLte Process:-
https://www.youtube.com/watch?v=2I4Zmt-BBB8&t=260s

//after that check character in mysql
config/database.php file 
FROM ->

'charset' => 'utf8mb4',

'collation' => 'utf8mb4_unicode_ci',

TO ->

'charset' => 'utf8',

'collation' => 'utf8_unicode_ci',

 //agar esse ho jaye to thik
 //app service provider me 

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;


public function boot()
{
    Schema::defaultStringLength(191);
}


Process :-
- composer create-project --prefer-dist laravel/laravel laravelAdminLte
- cd laravelAdminLte
- php artisan migrate
- php artisan serve
- php artisan make:auth
- php artisan serve
- composer require jeroennoten/laravel-adminlte

- php artisan make:adminlte

- Config/app.php :-
provider :-
  jeroenNoten\LaravelAdminLte\ServiceProvider::class

  -- https://github.com/jeroennoten/Laravel-AdminLTE

Require the package using composer:

composer require jeroennoten/laravel-adminlte
Add the service provider to the providers in config/app.php:

Laravel 5.5 uses Package Auto-Discovery, so doesn't require you to manually add the ServiceProvider

JeroenNoten\LaravelAdminLte\ServiceProvider::class,
Publish the public assets:

php artisan vendor:publish --provider="JeroenNoten\LaravelAdminLte\ServiceProvider" --tag=assets

