<?php
// created: 2015-02-25 12:19:29
$dictionary["projecttask_jam03_jdb_contacts_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'projecttask_jam03_jdb_contacts_1' => 
    array (
      'lhs_module' => 'ProjectTask',
      'lhs_table' => 'project_task',
      'lhs_key' => 'id',
      'rhs_module' => 'JAM03_JDB_Contacts',
      'rhs_table' => 'jam03_jdb_contacts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'projecttask_jam03_jdb_contacts_1_c',
      'join_key_lhs' => 'projecttask_jam03_jdb_contacts_1projecttask_ida',
      'join_key_rhs' => 'projecttask_jam03_jdb_contacts_1jam03_jdb_contacts_idb',
    ),
  ),
  'table' => 'projecttask_jam03_jdb_contacts_1_c',
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
      'name' => 'projecttask_jam03_jdb_contacts_1projecttask_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'projecttask_jam03_jdb_contacts_1jam03_jdb_contacts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'projecttask_jam03_jdb_contacts_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'projecttask_jam03_jdb_contacts_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'projecttask_jam03_jdb_contacts_1projecttask_ida',
        1 => 'projecttask_jam03_jdb_contacts_1jam03_jdb_contacts_idb',
      ),
    ),
  ),
);