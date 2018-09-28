<?php
$module_name = 'TPTEL_TPL_Call_Notes';
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
        'LBL_EDITVIEW_PANEL2' => 
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
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
          1 => 
          array (
            'name' => 'loadno',
            'label' => 'LBL_LOADNO',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'extcontactref',
            'label' => 'LBL_EXTCONTACTREF',
          ),
          1 => 
          array (
            'name' => 'jam03_jdb_contacts_tptel_tpl_call_notes_1_name',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 'date_entered',
          1 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
        ),
      ),
    ),
  ),
);
?>
