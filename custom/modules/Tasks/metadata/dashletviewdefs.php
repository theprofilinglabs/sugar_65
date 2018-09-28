<?php
$dashletData['TasksDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'priority' => 
  array (
    'default' => '',
  ),
  'status' => 
  array (
    'default' => '',
  ),
  'date_entered' => 
  array (
    'default' => '',
  ),
  'user_relationship_c' => 
  array (
    'default' => '',
  ),
  'date_start' => 
  array (
    'default' => '',
  ),
  'date_due' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'default' => '',
  ),
);
$dashletData['TasksDashlet']['columns'] = array (
  'set_complete' => 
  array (
    'width' => '1%',
    'label' => 'LBL_LIST_CLOSE',
    'default' => true,
    'sortable' => false,
    'name' => 'set_complete',
  ),
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_SUBJECT',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'parent_name' => 
  array (
    'width' => '30%',
    'label' => 'LBL_LIST_RELATED_TO',
    'sortable' => false,
    'dynamic_module' => 'PARENT_TYPE',
    'link' => true,
    'id' => 'PARENT_ID',
    'ACLTag' => 'PARENT',
    'related_fields' => 
    array (
      0 => 'parent_id',
      1 => 'parent_type',
    ),
    'default' => true,
    'name' => 'parent_name',
  ),
  'status' => 
  array (
    'width' => '8%',
    'label' => 'LBL_STATUS',
    'default' => true,
    'name' => 'status',
  ),
  'user_relationship_c' => 
  array (
    'type' => 'multienum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_USER_RELATIONSHIP',
    'width' => '10%',
    'name' => 'user_relationship_c',
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => true,
  ),
  'time_start' => 
  array (
    'width' => '15%',
    'label' => 'LBL_START_TIME',
    'default' => false,
    'name' => 'time_start',
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'name' => 'date_entered',
    'default' => false,
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'Created by',
    'sortable' => false,
    'name' => 'created_by',
    'default' => false,
  ),
  'priority' => 
  array (
    'width' => '10%',
    'label' => 'LBL_PRIORITY',
    'default' => false,
    'name' => 'priority',
  ),
  'contact_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_CONTACT',
    'link' => true,
    'id' => 'CONTACT_ID',
    'module' => 'Contacts',
    'ACLTag' => 'CONTACT',
    'related_fields' => 
    array (
      0 => 'contact_id',
    ),
    'name' => 'contact_name',
    'default' => false,
  ),
  'date_start' => 
  array (
    'width' => '15%',
    'label' => 'LBL_START_DATE',
    'default' => false,
    'name' => 'date_start',
  ),
  'date_due' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DUE_DATE',
    'default' => false,
    'name' => 'date_due',
  ),
);
