<?php

return [
    'production' => false,
    'baseUrl' => '',
    'collections' => [
        'news' => [
            'sort' => '-post_date'
        ]
    ],
    'algolia' => [
        'app_id' => env('ALGOLIA_APP_ID'),
        'admin_api_key' => env('ALGOLIA_ADMIN_API_KEY'),
        'search_api_key' => env('ALGOLIA_SEARCH_API_KEY'),
        'index' => 'dev_NEWS',
    ],
    'is_active' => function ($page, $key) {
        return ($page->getFilename() === $key) ? 'active' : '';
    }
];
