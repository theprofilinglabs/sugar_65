<?php
// created: 2014-05-23 16:22:19
$dictionary["projecttask_jam01_jdb_company_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'projecttask_jam01_jdb_company_1' => 
    array (
      'lhs_module' => 'ProjectTask',
      'lhs_table' => 'project_task',
      'lhs_key' => 'id',
      'rhs_module' => 'Jam01_JDB_Company',
      'rhs_table' => 'jam01_jdb_company',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'projecttask_jam01_jdb_company_1_c',
      'join_key_lhs' => 'projecttask_jam01_jdb_company_1projecttask_ida',
      'join_key_rhs' => 'projecttask_jam01_jdb_company_1jam01_jdb_company_idb',
    ),
  ),
  'table' => 'projecttask_jam01_jdb_company_1_c',
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
      'name' => 'projecttask_jam01_jdb_company_1projecttask_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'projecttask_jam01_jdb_company_1jam01_jdb_company_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'projecttask_jam01_jdb_company_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'projecttask_jam01_jdb_company_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'projecttask_jam01_jdb_company_1projecttask_ida',
        1 => 'projecttask_jam01_jdb_company_1jam01_jdb_company_idb',
      ),
    ),
  ),
);