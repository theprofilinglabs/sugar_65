<?php
$searchdefs ['Project'] = 
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
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'client_id_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CLIENT_ID',
        'id' => 'ACCOUNT_ID_C',
        'link' => true,
        'width' => '10%',
        'name' => 'client_id_c',
      ),
      'purchaseorderno_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_PURCHASEORDERNO',
        'width' => '10%',
        'name' => 'purchaseorderno_c',
      ),
      'assigned_user_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ASSIGNED_USER_NAME',
        'id' => 'ASSIGNED_USER_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'assigned_user_name',
      ),
      'status' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_STATUS',
        'width' => '10%',
        'default' => true,
        'name' => 'status',
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
      'estimated_start_date' => 
      array (
        'name' => 'estimated_start_date',
        'default' => true,
        'width' => '10%',
      ),
      'estimated_end_date' => 
      array (
        'name' => 'estimated_end_date',
        'default' => true,
        'width' => '10%',
      ),
      'status' => 
      array (
        'name' => 'status',
        'default' => true,
        'width' => '10%',
      ),
      'priority' => 
      array (
        'name' => 'priority',
        'default' => true,
        'width' => '10%',
      ),
      'client_id_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CLIENT_ID',
        'link' => true,
        'width' => '10%',
        'id' => 'ACCOUNT_ID_C',
        'name' => 'client_id_c',
      ),
      'purchaseorderno_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_PURCHASEORDERNO',
        'width' => '10%',
        'name' => 'purchaseorderno_c',
      ),
      'assigned_user_id' => 
      array (
        'type' => 'assigned_user_name',
        'label' => 'LBL_ASSIGNED_USER_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'assigned_user_id',
      ),
      'created_by' => 
      array (
        'type' => 'assigned_user_name',
        'label' => 'LBL_CREATED_BY',
        'width' => '10%',
        'default' => true,
        'name' => 'created_by',
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
