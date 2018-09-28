<?php
$module_name = 'Jam01_JDB_Company';
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
      'useTabs' => true,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL4' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL6' => 
        array (
          'newTab' => true,
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
          0 => 
          array (
            'name' => 'companyname',
            'label' => 'LBL_COMPANYNAME',
          ),
          1 => 
          array (
            'name' => 'levelcode',
            'studio' => 'visible',
            'label' => 'LBL_LEVELCODE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'telephone',
            'label' => 'LBL_TELEPHONE',
          ),
          1 => 
          array (
            'name' => 'url',
            'label' => 'LBL_URL',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'address1',
            'label' => 'LBL_ADDRESS1',
          ),
          1 => 
          array (
            'name' => 'address2',
            'label' => 'LBL_ADDRESS2',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'address3',
            'label' => 'LBL_ADDRESS3',
          ),
          1 => 
          array (
            'name' => 'address4',
            'label' => 'LBL_ADDRESS4',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'address6',
            'label' => 'LBL_ADDRESS6',
          ),
          1 => 
          array (
            'name' => 'postcode',
            'label' => 'LBL_POSTCODE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'address5',
            'label' => 'LBL_ADDRESS5',
          ),
          1 => 
          array (
            'name' => 'countrycode',
            'label' => 'LBL_COUNTRYCODE',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'salesrevenue',
            'label' => 'LBL_SALESREVENUE',
          ),
          1 => 
          array (
            'name' => 'srcurrency',
            'studio' => 'visible',
            'label' => 'LBL_SRCURRENCY',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'ownership',
            'studio' => 'visible',
            'label' => 'LBL_OWNERSHIP',
          ),
          1 => 
          array (
            'name' => 'totalstaff',
            'studio' => 'visible',
            'label' => 'LBL_TOTALSTAFF',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'companyactive',
            'label' => 'LBL_COMPANYACTIVE',
          ),
          1 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'companynote',
            'studio' => 'visible',
            'label' => 'LBL_COMPANYNOTE',
          ),
          1 => 
          array (
            'name' => 'industry',
            'studio' => 'visible',
            'label' => 'LBL_INDUSTRY',
          ),
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'companyoverview',
            'studio' => 'visible',
            'label' => 'LBL_COMPANYOVERVIEW',
          ),
        ),
      ),
      'lbl_editview_panel6' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'externalcrmref',
            'label' => 'LBL_EXTERNALCRMREF',
          ),
          1 => 
          array (
            'name' => 'marketunit',
            'label' => 'LBL_MARKETUNIT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'mastercode',
            'label' => 'LBL_MASTERCODE',
          ),
          1 => 
          array (
            'name' => 'siccode',
            'studio' => 'visible',
            'label' => 'LBL_SICCODE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'extdatasourceref',
            'label' => 'LBL_EXTDATASOURCEREF',
          ),
          1 => 
          array (
            'name' => 'extdatasourcerecid',
            'label' => 'LBL_EXTDATASOURCERECID',
          ),
        ),
      ),
    ),
  ),
);
?>
