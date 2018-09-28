<?php
$module_name = 'TPLPO_Purchaseorderout';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_QUICKCREATE_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'collapsed',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'supplier',
            'studio' => 'visible',
            'label' => 'LBL_SUPPLIER',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'po_start_date',
            'label' => 'LBL_PO_START_DATE',
          ),
          1 => 
          array (
            'name' => 'po_end_date',
            'label' => 'LBL_PO_END_DATE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'currency_id',
            'studio' => 'visible',
            'label' => 'LBL_CURRENCY',
          ),
          1 => 
          array (
            'name' => 'po_value',
            'label' => 'LBL_PO_VALUE',
          ),
        ),
      ),
      'lbl_quickcreate_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'tele_component',
            'label' => 'LBL_TELE_COMPONENT',
          ),
          1 => 
          array (
            'name' => 'profiling_component',
            'label' => 'LBL_PROFILING_COMPONENT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'proj_man_component',
            'label' => 'LBL_PROJ_MAN_COMPONENT',
          ),
          1 => 
          array (
            'name' => 'other_component',
            'label' => 'LBL_OTHER_COMPONENT',
          ),
        ),
      ),
    ),
  ),
);
?>
