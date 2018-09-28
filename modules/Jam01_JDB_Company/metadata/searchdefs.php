<?php
$module_name = 'Jam01_JDB_Company';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'companyname' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_COMPANYNAME',
        'width' => '10%',
        'default' => true,
        'name' => 'companyname',
      ),
    ),
    'advanced_search' => 
    array (
      'companyname' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_COMPANYNAME',
        'width' => '10%',
        'default' => true,
        'name' => 'companyname',
      ),
      'industry' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_INDUSTRY',
        'width' => '10%',
        'name' => 'industry',
      ),
      'postcode' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_POSTCODE',
        'width' => '10%',
        'default' => true,
        'name' => 'postcode',
      ),
      'salesrevenue' => 
      array (
        'type' => 'decimal',
        'label' => 'LBL_SALESREVENUE',
        'width' => '10%',
        'default' => true,
        'name' => 'salesrevenue',
      ),
      'srcurrency' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_SRCURRENCY',
        'width' => '10%',
        'name' => 'srcurrency',
      ),
      'totalstaff' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_TOTALSTAFF',
        'width' => '10%',
        'default' => true,
        'name' => 'totalstaff',
      ),
      'ownership' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_OWNERSHIP',
        'width' => '10%',
        'name' => 'ownership',
      ),
      'url' => 
      array (
        'type' => 'url',
        'label' => 'LBL_URL',
        'width' => '10%',
        'default' => true,
        'name' => 'url',
      ),
      'countrycode' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_COUNTRYCODE',
        'width' => '10%',
        'name' => 'countrycode',
      ),
      'companyactive' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_COMPANYACTIVE',
        'width' => '10%',
        'name' => 'companyactive',
      ),
      'companyoverview' => 
      array (
        'type' => 'text',
        'studio' => 'visible',
        'label' => 'LBL_COMPANYOVERVIEW',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'companyoverview',
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
