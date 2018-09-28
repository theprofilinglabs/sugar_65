<?php
$viewdefs ['Project'] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'status',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'purchaseorderno_c',
            'label' => 'LBL_PURCHASEORDERNO',
          ),
          1 => 
          array (
            'name' => 'client_id_c',
            'studio' => 'visible',
            'label' => 'LBL_CLIENT_ID',
          ),
        ),
        2 => 
        array (
          0 => 'assigned_user_name',
          1 => 'priority',
        ),
        3 => 
        array (
          0 => 'description',
        ),
        4 => 
        array (
          0 => 'estimated_start_date',
          1 => 'estimated_end_date',
        ),
      ),
    ),
  ),
);
?>
