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
  'STATUS' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_STATUS',
    'width' => '10%',
    'default' => true,
  ),
  'CAMPAIGNID_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_CAMPAIGNID',
    'width' => '10%',
  ),
  'PURCHASEORDERNO_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_PURCHASEORDERNOPT',
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_ASSIGNED_USER_ID',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => false,
  ),
  'PRIORITY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_PRIORITY',
    'default' => false,
    'sortable' => true,
  ),
  'TELEAGENT1_ID' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_TELEAGENT1_ID',
    'id' => 'USER_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'LEVEL5CONTACTEMAIL' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_LEVEL5CONTACTEMAIL',
    'width' => '10%',
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => false,
  ),
  'TELEAGENT2_ID' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_TELEAGENT2_ID',
    'id' => 'USER_ID1_C',
    'link' => true,
    'width' => '10%',
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => false,
  ),
  'LEVEL7CONTACTEMAIL' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_LEVEL7CONTACTEMAIL',
    'width' => '10%',
  ),
);
?>
