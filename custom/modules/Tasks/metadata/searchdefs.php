<?php
$searchdefs ['Tasks'] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'clientpo_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CLIENTPO',
        'link' => true,
        'width' => '10%',
        'id' => 'TPLPO_PURCHASEORDERIN_ID1_C',
        'name' => 'clientpo_c',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'open_only' => 
      array (
        'name' => 'open_only',
        'label' => 'LBL_OPEN_ITEMS',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'clientpo_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CLIENTPO',
        'id' => 'TPLPO_PURCHASEORDERIN_ID1_C',
        'link' => true,
        'width' => '10%',
        'name' => 'clientpo_c',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'status' => 
      array (
        'name' => 'status',
        'default' => true,
        'width' => '10%',
      ),
      'open_only' => 
      array (
        'label' => 'LBL_OPEN_ITEMS',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
        'name' => 'open_only',
      ),
      'parent_type' => 
      array (
        'type' => 'parent_type',
        'label' => 'LBL_PARENT_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'parent_type',
      ),
      'parent_name' => 
      array (
        'type' => 'parent',
        'label' => 'LBL_LIST_RELATED_TO',
        'width' => '10%',
        'default' => true,
        'name' => 'parent_name',
      ),
      'user_relationship_c' => 
      array (
        'type' => 'multienum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_USER_RELATIONSHIP',
        'width' => '10%',
        'name' => 'user_relationship_c',
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
      'hourlyrate_c' => 
      array (
        'type' => 'currency',
        'default' => true,
        'label' => 'LBL_HOURLYRATE',
        'currency_format' => true,
        'width' => '10%',
        'name' => 'hourlyrate_c',
      ),
      'hoursallocated_c' => 
      array (
        'type' => 'int',
        'default' => true,
        'label' => 'LBL_HOURSALLOCATED',
        'width' => '10%',
        'name' => 'hoursallocated_c',
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
