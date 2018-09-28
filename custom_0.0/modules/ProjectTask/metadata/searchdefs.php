<?php
$searchdefs ['ProjectTask'] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'project_name' => 
      array (
        'name' => 'project_name',
        'label' => 'LBL_PROJECT_NAME',
        'width' => '10%',
        'default' => true,
      ),
      'purchaseorderno_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_PURCHASEORDERNOPT',
        'width' => '10%',
        'name' => 'purchaseorderno_c',
      ),
      'campaignid_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_CAMPAIGNID',
        'width' => '10%',
        'name' => 'campaignid_c',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      0 => 'name',
      1 => 
      array (
        'name' => 'project_name',
        'label' => 'LBL_PROJECT_NAME',
      ),
      2 => 
      array (
        'name' => 'assigned_user_id',
        'type' => 'enum',
        'label' => 'LBL_ASSIGNED_TO',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
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
