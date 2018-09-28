<?php
$module_name = 'TPLPO_Purchaseorderin';
$searchdefs [$module_name] = 
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
      'client' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_CLIENT',
        'id' => 'ACCOUNT_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'client',
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
      'client' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_CLIENT',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'id' => 'ACCOUNT_ID_C',
        'name' => 'client',
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'description' => 
      array (
        'type' => 'text',
        'studio' => 'visible',
        'label' => 'LBL_DESCRIPTION',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'description',
      ),
      'po_total_allocated' => 
      array (
        'type' => 'currency',
        'default' => true,
        'label' => 'LBL_PO_TOTAL_ALLOCATED',
        'currency_format' => true,
        'width' => '10%',
        'name' => 'po_total_allocated',
      ),
      'po_value' => 
      array (
        'type' => 'currency',
        'default' => true,
        'label' => 'LBL_PO_VALUE',
        'currency_format' => true,
        'width' => '10%',
        'name' => 'po_value',
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
