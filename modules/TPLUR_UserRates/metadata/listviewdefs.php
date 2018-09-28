<?php
$module_name = 'TPLUR_UserRates';
$listViewDefs [$module_name] = 
array (
  'ASSIGNED_USER_ID' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ASSIGNED_TO_ID',
    'id' => 'ASSIGNED_USER_ID',
    'link' => true,
    'width' => '9%',
    'default' => true,
  ),
  'CURRENCY_ID' => 
  array (
    'type' => 'currency_id',
    'studio' => 'visible',
    'label' => 'LBL_CURRENCY',
    'width' => '9%',
    'default' => true,
  ),
  'USER_RELATIONSHIP' => 
  array (
    'type' => 'multienum',
    'studio' => 'visible',
    'label' => 'LBL_USER_RELATIONSHIP',
    'width' => '9%',
    'default' => true,
  ),
  'HOURLYRATE' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_HOURLYRATE',
    'currency_format' => true,
    'width' => '9%',
  ),
  'PERHOURSELLOUT' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_PERHOURSELLOUT',
    'currency_format' => true,
    'width' => '9%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'RECORDACTIVE' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_RECORDACTIVE',
    'width' => '5%',
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => false,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
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
  'MODIFIED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => false,
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => false,
    'link' => true,
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => false,
  ),
);
?>
