<?php
$popupMeta = array (
    'moduleMain' => 'TPLUR_UserRates',
    'varName' => 'TPLUR_UserRates',
    'orderBy' => 'tplur_userrates.name',
    'whereClauses' => array (
  'assigned_user_name' => 'tplur_userrates.assigned_user_name',
  'user_relationship' => 'tplur_userrates.user_relationship',
  'recordactive' => 'tplur_userrates.recordactive',
  'description' => 'tplur_userrates.description',
),
    'searchInputs' => array (
  4 => 'assigned_user_name',
  5 => 'user_relationship',
  6 => 'recordactive',
  7 => 'description',
),
    'searchdefs' => array (
  'assigned_user_name' => 
  array (
    'link' => true,
    'type' => 'relate',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'name' => 'assigned_user_name',
  ),
  'user_relationship' => 
  array (
    'type' => 'multienum',
    'studio' => 'visible',
    'label' => 'LBL_USER_RELATIONSHIP',
    'width' => '10%',
    'name' => 'user_relationship',
  ),
  'recordactive' => 
  array (
    'type' => 'bool',
    'label' => 'LBL_RECORDACTIVE',
    'width' => '10%',
    'name' => 'recordactive',
  ),
  'description' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'name' => 'description',
  ),
),
    'listviewdefs' => array (
  'ASSIGNED_USER_NAME' => 
  array (
    'link' => true,
    'type' => 'relate',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'default' => true,
  ),
  'RECORDACTIVE' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_RECORDACTIVE',
    'width' => '10%',
  ),
  'PERHOURSELLOUT' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_PERHOURSELLOUT',
    'currency_format' => true,
    'width' => '10%',
  ),
  'HOURLYRATE' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_HOURLYRATE',
    'currency_format' => true,
    'width' => '10%',
  ),
  'USER_RELATIONSHIP' => 
  array (
    'type' => 'multienum',
    'studio' => 'visible',
    'label' => 'LBL_USER_RELATIONSHIP',
    'width' => '10%',
    'default' => true,
  ),
),
);
