<?php
// created: 2017-08-23 01:54:53
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_LIST_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '20%',
    'default' => true,
  ),
  'purchaseorderno_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_PURCHASEORDERNOPT',
    'width' => '10%',
  ),
  'status' => 
  array (
    'type' => 'enum',
    'vname' => 'LBL_STATUS',
    'width' => '10%',
    'default' => true,
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
  'date_finish' => 
  array (
    'vname' => 'LBL_DATE_FINISH',
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
  'teleagent1_id' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_TELEAGENT1_ID',
    'id' => 'USER_ID_C',
    'link' => true,
    'width' => '10%',
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Users',
    'target_record_key' => 'user_id_c',
  ),
  'level5contactemail' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_LEVEL5CONTACTEMAIL',
    'width' => '10%',
  ),
  'level7contactemail' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_LEVEL7CONTACTEMAIL',
    'width' => '10%',
  ),
);