<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="300" alt="Laravel Logo">
    </a>
    <a href="https://twillcms.com" target="_blank">
        <img src="https://twillcms.com/docs/assets/twill_cms_logo.png" width="200" alt="Laravel Logo">
    </a>
</p>

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

To setup : Run
```
composer install
npm install
php artisan serve
```

Create a user
```
use twillpagebuilder;

INSERT INTO twill_users (
    id,
    deleted_at,
    created_at,
    updated_at,
    published,
    name,
    email,
    password,
    role,
    title,
    description,
    remember_token,
    language,
    last_login_at,
    registered_at,
    require_new_password
) VALUES (
    1,
    NULL,
    '2024-08-09 04:43:00',
    '2024-08-09 04:43:00',
    1,
    'Admin',
    'senuradp@gmail.com',
    '$2y$12$jtyKr2atQdxkdxioWAQniOOZt45FImOS1J/ULLzvkh4bGq44FSBWq',
    'SUPERADMIN',
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    '2024-08-09 04:43:00',
    0
);


SELECT * FROM twillpagebuilder.twill_users;
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

Add the Glide  configuration in config/twill.php

```
// Glide configuration
    'glide' => [
        'source' => storage_path('app/public/uploads'), // Source path for images
        'use_source_disk' => false, // Not using a source disk directly
        'source_disk' => 'public', // Specify the disk to use, aligning with your filesystem configuration
        'cache' => storage_path('app'), // Path for cache storage
        'use_cache_disk' => false, // Not using a cache disk directly
        'cache_disk' => 'public', // Specify the disk for caching
        'base_url' => env('APP_URL'), // Base URL for generating image URLs
        'base_path' => 'storage', // Update this to 'storage' to fix the incorrect '/img/' prefix
        'use_signed_urls' => false, // Set to false unless you need signed URLs for security
        'sign_key' => null, // Sign key for securing URLs, set to null if not used
        'driver' => 'gd', // Image processing driver, typically 'gd' or 'imagick'
        'default_params' => [
            'fm' => 'jpg', // Default format for images
            'q' => '80', // Default quality setting
            'fit' => 'max', // Default fit setting
        ],
        'cms_default_params' => [
            'q' => '60', // Default quality for CMS images
            'dpr' => '1', // Default device pixel ratio
        ],
    ],
```

Install tailwind css
```
npm install -D tailwindcss postcss autoprefixer
npx tailwindcss init -p
```

Add this to tailwind.config.js
```
/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
```

Add these to resources/css/app.css
```
@tailwind base;
@tailwind components;
@tailwind utilities;
```

Add the @vite code lines to the views from the documentation

Make controller
```
php artisan make:controller PageDisplayController
```

Nav

- Gen module
```
php artisan twill:make:module MenuLinks --hasNesting --hasPosition --hasTranslation
```

Rendering menu
```
php artisan make:component Menu
```

