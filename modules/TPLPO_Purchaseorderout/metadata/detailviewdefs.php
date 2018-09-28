<?php
$module_name = 'TPLPO_Purchaseorderout';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'collapsed',
        ),
      ),
      'syncDetailEditViews' => true,
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
            'name' => 'po_value',
            'label' => 'LBL_PO_VALUE',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'tele_component',
            'label' => 'LBL_TELE_COMPONENT',
          ),
          1 => 
          array (
            'name' => 'tele_allocated',
            'label' => 'LBL_TELE_ALLOCATED',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'profiling_component',
            'label' => 'LBL_PROFILING_COMPONENT',
          ),
          1 => 
          array (
            'name' => 'profiling_allocated',
            'label' => 'LBL_PROFILING_ALLOCATED',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'proj_man_component',
            'label' => 'LBL_PROJ_MAN_COMPONENT',
          ),
          1 => 
          array (
            'name' => 'proj_man_allocated',
            'label' => 'LBL_PROJ_MAN_ALLOCATED',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'other_component',
            'label' => 'LBL_OTHER_COMPONENT',
          ),
          1 => 
          array (
            'name' => 'other_allocated',
            'label' => 'LBL_OTHER_ALLOCATED',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'po_total',
            'label' => 'LBL_PO_TOTAL',
          ),
          1 => 
          array (
            'name' => 'po_total_allocated',
            'label' => 'LBL_PO_TOTAL_ALLOCATED',
          ),
        ),
        8 => 
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
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
          1 => 'date_entered',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
          1 => 'date_modified',
        ),
      ),
    ),
  ),
);
?>
