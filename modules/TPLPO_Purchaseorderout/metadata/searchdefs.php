<?php
$module_name = 'TPLPO_Purchaseorderout';
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
      'supplier' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_SUPPLIER',
        'id' => 'TPLSU_TPL_SUPPLIERS_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'supplier',
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
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'supplier' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_SUPPLIER',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'id' => 'TPLSU_TPL_SUPPLIERS_ID_C',
        'name' => 'supplier',
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
