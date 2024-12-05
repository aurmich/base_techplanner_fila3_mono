<?php

declare(strict_types=1);

return [
    'resource' => [
        'name' => 'send_email',
    ],
    'navigation' => [
        'name' => 'send_email',
        'plural' => 'send_email',
        'group' => [
            'name' => 'Invia',
        ],
    ],
    'fields' => [
        'name' => 'Nome Area',
        'parent' => 'Settore di appartenenza',
        'parent.name' => 'Settore di appartenenza',
        'parent_name' => 'Settore di appartenenza',
        'assets' => 'Quantità di asset',
        'to' => [
            'label' => 'to',
        ],
        'subject' => [
            'label' => 'subject',
        ],
        'body_html' => [
            'label' => 'body_html',
        ],
    ],
    'actions' => [
        'import' => [
            'name' => 'Importa da file',
            'fields' => [
                'import_file' => 'Seleziona un file XLS o CSV da caricare',
            ],
        ],
        'export' => [
            'name' => 'Esporta dati',
            'filename_prefix' => 'Aree al',
            'columns' => [
                'name' => 'Nome area',
                'parent_name' => 'Nome area livello superiore',
            ],
        ],
    ],
];
