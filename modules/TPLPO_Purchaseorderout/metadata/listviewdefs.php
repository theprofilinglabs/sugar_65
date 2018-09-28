<?php
$module_name = 'TPLPO_Purchaseorderout';
$listViewDefs [$module_name] =
array (
  'NAME' =>
  array (
    'width' => '10%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),

  'SUPPLIER' =>
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_SUPPLIER',
    'id' => 'TPLSU_TPL_SUPPLIERS_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'PO_VALUE' =>
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_PO_VALUE',
    'currency_format' => true,
    'width' => '10%',
  ),
  'PO_TOTAL_ALLOCATED' =>
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_PO_TOTAL_ALLOCATED',
    'currency_format' => true,
    'width' => '10%',
  ),
  'PURCHASEORDER' =>
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_PURCHASEORDER',
    'id' => 'DOCUMENT_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'TELE_COMPONENT' =>
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_TELE_COMPONENT',
    'currency_format' => true,
    'width' => '10%',
  ),
  'DATE_ENTERED' =>
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_MODIFIED' =>
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => false,
  ),
  'TPLPO_PURCHASEORDERIN_DOCUMENTS_NAME' =>
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_TPLPO_PURCHASEORDERIN_DOCUMENTS_FROM_DOCUMENTS_TITLE',
    'id' => 'TPLPO_PURCHASEORDERIN_DOCUMENTSDOCUMENTS_IDB',
    'width' => '10%',
    'default' => false,
  ),
  'MODIFIED_BY_NAME' =>
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => false,
  ),
  'TELE_ALLOCATED' =>
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_TELE_ALLOCATED',
    'currency_format' => true,
    'width' => '10%',
  ),
 /* 'CREATED_BY_NAME' =>
  array (
    'type' => 'relate',
    'link' => true,
    'studio' => 'visible',
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => false,
  ), */
  'CREATED_BY_NAME' =>
  array (    'width' => '10%',
  'label' => 'LBL_CREATED',
  'default' => true,
  'related_fields' =>
  array ( 'created_by' ),
  ),
  'DESCRIPTION' =>
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'PO_TOTAL' =>
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_PO_TOTAL',
    'currency_format' => true,
    'width' => '10%',
  ),
  'PROFILING_COMPONENT' =>
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_PROFILING_COMPONENT',
    'currency_format' => true,
    'width' => '10%',
  ),
  'PROFILING_ALLOCATED' =>
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_PROFILING_ALLOCATED',
    'currency_format' => true,
    'width' => '10%',
  ),
  'PROJ_MAN_COMPONENT' =>
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_PROJ_MAN_COMPONENT',
    'currency_format' => true,
    'width' => '10%',
  ),
  'PROJ_MAN_ALLOCATED' =>
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_PROJ_MAN_ALLOCATED',
    'currency_format' => true,
    'width' => '10%',
  ),
  'OTHER_COMPONENT' =>
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_OTHER_COMPONENT',
    'currency_format' => true,
    'width' => '10%',
  ),
  'OTHER_ALLOCATED' =>
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_OTHER_ALLOCATED',
    'currency_format' => true,
    'width' => '10%',
  ),
  'PO_START_DATE' =>
  array (
    'type' => 'date',
    'label' => 'LBL_PO_START_DATE',
    'width' => '10%',
    'default' => false,
  ),
  'PO_END_DATE' =>
  array (
    'type' => 'date',
    'label' => 'LBL_PO_END_DATE',
    'width' => '10%',
    'default' => false,
  ),
  'ASSIGNED_USER_NAME' =>
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
  'CURRENCY_ID' =>
  array (
    'type' => 'currency_id',
    'studio' => 'visible',
    'label' => 'LBL_CURRENCY',
    'width' => '10%',
    'default' => false,
  ),
);
?>
