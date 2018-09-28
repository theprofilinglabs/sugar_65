<?php
$viewdefs ['ProjectTask'] = 
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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/ProjectTask/ProjectTask.js',
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
        'LBL_EDITVIEW_PANEL1' => 
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
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'date_start',
          ),
          1 => 
          array (
            'name' => 'date_finish',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'status',
            'customCode' => '<select name="{$fields.status.name}" id="{$fields.status.name}" title="" tabindex="s" onchange="update_percent_complete(this.value);">{if isset($fields.status.value) && $fields.status.value != ""}{html_options options=$fields.status.options selected=$fields.status.value}{else}{html_options options=$fields.status.options selected=$fields.status.default}{/if}</select>',
          ),
          1 => 'priority',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'project_name',
            'label' => 'LBL_PROJECT_NAME',
          ),
          1 => 'assigned_user_name',
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
          0 => 'order_number',
          1 => 
          array (
            'name' => 'kimaiproject_c',
            'label' => 'LBL_KIMAIPROJECT',
          ),
        ),
        6 => 
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
        7 => 
        array (
          0 => 'estimated_effort',
          1 => 
          array (
            'name' => 'actual_effort',
            'label' => 'LBL_ACTUAL_EFFORT',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'project_task_id',
            'label' => 'LBL_TASK_ID',
          ),
          1 => 
          array (
            'name' => 'duration_unit',
            'hideLabel' => true,
            'customCode' => '<input type="hidden" name="duration_unit" id="projectTask_durationUnit" value="Days" />',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'duration',
            'hideLabel' => true,
            'customCode' => '<input type="hidden" name="duration" id="projectTask_duration" value="0" />',
          ),
          1 => 
          array (
            'name' => 'actual_duration',
            'label' => 'LBL_ACTUAL_DURATION',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'percent_complete',
            'customCode' => '<input type="text" name="{$fields.percent_complete.name}" id="{$fields.percent_complete.name}" size="30" value="{$fields.percent_complete.value}" title="" tabindex="0" onChange="update_status(this.value);" /></tr>',
          ),
          1 => 'milestone_flag',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
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
        1 => 
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
      ),
    ),
  ),
);
?>
