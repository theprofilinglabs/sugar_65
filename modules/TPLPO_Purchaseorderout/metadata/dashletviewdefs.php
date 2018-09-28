<?php
$dashletData['TPLPO_PurchaseorderoutDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'supplier' => 
  array (
    'default' => '',
  ),
  'date_entered' => 
  array (
    'default' => '',
  ),
  'columns' => 
  array (
    'default' => '',
  ),
  'date_modified' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'default' => '',
  ),
  'searchfields' => 
  array (
    'default' => '',
  ),
);
$dashletData['TPLPO_PurchaseorderoutDashlet']['columns'] = array (
  'supplier' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_SUPPLIER',
    'id' => 'TPLSU_TPL_SUPPLIERS_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
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
  'po_total_allocated' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_PO_TOTAL_ALLOCATED',
    'currency_format' => true,
    'width' => '10%',
    'name' => 'po_total_allocated',
  ),
  'purchaseorder' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_PURCHASEORDER',
    'id' => 'DOCUMENT_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'columns' => 
  array (
    'name' => 
    array (
      'width' => '40',
      'label' => 'LBL_LIST_NAME',
      'link' => true,
      'default' => true,
    ),
    'date_entered' => 
    array (
      'width' => '15',
      'label' => 'LBL_DATE_ENTERED',
      'default' => true,
    ),
    'date_modified' => 
    array (
      'width' => '15',
      'label' => 'LBL_DATE_MODIFIED',
    ),
    'created_by' => 
    array (
      'width' => '8',
      'label' => 'LBL_CREATED',
    ),
    'assigned_user_name' => 
    array (
      'width' => '8',
      'label' => 'LBL_LIST_ASSIGNED_USER',
    ),
    'width' => '10%',
    'default' => false,
  ),
  'searchfields' => 
  array (
    'date_entered' => 
    array (
      'default' => '',
    ),
    'date_modified' => 
    array (
      'default' => '',
    ),
    'assigned_user_id' => 
    array (
      'type' => 'assigned_user_name',
      'default' => 'Administrator',
    ),
    'width' => '10%',
    'default' => false,
    'name' => 'searchfields',
  ),
  'tele_component' => 
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_TELE_COMPONENT',
    'currency_format' => true,
    'width' => '10%',
    'name' => 'tele_component',
  ),
  'tele_allocated' => 
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_TELE_ALLOCATED',
    'currency_format' => true,
    'width' => '10%',
    'name' => 'tele_allocated',
  ),
  'other_component' => 
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_OTHER_COMPONENT',
    'currency_format' => true,
    'width' => '10%',
    'name' => 'other_component',
  ),
  'other_allocated' => 
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_OTHER_ALLOCATED',
    'currency_format' => true,
    'width' => '10%',
    'name' => 'other_allocated',
  ),
  'profiling_component' => 
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_PROFILING_COMPONENT',
    'currency_format' => true,
    'width' => '10%',
    'name' => 'profiling_component',
  ),
  'profiling_allocated' => 
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_PROFILING_ALLOCATED',
    'currency_format' => true,
    'width' => '10%',
    'name' => 'profiling_allocated',
  ),
  'proj_man_component' => 
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_PROJ_MAN_COMPONENT',
    'currency_format' => true,
    'width' => '10%',
    'name' => 'proj_man_component',
  ),
  'proj_man_allocated' => 
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_PROJ_MAN_ALLOCATED',
    'currency_format' => true,
    'width' => '10%',
    'name' => 'proj_man_allocated',
  ),
  'po_start_date' => 
  array (
    'type' => 'date',
    'label' => 'LBL_PO_START_DATE',
    'width' => '10%',
    'default' => false,
    'name' => 'po_start_date',
  ),
  'po_end_date' => 
  array (
    'type' => 'date',
    'label' => 'LBL_PO_END_DATE',
    'width' => '10%',
    'default' => false,
    'name' => 'po_end_date',
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
);
