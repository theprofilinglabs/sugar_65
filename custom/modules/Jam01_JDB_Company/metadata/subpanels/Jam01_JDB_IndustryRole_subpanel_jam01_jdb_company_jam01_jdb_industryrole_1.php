<?php
// created: 2016-05-11 16:10:38
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
    'width' => '10%',
    'default' => true,
  ),
  'url' => 
  array (
    'type' => 'url',
    'vname' => 'LBL_URL',
    'width' => '10%',
    'default' => true,
  ),
  'address5' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_ADDRESS5',
    'width' => '10%',
    'default' => true,
  ),
  'totalstaff' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'vname' => 'LBL_TOTALSTAFF',
    'width' => '10%',
    'default' => true,
  ),
  'salesrevenue' => 
  array (
    'type' => 'decimal',
    'vname' => 'LBL_SALESREVENUE',
    'width' => '10%',
    'default' => true,
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