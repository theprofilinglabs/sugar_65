<?php
$module_name = 'Jam01_JDB_Company';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'type' => 'name',
        'link' => true,
        'label' => 'LBL_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'name',
      ),
      'companyname' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_COMPANYNAME',
        'width' => '10%',
        'default' => true,
        'name' => 'companyname',
      ),
      'levelcode' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_LEVELCODE',
        'width' => '10%',
        'name' => 'levelcode',
      ),
      'assigned_user_name' => 
      array (
        'link' => true,
        'type' => 'relate',
        'label' => 'LBL_ASSIGNED_TO_NAME',
        'width' => '10%',
        'default' => true,
        'id' => 'ASSIGNED_USER_ID',
        'name' => 'assigned_user_name',
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
      'name' => 
      array (
        'type' => 'name',
        'link' => true,
        'label' => 'LBL_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'name',
      ),
      'address1' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_ADDRESS1',
        'width' => '10%',
        'default' => true,
        'name' => 'address1',
      ),
      'postcode' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_POSTCODE',
        'width' => '10%',
        'default' => true,
        'name' => 'postcode',
      ),
      'address5' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_ADDRESS5',
        'width' => '10%',
        'default' => true,
        'name' => 'address5',
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
      'url' => 
      array (
        'type' => 'url',
        'label' => 'LBL_URL',
        'width' => '10%',
        'default' => true,
        'name' => 'url',
      ),
      'externalcrmref' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_EXTERNALCRMREF',
        'width' => '10%',
        'default' => true,
        'name' => 'externalcrmref',
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
      'companynote' => 
      array (
        'type' => 'text',
        'studio' => 'visible',
        'label' => 'LBL_COMPANYNOTE',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'companynote',
      ),
      'created_by' => 
      array (
        'type' => 'assigned_user_name',
        'label' => 'LBL_CREATED',
        'width' => '10%',
        'default' => true,
        'name' => 'created_by',
      ),
      'description' => 
      array (
        'type' => 'text',
        'label' => 'LBL_DESCRIPTION',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'description',
      ),
      'date_modified' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_MODIFIED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_modified',
      ),
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'loadno' => 
      array (
        'type' => 'int',
        'default' => true,
        'label' => 'LBL_LOADNO',
        'width' => '10%',
        'name' => 'loadno',
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
