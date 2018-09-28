<?php
// created: 2016-08-18 12:41:01
$subpanel_layout['list_fields'] = array (
  'notetype' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_NOTETYPE',
    'width' => '10%',
  ),
  'levelcode' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_LEVELCODE',
    'width' => '10%',
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'vname' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'callnotes' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'vname' => 'LBL_CALLNOTES',
    'sortable' => false,
    'width' => '50%',
    'default' => true,
  ),
  'callbackdate' => 
  array (
    'type' => 'datetimecombo',
    'vname' => 'LBL_CALLBACKDATE',
    'width' => '10%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'TPTEL_TPL_Call_Notes',
    'width' => '5%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'TPTEL_TPL_Call_Notes',
    'width' => '4%',
    'default' => true,
  ),
);