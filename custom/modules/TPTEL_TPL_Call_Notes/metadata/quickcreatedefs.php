<?php
$module_name = 'TPTEL_TPL_Call_Notes';
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
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'notetype',
            'studio' => 'visible',
            'label' => 'LBL_NOTETYPE',
          ),
          1 => 
          array (
            'name' => 'levelcode',
            'studio' => 'visible',
            'label' => 'LBL_LEVELCODE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'callnotes',
            'studio' => 'visible',
            'label' => 'LBL_CALLNOTES',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'callbackdate',
            'label' => 'LBL_CALLBACKDATE',
          ),
          1 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
    ),
  ),
);
?>
