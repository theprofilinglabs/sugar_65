<?php
$listViewDefs ['ProjectTask'] = 
array (
  'NAME' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'sortable' => true,
  ),
  'PROJECT_NAME' => 
  array (
    'width' => '25%',
    'label' => 'LBL_PROJECT_NAME',
    'id' => 'PROJECT_ID',
    'link' => true,
    'default' => true,
    'sortable' => true,
    'module' => 'Project',
    'ACLTag' => 'PROJECT',
    'related_fields' => 
    array (
      0 => 'project_id',
    ),
  ),
  'PURCHASEORDERNO_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_PURCHASEORDERNOPT',
    'width' => '10%',
  ),
  'CAMPAIGNID_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_CAMPAIGNID',
    'width' => '10%',
  ),
  'DATE_START' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DATE_START',
    'default' => true,
    'sortable' => true,
  ),
  'DATE_FINISH' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DATE_FINISH',
    'default' => true,
    'sortable' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_ASSIGNED_USER_ID',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'PRIORITY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_PRIORITY',
    'default' => true,
    'sortable' => true,
  ),
  'ACTUAL_EFFORT' => 
  array (
    'type' => 'int',
    'label' => 'LBL_ACTUAL_EFFORT',
    'width' => '10%',
    'default' => false,
  ),
  'KIMAIPROJECT_C' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_KIMAIPROJECT',
    'width' => '10%',
  ),
  'STATUS' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_STATUS',
    'width' => '10%',
    'default' => false,
  ),
  'PERCENT_COMPLETE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_PERCENT_COMPLETE',
    'default' => false,
    'sortable' => true,
  ),
);
?>
