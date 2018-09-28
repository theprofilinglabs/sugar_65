<?php
$module_name = 'TPLUR_UserRates';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'user_relationship' => 
      array (
        'type' => 'multienum',
        'studio' => 'visible',
        'label' => 'LBL_USER_RELATIONSHIP',
        'width' => '10%',
        'default' => true,
        'name' => 'user_relationship',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'width' => '10%',
        'default' => true,
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'modified_user_id' => 
      array (
        'type' => 'assigned_user_name',
        'label' => 'LBL_MODIFIED',
        'width' => '10%',
        'default' => true,
        'name' => 'modified_user_id',
      ),
      'user_relationship' => 
      array (
        'type' => 'multienum',
        'studio' => 'visible',
        'label' => 'LBL_USER_RELATIONSHIP',
        'width' => '10%',
        'default' => true,
        'name' => 'user_relationship',
      ),
      'description' => 
      array (
        'type' => 'text',
        'label' => 'LBL_DESCRIPTION',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'description',
      ),
      'perhoursellout' => 
      array (
        'type' => 'currency',
        'default' => true,
        'label' => 'LBL_PERHOURSELLOUT',
        'currency_format' => true,
        'width' => '10%',
        'name' => 'perhoursellout',
      ),
      'recordactive' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_RECORDACTIVE',
        'width' => '10%',
        'name' => 'recordactive',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
