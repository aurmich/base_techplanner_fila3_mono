<?php return array (
  'resources' => 'Risorse',
  'pages' => 'Pagine',
  'widgets' => 'Widgets',
  'navigation' => 
  array (
    'name' => 'Ruolo',
    'plural' => 'Ruoli',
    'group' => 
    array (
      'name' => 'Admin',
    ),
  ),
  'fields' => 
  array (
    'name' => 'Nome',
    'guard_name' => 
    array (
      'label' => 'Guard',
    ),
    'permissions' => 'Permessi',
    'updated_at' => 'Aggiornato il',
    'first_name' => 'Nome',
    'last_name' => 'Cognome',
    'select_all' => 
    array (
      'name' => 'Seleziona Tutti',
      'message' => '',
    ),
    'team' => 
    array (
      'name' => 
      array (
        'label' => 'team.name',
      ),
    ),
  ),
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
  ),
);