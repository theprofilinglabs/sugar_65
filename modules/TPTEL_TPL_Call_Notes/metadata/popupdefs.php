<?php
$popupMeta = array (
    'moduleMain' => 'TPTEL_TPL_Call_Notes',
    'varName' => 'TPTEL_TPL_Call_Notes',
    'orderBy' => 'tptel_tpl_call_notes.name',
    'whereClauses' => array (
  'name' => 'tptel_tpl_call_notes.name',
  'levelcode' => 'tptel_tpl_call_notes.levelcode',
  'notetype' => 'tptel_tpl_call_notes.notetype',
  'callnotes' => 'tptel_tpl_call_notes.callnotes',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'levelcode',
  5 => 'notetype',
  6 => 'callnotes',
),
    'searchdefs' => array (
  'levelcode' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_LEVELCODE',
    'width' => '10%',
    'name' => 'levelcode',
  ),
  'notetype' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_NOTETYPE',
    'width' => '10%',
    'name' => 'notetype',
  ),
  'callnotes' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_CALLNOTES',
    'sortable' => false,
    'width' => '10%',
    'name' => 'callnotes',
  ),
  'name' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'name',
  ),
),
    'listviewdefs' => array (
  'CALLBACKDATE' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_CALLBACKDATE',
    'width' => '10%',
    'default' => true,
  ),
  'LEVELCODE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_LEVELCODE',
    'width' => '10%',
  ),
  'NAME' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'NOTETYPE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_NOTETYPE',
    'width' => '10%',
  ),
),
);
