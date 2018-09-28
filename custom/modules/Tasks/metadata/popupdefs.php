<?php
$popupMeta = array (
    'moduleMain' => 'Tasks',
    'varName' => 'Task',
    'orderBy' => 'tasks.name',
    'whereClauses' => array (
  'name' => 'tasks.name',
),
    'searchInputs' => array (
  0 => 'tasks_number',
  1 => 'name',
  2 => 'priority',
  3 => 'status',
),
    'listviewdefs' => array (
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
    'name' => 'set_complete',
  ),
  'NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_SUBJECT',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '2%',
    'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
  'USER_RELATIONSHIP_C' => 
  array (
    'type' => 'multienum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_USER_RELATIONSHIP',
    'width' => '10%',
    'name' => 'user_relationship_c',
  ),
  'HOURSALLOCATED_C' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_HOURSALLOCATED',
    'width' => '5%',
    'name' => 'hoursallocated_c',
  ),
  'HOURLYRATE_C' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_HOURLYRATE',
    'currency_format' => true,
    'width' => '5%',
    'name' => 'hourlyrate_c',
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
    'name' => 'parent_name',
  ),
  'STATUS' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_STATUS',
    'link' => false,
    'default' => true,
    'name' => 'status',
  ),
  'DATE_START' => 
  array (
    'width' => '5%',
    'label' => 'LBL_LIST_START_DATE',
    'link' => false,
    'default' => true,
    'name' => 'date_start',
  ),
  'DATE_DUE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_DUE_DATE',
    'link' => false,
    'default' => true,
    'name' => 'date_due',
  ),
  'DATE_ENTERED' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
  ),
),
);
