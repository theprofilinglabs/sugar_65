<?php
$module_name = 'TPTEL_TPL_Call_Notes';
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
            'name' => 'notetype',
            'studio' => 'visible',
            'label' => 'LBL_NOTETYPE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'callnotes',
            'studio' => 'visible',
            'label' => 'LBL_CALLNOTES',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'levelcode',
            'studio' => 'visible',
            'label' => 'LBL_LEVELCODE',
          ),
          1 => 
          array (
            'name' => 'callbackdate',
            'label' => 'LBL_CALLBACKDATE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'extcontactref',
            'label' => 'LBL_EXTCONTACTREF',
          ),
          1 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'jam03_jdb_contacts_tptel_tpl_call_notes_1_name',
          ),
        ),
      ),
    ),
  ),
);
?>
