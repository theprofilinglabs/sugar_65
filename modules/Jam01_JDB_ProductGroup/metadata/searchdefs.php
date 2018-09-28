<?php
$module_name = 'Jam01_JDB_ProductGroup';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'product' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PRODUCT',
        'width' => '10%',
        'default' => true,
        'name' => 'product',
      ),
      'description' => 
      array (
        'type' => 'text',
        'studio' => 'visible',
        'label' => 'LBL_DESCRIPTION',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'description',
      ),
    ),
    'advanced_search' => 
    array (
      'product' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PRODUCT',
        'width' => '10%',
        'default' => true,
        'name' => 'product',
      ),
      'description' => 
      array (
        'type' => 'text',
        'studio' => 'visible',
        'label' => 'LBL_DESCRIPTION',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'description',
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
