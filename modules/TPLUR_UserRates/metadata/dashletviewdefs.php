<?php
$dashletData['TPLUR_UserRatesDashlet']['searchFields'] = array (
  'recordactive' => 
  array (
    'default' => '',
  ),
  'date_entered' => 
  array (
    'default' => '',
  ),
  'user_relationship' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'default' => '',
  ),
  'searchfields' => 
  array (
    'default' => '',
  ),
);
$dashletData['TPLUR_UserRatesDashlet']['columns'] = array (
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => true,
  ),
  'user_relationship' => 
  array (
    'type' => 'multienum',
    'studio' => 'visible',
    'label' => 'LBL_USER_RELATIONSHIP',
    'width' => '10%',
    'default' => true,
    'name' => 'user_relationship',
  ),
  'hourlyrate' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_HOURLYRATE',
    'currency_format' => true,
    'width' => '10%',
    'name' => 'hourlyrate',
  ),
  'perhoursellout' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_PERHOURSELLOUT',
    'currency_format' => true,
    'width' => '10%',
    'name' => 'perhoursellout',
  ),
  'currency_id' => 
  array (
    'type' => 'currency_id',
    'studio' => 'visible',
    'label' => 'LBL_CURRENCY',
    'width' => '10%',
    'default' => true,
    'name' => 'currency_id',
  ),
  'columns' => 
  array (
    'name' => 
    array (
      'width' => '40',
      'label' => 'LBL_LIST_NAME',
      'link' => true,
      'default' => true,
    ),
    'date_entered' => 
    array (
      'width' => '15',
      'label' => 'LBL_DATE_ENTERED',
      'default' => true,
    ),
    'date_modified' => 
    array (
      'width' => '15',
      'label' => 'LBL_DATE_MODIFIED',
    ),
    'created_by' => 
    array (
      'width' => '8',
      'label' => 'LBL_CREATED',
    ),
    'assigned_user_name' => 
    array (
      'width' => '8',
      'label' => 'LBL_LIST_ASSIGNED_USER',
    ),
    'width' => '10%',
    'default' => true,
  ),
  'created_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => false,
    'name' => 'created_by_name',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'searchfields' => 
  array (
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
    'width' => '10%',
    'default' => false,
    'name' => 'searchfields',
  ),
  'description' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
    'name' => 'description',
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
  ),
  'assigned_user_id' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ASSIGNED_TO_ID',
    'id' => 'ASSIGNED_USER_ID',
    'link' => true,
    'width' => '10%',
    'default' => false,
    'name' => 'assigned_user_id',
  ),
  'modified_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => false,
    'name' => 'modified_by_name',
  ),
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => false,
    'name' => 'name',
  ),
  'recordactive' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_RECORDACTIVE',
    'width' => '10%',
    'name' => 'recordactive',
  ),
);
