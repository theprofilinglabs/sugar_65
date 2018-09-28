<?php
$module_name = 'Jam01_JDB_Company';
$listViewDefs [$module_name] = 
array (
  'COMPANYNAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_COMPANYNAME',
    'width' => '10%',
    'default' => true,
  ),
  'ADDRESS4' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESS4',
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
  'ADDRESS5' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESS5',
    'width' => '10%',
    'default' => true,
  ),
  'COUNTRYCODE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_COUNTRYCODE',
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
  'LEVELCODE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_LEVELCODE',
    'width' => '10%',
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
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
  'COMPANYID' => 
  array (
    'type' => 'int',
    'label' => 'LBL_COMPANYID',
    'width' => '10%',
    'default' => false,
  ),
  'SALESREVENUE' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_SALESREVENUE',
    'width' => '10%',
    'default' => false,
  ),
  'URL' => 
  array (
    'type' => 'url',
    'label' => 'LBL_URL',
    'width' => '10%',
    'default' => false,
  ),
  'SRCURRENCY' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_SRCURRENCY',
    'width' => '10%',
  ),
  'COMPANYOVERVIEW' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_COMPANYOVERVIEW',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'OWNERSHIP' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_OWNERSHIP',
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
  'EXTERNALCRMREF' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EXTERNALCRMREF',
    'width' => '10%',
    'default' => false,
  ),
  'TOTALSTAFF' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TOTALSTAFF',
    'width' => '10%',
    'default' => false,
  ),
  'ADDRESS1' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESS1',
    'width' => '10%',
    'default' => false,
  ),
  'ADDRESS2' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESS2',
    'width' => '10%',
    'default' => false,
  ),
  'ADDRESS3' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESS3',
    'width' => '10%',
    'default' => false,
  ),
  'ADDRESS6' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESS6',
    'width' => '10%',
    'default' => false,
  ),
  'LOADNO' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_LOADNO',
    'width' => '10%',
  ),
  'ADDRESS7' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESS7',
    'width' => '10%',
    'default' => false,
  ),
  'TELEPHONE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TELEPHONE',
    'width' => '10%',
    'default' => false,
  ),
  'COMPANYNOTE' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_COMPANYNOTE',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'COMPANYACTIVE' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_COMPANYACTIVE',
    'width' => '10%',
  ),
);
?>