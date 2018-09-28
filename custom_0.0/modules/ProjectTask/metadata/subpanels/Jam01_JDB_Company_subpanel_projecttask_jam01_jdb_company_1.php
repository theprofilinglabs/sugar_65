<?php
// created: 2015-02-25 13:14:28
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_LIST_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '10%',
    'default' => true,
  ),
  'project_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_PARENT_NAME',
    'id' => 'PROJECT_ID',
    'width' => '15%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Project',
    'target_record_key' => 'project_id',
  ),
  'description' => 
  array (
    'type' => 'text',
    'vname' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '15%',
    'default' => true,
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
);