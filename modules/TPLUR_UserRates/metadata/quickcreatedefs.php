<?php
$module_name = 'TPLUR_UserRates';
$viewdefs [$module_name] = 
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
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
          ),
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'currency_id',
            'studio' => 'visible',
            'label' => 'LBL_CURRENCY',
          ),
          1 => 
          array (
            'name' => 'user_relationship',
            'studio' => 'visible',
            'label' => 'LBL_USER_RELATIONSHIP',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'recordactive',
            'label' => 'LBL_RECORDACTIVE',
          ),
          1 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'perhoursellout',
            'label' => 'LBL_PERHOURSELLOUT',
          ),
          1 => 
          array (
            'name' => 'hourlyrate',
            'label' => 'LBL_HOURLYRATE',
          ),
        ),
      ),
    ),
  ),
);
?>
