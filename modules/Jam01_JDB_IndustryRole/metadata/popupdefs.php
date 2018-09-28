<?php
$popupMeta = array (
    'moduleMain' => 'Jam01_JDB_IndustryRole',
    'varName' => 'Jam01_JDB_IndustryRole',
    'orderBy' => 'jam01_jdb_industryrole.name',
    'whereClauses' => array (
  'name' => 'jam01_jdb_industryrole.name',
  'industryrole' => 'jam01_jdb_industryrole.industryrole',
  'description' => 'jam01_jdb_industryrole.description',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'industryrole',
  5 => 'description',
),
    'searchdefs' => array (
  'industryrole' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_INDUSTRYROLE',
    'width' => '10%',
    'name' => 'industryrole',
  ),
  'description' => 
  array (
    'type' => 'text',
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
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'name' => 'description',
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
),
);
