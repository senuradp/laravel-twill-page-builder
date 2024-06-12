<?php

return [
//    image
//    'default_crops' => [
//        'page_cover' => [
//            'default' => [
//                [
//                    'name' => 'default',
//                    'ratio' => 16 / 9,
//                ]
//            ]
//        ]
//    ],

//    disable default blocks
    'block_editor' => [
        'use_twill_blocks' => [],
        //image block
        'crops' => [
            'highlight' => [
                'desktop' => [
                    [
                        'name' => 'desktop',
                        'ratio' => 16 / 9,
                    ],
                ],
                'mobile' => [
                    [
                        'name' => 'mobile',
                        'ratio' => 1,
                    ],
                ],
            ],
        ],
    ],


];
