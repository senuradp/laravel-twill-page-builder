<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

```
composer create-project laravel/laravel twillpagebuilder "10.*"   
```

```
 composer require area17/twill:"^3.0"            
```

connect database in .env file

```
php artisan twill:install      
```

Creating a Page Module
```
php artisan twill:make:module pages
```

Answer the prompts and then run
- Do you need to use the block editor on this module: yes
- Do you need to translate content on this module: yes
- Do you need to generate slugs on this module: yes
- Do you need to attach images on this module: yes
- Do you need to attach files on this module: no
- Do you need to manage the position of records on this module: no
- Do you need to enable revisions on this module: yes
- Do you need to enable nesting on this module: no
- Do you need to generate a module factory: no
- Do you need to generate a module seeder: no
- Do you also want to generate the preview file: yes

```
php artisan migrate
```

Creating a custom block

```
php artisan twill:make:block text
php artisan twill:make:block image
```
- Should we also generate a view file for rendering the block? yes


