<?php
$listViewDefs ['Tasks'] = 
array (
  'SET_COMPLETE' => 
  array (
    'width' => '2%',
    'label' => 'LBL_LIST_CLOSE',
    'link' => true,
    'sortable' => false,
    'default' => true,
    'related_fields' => 
    array (
      0 => 'status',
    ),
  ),
  'NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_SUBJECT',
    'link' => true,
    'default' => true,
  ),
  'CLIENTPO_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_CLIENTPO',
    'id' => 'TPLPO_PURCHASEORDERIN_ID1_C',
    'link' => true,
    'width' => '10%',
  ),
  'RESOURCE_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_RESOURCE',
    'id' => 'USER_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '2%',
    'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'USER_RELATIONSHIP_C' => 
  array (
    'type' => 'multienum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_USER_RELATIONSHIP',
    'width' => '10%',
  ),
  'HOURSALLOCATED_C' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_HOURSALLOCATED',
    'width' => '5%',
  ),
  'PERHOURSELLOUT_C' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_PERHOURSELLOUT',
    'currency_format' => true,
    'width' => '10%',
  ),
  'HOURLYRATE_C' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_HOURLYRATE',
    'currency_format' => true,
    'width' => '5%',
  ),
  'PARENT_TYPE' => 
  array (
    'type' => 'parent_type',
    'label' => 'LBL_PARENT_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'PARENT_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_RELATED_TO',
    'dynamic_module' => 'PARENT_TYPE',
    'id' => 'PARENT_ID',
    'link' => true,
    'default' => true,
    'sortable' => false,
    'ACLTag' => 'PARENT',
    'related_fields' => 
    array (
      0 => 'parent_id',
      1 => 'parent_type',
    ),
  ),
  'STATUS' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_STATUS',
    'link' => false,
    'default' => true,
  ),
  'DATE_START' => 
  array (
    'width' => '5%',
    'label' => 'LBL_LIST_START_DATE',
    'link' => false,
    'default' => true,
  ),
  'DATE_DUE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_DUE_DATE',
    'link' => false,
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
  ),
  'CONTACT_NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_CONTACT',
    'link' => true,
    'id' => 'CONTACT_ID',
    'module' => 'Contacts',
    'default' => false,
    'ACLTag' => 'CONTACT',
    'related_fields' => 
    array (
      0 => 'contact_id',
    ),
  ),
  'TIME_DUE' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_DUE_TIME',
    'sortable' => false,
    'link' => false,
    'default' => false,
  ),
);
?>
