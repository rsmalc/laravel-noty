# Flash Messages for Laravel Aplication using Noty v3 library

This is my first Laravel package, I got an inspiration from Jeffrey Way - [Easy Flash Messages](https://github.com/laracasts/flash)

## Installation
### Package installation
Use composer to install a package.

Run `composer require rsmalc/laravel-noty`

In Laravel 5 include the service provider within `config/app.php`.

```php
'providers' => [
    RSmalc\Noty\NotyServiceProvider::class,
];
```

### Noty  library installation
Install via Bower
```
$ bower install noty
```
Install via NPM or YARN
```
$ npm install noty
$ yarn add noty
```
Install via Composer
```
$ composer require needim/noty
```
Use gulp or webpack to compile it or just copy all file to public folder.

## Use
```html
<head>    
    <link rel="stylesheet" href="/noty.css"></script>
    <script type="text/javascript" src="/noty.js"></script>
</head>
```

Add in your layout view:

```html
@include('noty::message')
```

## Config
You can set a global configuration for notification messages. 
```php
php artisan vendor:publish   
```
A file will be created in the folder `config/laravel-noty.php`


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
