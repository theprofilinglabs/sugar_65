<?php
// created: 2016-05-26 14:16:43
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_LIST_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '20%',
    'default' => true,
  ),
  'project_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_PARENT_NAME',
    'id' => 'PROJECT_ID',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Project',
    'target_record_key' => 'project_id',
  ),
  'purchaseorderno_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_PURCHASEORDERNOPT',
    'width' => '10%',
  ),
  'campaignid_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_CAMPAIGNID',
    'width' => '10%',
  ),
  'date_start' => 
  array (
    'vname' => 'LBL_DATE_START',
    'width' => '15%',
    'default' => true,
  ),
  'assigned_user_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_ASSIGNED_USER_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Users',
    'target_record_key' => 'assigned_user_id',
  ),
  'kimaiproject_c' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_KIMAIPROJECT',
    'width' => '10%',
  ),
  'date_finish' => 
  array (
    'vname' => 'LBL_DATE_FINISH',
    'width' => '15%',
    'default' => true,
  ),
);