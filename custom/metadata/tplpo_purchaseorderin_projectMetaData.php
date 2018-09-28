<?php
// created: 2017-04-02 05:10:57
$dictionary["tplpo_purchaseorderin_project"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'tplpo_purchaseorderin_project' => 
    array (
      'lhs_module' => 'TPLPO_Purchaseorderin',
      'lhs_table' => 'tplpo_purchaseorderin',
      'lhs_key' => 'id',
      'rhs_module' => 'Project',
      'rhs_table' => 'project',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'tplpo_purchaseorderin_project_c',
      'join_key_lhs' => 'tplpo_purchaseorderin_projecttplpo_purchaseorderin_ida',
      'join_key_rhs' => 'tplpo_purchaseorderin_projectproject_idb',
    ),
  ),
  'table' => 'tplpo_purchaseorderin_project_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'tplpo_purchaseorderin_projecttplpo_purchaseorderin_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'tplpo_purchaseorderin_projectproject_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'tplpo_purchaseorderin_projectspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'tplpo_purchaseorderin_project_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'tplpo_purchaseorderin_projecttplpo_purchaseorderin_ida',
        1 => 'tplpo_purchaseorderin_projectproject_idb',
      ),
    ),
  ),
);