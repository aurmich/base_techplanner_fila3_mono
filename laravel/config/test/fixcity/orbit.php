<?php

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
use Modules\Tenant\Services\TenantService;

return [

    'default' => env('ORBIT_DEFAULT_DRIVER', 'md'),

    'drivers' => [
        'md' => \Orbit\Drivers\Markdown::class,
        'json' => \Orbit\Drivers\Json::class,
        'yaml' => \Orbit\Drivers\Yaml::class,
    ],

    'paths' => [
        'content' => base_path('database/content'),
        //'cache' => storage_path('framework/cache/orbit'),
        'cache' => TenantService::filePath(''),
    ],

<<<<<<< HEAD
=======
declare(strict_types=1);

use Modules\Tenant\Services\TenantService;

return [
    'default' => env('ORBIT_DEFAULT_DRIVER', 'md'),

    'drivers' => [
        'md' => Orbit\Drivers\Markdown::class,
        'json' => Orbit\Drivers\Json::class,
        'yaml' => Orbit\Drivers\Yaml::class,
    ],

    'paths' => [
        'content' => TenantService::filePath('database/content'),
        'cache' => TenantService::filePath(''),
    ],
>>>>>>> origin/master
=======
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
];
