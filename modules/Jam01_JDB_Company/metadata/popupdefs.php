<?php
$popupMeta = array (
    'moduleMain' => 'Jam01_JDB_Company',
    'varName' => 'Jam01_JDB_Company',
    'orderBy' => 'jam01_jdb_company.name',
    'whereClauses' => array (
  'companyname' => 'jam01_jdb_company.companyname',
  'postcode' => 'jam01_jdb_company.postcode',
  'url' => 'jam01_jdb_company.url',
  'telephone' => 'jam01_jdb_company.telephone',
),
    'searchInputs' => array (
  4 => 'companyname',
  5 => 'postcode',
  6 => 'url',
  7 => 'telephone',
),
    'searchdefs' => array (
  'companyname' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_COMPANYNAME',
    'width' => '10%',
    'name' => 'companyname',
  ),
  'postcode' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_POSTCODE',
    'width' => '10%',
    'name' => 'postcode',
  ),
  'url' => 
  array (
    'type' => 'url',
    'label' => 'LBL_URL',
    'width' => '10%',
    'name' => 'url',
  ),
  'telephone' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TELEPHONE',
    'width' => '10%',
    'name' => 'telephone',
  ),
),
    'listviewdefs' => array (
  'COMPANYNAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_COMPANYNAME',
    'width' => '10%',
    'default' => true,
  ),
  'POSTCODE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_POSTCODE',
    'width' => '10%',
    'default' => true,
  ),
  'URL' => 
  array (
    'type' => 'url',
    'label' => 'LBL_URL',
    'width' => '10%',
    'default' => true,
  ),
  'INDUSTRY' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_INDUSTRY',
    'width' => '10%',
  ),
),
);
