<?php 
return [
  'resource' => ['name' => 'notify_themes'],
  'navigation' => [
    'name' => 'notify_themes',
    'plural' => 'notify_themes',
<<<<<<< HEAD
    'group' => ['name' => 'Admin'],
=======
    'group' => 
    array (
      'name' => 'Admin',
    ),
>>>>>>> origin/dev
    'label' => 'notify theme',
  ],
  'fields' => [
    'name' => 'Nome Area',
    'parent' => 'Settore di appartenenza',
    'parent.name' => 'Settore di appartenenza',
    'parent_name' => 'Settore di appartenenza',
    'assets' => 'Quantità di asset',
  ],
  'actions' => [
    'import' => [
      'name' => 'Importa da file',
      'fields' => ['import_file' => 'Seleziona un file XLS o CSV da caricare'],
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
  'tab' => [
    'index' => 'Lista',
    'create' => 'Aggiungi',
    'edit' => 'Modifica',
  ],
];
