<?php

declare(strict_types=1);

/*|--------------------------------------------------------------------------
 | Search Engine Configuration
 |--------------------------------------------------------------------------
 |
 | پیکربندی موتور search — همهٔ کلیدهای مستندشده در `docs/03-engines/search.md` بخش «پیکربندی».
 |
 |@see https://github.com/Derogaramin/Tavaan-Doc/blob/main/docs/03-engines/search.md
 */

return [
    /*| پیش‌فرض موتور (driver/store یا حالت فعال) */
    'default' => env('SEARCH_DEFAULT', 'mysql'),

    /*| لیست درایورها */
    'drivers' => [
        'mysql' => [
            // پیکربندی درایور mysql
            'enabled' => true,
        ],
        'pgsql' => [
            // پیکربندی درایور pgsql
            'enabled' => true,
        ],
        'sqlite' => [
            // پیکربندی درایور sqlite
            'enabled' => true,
        ],
        'native' => [
            // پیکربندی درایور native
            'enabled' => true,
        ],
        'meilisearch' => [
            // پیکربندی درایور meilisearch
            'enabled' => true,
        ],
        'typesense' => [
            // پیکربندی درایور typesense
            'enabled' => true,
        ],
    ],

    /*| کلید کش (در صورت استفاده) */
    'prefix' => env('SEARCH_PREFIX', 'search:'),

    /*| تنظیمات لاگ */
    'log' => [
        'channel' => env('SEARCH_LOG_CHANNEL', 'search'),
    ],

    /*| Facade */
    'facade' => [
        'name' => 'Search',
        'accessor' => 'search',
    ],

    /*| سایر کلیدها (طبق مستندات) */
    'options' => [
        // TODO: کلیدهای اضافی طبق سند §۶ (پیکربندی)
    ],
];