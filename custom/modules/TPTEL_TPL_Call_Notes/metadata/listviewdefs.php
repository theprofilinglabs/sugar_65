<?php
$module_name = 'TPTEL_TPL_Call_Notes';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '15%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'LEVELCODE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_LEVELCODE',
    'width' => '10%',
  ),
  'CALLNOTES' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_CALLNOTES',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'CALLBACKDATE' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_CALLBACKDATE',
    'width' => '15%',
    'default' => true,
  ),
  'JAM03_JDB_CONTACTS_TPTEL_TPL_CALL_NOTES_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_JAM03_JDB_CONTACTS_TPTEL_TPL_CALL_NOTES_1_FROM_JAM03_JDB_CONTACTS_TITLE',
    'id' => 'JAM03_JDB_CONTACTS_TPTEL_TPL_CALL_NOTES_1JAM03_JDB_CONTACTS_IDA',
    'width' => '15%',
    'default' => true,
  ),
  'LOADNO' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_LOADNO',
    'width' => '10%',
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
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
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => false,
  ),
  'NOTETYPE' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_NOTETYPE',
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
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
  'EXTCONTACTREF' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EXTCONTACTREF',
    'width' => '10%',
    'default' => false,
  ),
);
?>
