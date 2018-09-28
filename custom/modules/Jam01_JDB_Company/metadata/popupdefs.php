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
    'name' => 'companyname',
  ),
  'POSTCODE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_POSTCODE',
    'width' => '10%',
    'default' => true,
    'name' => 'postcode',
  ),
  'URL' => 
  array (
    'type' => 'url',
    'label' => 'LBL_URL',
    'width' => '10%',
    'default' => true,
    'name' => 'url',
  ),
  'ADDRESS5' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESS5',
    'width' => '10%',
    'default' => true,
    'name' => 'address5',
  ),
  'INDUSTRY' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_INDUSTRY',
    'width' => '10%',
    'name' => 'industry',
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => true,
  ),
),
);
