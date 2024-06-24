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
        'source' => storage_path('app/public/uploads'),
        'use_source_disk' => false,
        'source_disk' => 'public',
        'cache' => storage_path('app'),
        'use_cache_disk' => false,
        'cache_disk' => 'public',
        'base_url' => env('APP_URL'),
        'base_path' => 'storage',
        'use_signed_urls' => false,
        'sign_key' => null,
        'driver' => 'gd',
        'default_params' => [
            'fm' => 'jpg',
            'q' => '80',
            'fit' => 'max',
        ],
        'cms_default_params' => [
            'q' => '60',
            'dpr' => '1',
        ],
    ],
];

