# laravel-edit-profile
This package allows to add edit users profile feature to auth scaffold of laravel 5 

## Installation

Step 1 : Laravel 5.2 Auth Scafold

    php artisan make:auth
    

Step 2 : Install Composer dependency

    composer require abhitheawesomecoder/laravel-edit-profile

Step 3 : Register the Service Provider

Add Abhitheawesomecoder\Laraveleditprofile\EditprofileServiceProvider::class to providers array in *config/app.php*

In order to override the views of the package run the following command: 'php artisan vendor:publish' you can override the views under the folder: 'views/vendor/abhitheawesomecoder/laravel-edit-profile' 

## Usage

Go to link http://localhost/laravel/public/edit-profile

where http://localhost/laravel/public/ is path to your laravel website
