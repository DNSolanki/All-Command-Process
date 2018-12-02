Install the Mbstring PHP Extension.
sudo apt-get install php7.0-mbstring

The XML PHP Extension.
sudo apt-get install php-xml

The ZIP PHP Extension.
sudo apt-get install php7.0-zip
Install GD libaray Extension
sudo apt-get install php7.1-gd
then 
php -i | grep -i gd



The version of PHP
php -v

Installed curl
sudo apt-get install curl

Create Controller :- php artisan make:controller ServiceController

Install composer :

1. curl -sS https://getcomposer.org/installer -o composer-setup.php

2. sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer

3. composer
composer update
compose dump-autoload

Install Html Package
composer require "laravelcollective/html":"^5.6.0"
image interevention
composer require intervention/image


