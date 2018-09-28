<?php
$module_name = 'TPLPO_Purchaseorderin';
$viewdefs [$module_name] = 
array (
  'EditView' => 
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
      ),
      'syncDetailEditViews' => false,
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
            'name' => 'client',
            'studio' => 'visible',
            'label' => 'LBL_CLIENT',
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
        3 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'tele_component',
            'label' => 'LBL_TELE_COMPONENT',
          ),
        ),
        4 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'profiling_component',
            'label' => 'LBL_PROFILING_COMPONENT',
          ),
        ),
        5 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'proj_man_component',
            'label' => 'LBL_PROJ_MAN_COMPONENT',
          ),
        ),
        6 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'other_component',
            'label' => 'LBL_OTHER_COMPONENT',
          ),
        ),
        7 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'purchaseorder',
            'studio' => 'visible',
            'label' => 'LBL_PURCHASEORDER',
          ),
        ),
      ),
    ),
  ),
);
?>
