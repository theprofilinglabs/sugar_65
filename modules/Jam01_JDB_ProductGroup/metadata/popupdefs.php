<?php
$popupMeta = array (
    'moduleMain' => 'Jam01_JDB_ProductGroup',
    'varName' => 'Jam01_JDB_ProductGroup',
    'orderBy' => 'jam01_jdb_productgroup.name',
    'whereClauses' => array (
  'name' => 'jam01_jdb_productgroup.name',
  'product' => 'jam01_jdb_productgroup.product',
  'description' => 'jam01_jdb_productgroup.description',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'product',
  5 => 'description',
),
    'searchdefs' => array (
  'product' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRODUCT',
    'width' => '10%',
    'name' => 'product',
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
  'name' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'name',
  ),
),
    'listviewdefs' => array (
  'PRODUCT' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRODUCT',
    'width' => '10%',
    'default' => true,
    'name' => 'product',
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'name' => 'description',
  ),
),
);
