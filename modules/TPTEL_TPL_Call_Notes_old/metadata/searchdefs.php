<?php
$module_name = 'TPTEL_TPL_Call_Notes';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'notetype' => 
      array (
        'type' => 'enum',
        'default' => true,
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
        'default' => true,
        'name' => 'callnotes',
      ),
      'levelcode' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_LEVELCODE',
        'width' => '10%',
        'name' => 'levelcode',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'notetype' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_NOTETYPE',
        'width' => '10%',
        'name' => 'notetype',
      ),
      'levelcode' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_LEVELCODE',
        'width' => '10%',
        'name' => 'levelcode',
      ),
      'callnotes' => 
      array (
        'type' => 'text',
        'studio' => 'visible',
        'label' => 'LBL_CALLNOTES',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'callnotes',
      ),
      'extcontactref' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_EXTCONTACTREF',
        'width' => '10%',
        'default' => true,
        'name' => 'extcontactref',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
