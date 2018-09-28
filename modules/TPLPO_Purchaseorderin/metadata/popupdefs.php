<?php
$popupMeta = array (
    'moduleMain' => 'TPLPO_Purchaseorder',
    'varName' => 'TPLPO_Purchaseorder',
    'orderBy' => 'tplpo_purchaseorder.name',
    'whereClauses' => array (
  'name' => 'tplpo_purchaseorder.name',
  'po_total_allocated' => 'tplpo_purchaseorder.po_total_allocated',
  'po_value' => 'tplpo_purchaseorder.po_value',
  'description' => 'tplpo_purchaseorder.description',
  'client' => 'tplpo_purchaseorderin.client',
),
    'searchInputs' => array (
  1 => 'name',
  5 => 'po_total_allocated',
  6 => 'po_value',
  7 => 'description',
  9 => 'client',
),
    'searchdefs' => array (
  'name' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'name',
  ),
  'client' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_CLIENT',
    'id' => 'ACCOUNT_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'client',
  ),
  'po_total_allocated' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_PO_TOTAL_ALLOCATED',
    'currency_format' => true,
    'width' => '10%',
    'name' => 'po_total_allocated',
  ),
  'po_value' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_PO_VALUE',
    'currency_format' => true,
    'width' => '10%',
    'name' => 'po_value',
  ),
  'description' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'name' => 'description',
  ),
),
    'listviewdefs' => array (
  'CLIENT' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_CLIENT',
    'id' => 'ACCOUNT_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'NAME' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
    'name' => 'name',
  ),
  'PO_VALUE' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_PO_VALUE',
    'currency_format' => true,
    'width' => '10%',
    'name' => 'po_value',
  ),
  'PO_TOTAL_ALLOCATED' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_PO_TOTAL_ALLOCATED',
    'currency_format' => true,
    'width' => '10%',
    'name' => 'po_total_allocated',
  ),
  'PO_START_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_PO_START_DATE',
    'width' => '10%',
    'default' => true,
    'name' => 'po_start_date',
  ),
  'PO_END_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_PO_END_DATE',
    'width' => '10%',
    'default' => true,
    'name' => 'po_end_date',
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
    'name' => 'date_modified',
  ),
),
);
