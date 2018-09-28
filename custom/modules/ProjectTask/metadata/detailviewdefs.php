<?php
$viewdefs ['ProjectTask'] = 
array (
  'DetailView' => 
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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/ProjectTask/ProjectTask.js',
        ),
      ),
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
        ),
        'hideAudit' => true,
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
          0 => 'date_start',
          1 => 'date_finish',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'project_name',
            'customCode' => '<a href="index.php?module=Project&action=DetailView&record={$fields.project_id.value}">{$fields.project_name.value}&nbsp;</a>',
            'label' => 'LBL_PARENT_ID',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 'status',
          1 => 'priority',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'description',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'purchaseorderno_c',
            'label' => 'LBL_PURCHASEORDERNOPT',
          ),
          1 => 
          array (
            'name' => 'campaignid_c',
            'label' => 'LBL_CAMPAIGNID',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'duration',
            'label' => 'LBL_DURATION',
          ),
          1 => 
          array (
            'name' => 'actual_duration',
            'label' => 'LBL_ACTUAL_DURATION',
          ),
        ),
        7 => 
        array (
          0 => 'percent_complete',
          1 => 
          array (
            'name' => 'milestone_flag',
            'label' => 'LBL_MILESTONE_FLAG',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'teleagent1_id',
            'studio' => 'visible',
            'label' => 'LBL_TELEAGENT1_ID',
          ),
          1 => 
          array (
            'name' => 'teleagent2_id',
            'studio' => 'visible',
            'label' => 'LBL_TELEAGENT2_ID',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'level5contactemail',
            'label' => 'LBL_LEVEL5CONTACTEMAIL',
          ),
          1 => 
          array (
            'name' => 'level7contactemail',
            'label' => 'LBL_LEVEL7CONTACTEMAIL',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
          1 => 
          array (
            'name' => 'date_entered',
            'label' => 'LBL_DATE_ENTERED',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
      ),
    ),
  ),
);
?>
