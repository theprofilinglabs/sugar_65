<?php
// created: 2017-04-02 13:01:53
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_LIST_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '35%',
    'default' => true,
  ),
  'client_id_c' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_CLIENT_ID',
    'id' => 'ACCOUNT_ID_C',
    'link' => true,
    'width' => '10%',
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Accounts',
    'target_record_key' => 'account_id_c',
  ),
  'purchaseorderno_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_PURCHASEORDERNO',
    'width' => '10%',
  ),
  'assigned_user_name' => 
  array (
    'vname' => 'LBL_LIST_ASSIGNED_USER_ID',
    'widget_class' => 'SubPanelDetailViewLink',
    'module' => 'Users',
    'target_record_key' => 'assigned_user_id',
    'target_module' => 'Users',
    'width' => '15%',
    'sortable' => false,
    'default' => true,
  ),
  'estimated_start_date' => 
  array (
    'vname' => 'LBL_DATE_START',
    'width' => '25%',
    'sortable' => true,
    'default' => true,
  ),
  'estimated_end_date' => 
  array (
    'vname' => 'LBL_DATE_END',
    'width' => '25%',
    'sortable' => true,
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'Project',
    'width' => '3%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'Project',
    'width' => '3%',
    'default' => true,
  ),
);