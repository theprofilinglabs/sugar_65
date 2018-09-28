<?php
// created: 2017-04-02 05:29:18
$subpanel_layout['list_fields'] = array (
  'full_name' => 
  array (
    'vname' => 'LBL_LIST_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'module' => 'Users',
    'width' => '25%',
    'default' => true,
  ),
  'title' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_TITLE',
    'width' => '10%',
    'default' => true,
  ),
  'phone_mobile' => 
  array (
    'type' => 'phone',
    'vname' => 'LBL_MOBILE_PHONE',
    'width' => '10%',
    'default' => true,
  ),
  'status' => 
  array (
    'type' => 'enum',
    'vname' => 'LBL_STATUS',
    'width' => '10%',
    'default' => true,
  ),
  'employee_status' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_EMPLOYEE_STATUS',
    'width' => '10%',
    'default' => true,
  ),
  'phone_home' => 
  array (
    'type' => 'phone',
    'vname' => 'LBL_HOME_PHONE',
    'width' => '10%',
    'default' => true,
  ),
  'email1' => 
  array (
    'vname' => 'LBL_LIST_EMAIL',
    'width' => '25%',
    'default' => true,
  ),
  'phone_work' => 
  array (
    'vname' => 'LBL_LIST_PHONE',
    'width' => '21%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'Users',
    'width' => '4%',
    'linked_field' => 'users',
    'default' => true,
  ),
  'first_name' => 
  array (
    'usage' => 'query_only',
  ),
  'last_name' => 
  array (
    'usage' => 'query_only',
  ),
);