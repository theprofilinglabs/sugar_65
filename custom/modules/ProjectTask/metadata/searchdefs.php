<?php
$searchdefs ['ProjectTask'] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 'name',
      1 => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
      ),
    ),
    'advanced_search' => 
    array (
      'current_user_only' => 
      array (
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'width' => '10%',
        'default' => true,
        'name' => 'current_user_only',
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'project_name' => 
      array (
        'name' => 'project_name',
        'label' => 'LBL_PROJECT_NAME',
        'default' => true,
        'width' => '10%',
      ),
      'purchaseorderno_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_PURCHASEORDERNOPT',
        'width' => '10%',
        'name' => 'purchaseorderno_c',
      ),
      'campaignid_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_CAMPAIGNID',
        'width' => '10%',
        'name' => 'campaignid_c',
      ),
      'status' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_STATUS',
        'width' => '10%',
        'default' => true,
        'name' => 'status',
      ),
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'type' => 'enum',
        'label' => 'LBL_ASSIGNED_TO',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
      'teleagent1_id' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_TELEAGENT1_ID',
        'id' => 'USER_ID_C',
        'link' => true,
        'width' => '10%',
        'name' => 'teleagent1_id',
      ),
      'teleagent2_id' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_TELEAGENT2_ID',
        'id' => 'USER_ID1_C',
        'link' => true,
        'width' => '10%',
        'name' => 'teleagent2_id',
      ),
      'level5contactemail' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_LEVEL5CONTACTEMAIL',
        'width' => '10%',
        'name' => 'level5contactemail',
      ),
      'level7contactemail' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_LEVEL7CONTACTEMAIL',
        'width' => '10%',
        'name' => 'level7contactemail',
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
