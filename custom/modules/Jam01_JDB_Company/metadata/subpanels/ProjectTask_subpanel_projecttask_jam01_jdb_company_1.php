<?php
// created: 2017-05-26 11:50:42
$subpanel_layout['list_fields'] = array (
  'companyname' => 
  array (
    'type' => 'varchar',
    'link' => true,
    'vname' => 'LBL_COMPANYNAME',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => NULL,
    'target_record_key' => NULL,
  ),
  'postcode' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_POSTCODE',
    'width' => '3%',
    'default' => true,
  ),
  'levelcode' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_LEVELCODE',
    'width' => '5%',
  ),
  'countrycode' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_COUNTRYCODE',
    'width' => '5%',
  ),
  'address6' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_ADDRESS6',
    'width' => '10%',
    'default' => true,
  ),
  'address4' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_ADDRESS4',
    'width' => '10%',
    'default' => true,
  ),
  'telephone' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_TELEPHONE',
    'width' => '5%',
    'default' => true,
  ),
  'industry' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_INDUSTRY',
    'width' => '5%',
  ),
  'totalstaff' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'vname' => 'LBL_TOTALSTAFF',
    'width' => '3%',
    'default' => true,
  ),
  'url' => 
  array (
    'type' => 'url',
    'default' => true,
    'vname' => 'LBL_URL',
    'width' => '5%',
  ),
  'date_modified' => 
  array (
    'type' => 'datetime',
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '5%',
    'default' => true,
  ),
  'modified_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '5%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Users',
    'target_record_key' => 'modified_user_id',
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'Jam01_JDB_Company',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'Jam01_JDB_Company',
    'width' => '5%',
    'default' => true,
  ),
);