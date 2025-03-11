<<<<<<< HEAD
<?php

declare(strict_types=1);

return [
    'navigation' => [
        'name' => 'Contenuto Pagina',
        'plural' => 'Contenuti Pagina',
        'group' => [
            'name' => 'Site',
        ],
    ],
    'fields' => [
        'name' => [
            'label' => 'Nome',
        ],
        'slug' => [
            'label' => 'Slug',
        ],
        'guard_name' => 'Guard',
        'permissions' => 'Permessi',
        'roles' => 'Ruoli',
        'updated_at' => 'Aggiornato il',
        'first_name' => 'Nome',
        'last_name' => 'Cognome',
        'content_blocks' => [
            'label' => 'content_blocks',
        ],
    ],
    'rating' => [
        'no_import' => 'Nessuna cifra inserita',
        'import_zero' => 'Nessuna cifra inserita',
        'import_min' => 'Hai superato la cifra di :credits: crediti',
        'no_choice' => 'Nessuna opzione scelta',
    ],
    'single_expired' => 'Scaduto',
    'expired' => 'Articolo scaduto, non si possono fare più scommesse',
    'no_vote' => 'Siamo spiacenti, ma questa votazione è chiusa da :TIME, per favore prova a fare un altra previsione',
    'your_bet' => 'La tua previsione',
    'your_amount' => 'Previsione',
    'if_win' => 'Se vinci',
    'actions' => [
        'import' => [
            'fields' => [
                'import_file' => 'Seleziona un file XLS o CSV da caricare',
            ],
        ],
        'export' => [
            'filename_prefix' => 'Aree al',
            'columns' => [
                'name' => 'Nome area',
                'parent_name' => 'Nome area livello superiore',
            ],
        ],
        'activeLocale' => [
            'label' => 'activeLocale',
        ],
        'create' => [
            'label' => 'create',
        ],
    ],
];
=======
<?php return array (
  'navigation' => 
  array (
    'name' => 'Contenuto Pagina',
    'plural' => 'Contenuti Pagina',
    'group' => 
    array (
      'name' => 'Site',
    ),
  ),
  'fields' => 
  array (
    'name' => 
    array (
      'label' => 'Nome',
    ),
    'slug' => 
    array (
      'label' => 'Slug',
    ),
    'guard_name' => 'Guard',
    'permissions' => 'Permessi',
    'roles' => 'Ruoli',
    'updated_at' => 'Aggiornato il',
    'first_name' => 'Nome',
    'last_name' => 'Cognome',
    'content_blocks' => 
    array (
      'label' => 'content_blocks',
    ),
  ),
  'rating' => 
  array (
    'no_import' => 'Nessuna cifra inserita',
    'import_zero' => 'Nessuna cifra inserita',
    'import_min' => 'Hai superato la cifra di :credits: crediti',
    'no_choice' => 'Nessuna opzione scelta',
  ),
  'single_expired' => 'Scaduto',
  'expired' => 'Articolo scaduto, non si possono fare più scommesse',
  'no_vote' => 'Siamo spiacenti, ma questa votazione è chiusa da :TIME, per favore prova a fare un altra previsione',
  'your_bet' => 'La tua previsione',
  'your_amount' => 'Previsione',
  'if_win' => 'Se vinci',
  'actions' => 
  array (
    'import' => 
    array (
      'fields' => 
      array (
        'import_file' => 'Seleziona un file XLS o CSV da caricare',
      ),
    ),
    'export' => 
    array (
      'filename_prefix' => 'Aree al',
      'columns' => 
      array (
        'name' => 'Nome area',
        'parent_name' => 'Nome area livello superiore',
      ),
    ),
    'activeLocale' => 
    array (
      'label' => 'activeLocale',
    ),
    'create' => 
    array (
      'label' => 'create',
    ),
  ),
);
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
