<?php
$dashletData['Jam01_JDB_CompanyDashlet']['searchFields'] = array (
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
);
$dashletData['Jam01_JDB_CompanyDashlet']['columns'] = array (
  'companyname' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_COMPANYNAME',
    'width' => '10%',
    'default' => true,
    'name' => 'companyname',
  ),
  'postcode' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_POSTCODE',
    'width' => '10%',
    'default' => true,
    'name' => 'postcode',
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
  'url' => 
  array (
    'type' => 'url',
    'label' => 'LBL_URL',
    'width' => '10%',
    'default' => true,
    'name' => 'url',
  ),
  'companyactive' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_COMPANYACTIVE',
    'width' => '10%',
    'name' => 'companyactive',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => true,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'companyoverview' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_COMPANYOVERVIEW',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
    'name' => 'companyoverview',
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
  'telephone' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TELEPHONE',
    'width' => '10%',
    'default' => false,
    'name' => 'telephone',
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
  ),
);
