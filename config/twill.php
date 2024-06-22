<?php

return [
    // Media library configuration
    'media_library' => [
        'disk' => 'public', // Use the public disk
        'endpoint_type' => 'local', // Specify the endpoint type as local
        'prefix' => 'storage', // Change the URL prefix to 'storage' for Laravel's default storage path
    ],

    // Block editor configuration
    'block_editor' => [
        'use_twill_blocks' => [], // Specify the custom blocks being used
        'crops' => [
            'highlight' => [
                'desktop' => [
                    [
                        'name' => 'desktop',
                        'ratio' => 16 / 9, // Ratio for desktop images
                    ],
                ],
                'mobile' => [
                    [
                        'name' => 'mobile',
                        'ratio' => 1, // Ratio for mobile images
                    ],
                ],
            ],
        ],
    ],

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
];

