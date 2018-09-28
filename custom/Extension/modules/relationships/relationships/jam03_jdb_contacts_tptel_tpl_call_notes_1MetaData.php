<?php
// created: 2016-04-12 00:49:45
$dictionary["jam03_jdb_contacts_tptel_tpl_call_notes_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'jam03_jdb_contacts_tptel_tpl_call_notes_1' => 
    array (
      'lhs_module' => 'JAM03_JDB_Contacts',
      'lhs_table' => 'jam03_jdb_contacts',
      'lhs_key' => 'id',
      'rhs_module' => 'TPTEL_TPL_Call_Notes',
      'rhs_table' => 'tptel_tpl_call_notes',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'jam03_jdb_contacts_tptel_tpl_call_notes_1_c',
      'join_key_lhs' => 'jam03_jdb_contacts_tptel_tpl_call_notes_1jam03_jdb_contacts_ida',
      'join_key_rhs' => 'jam03_jdb_7248l_notes_idb',
    ),
  ),
  'table' => 'jam03_jdb_contacts_tptel_tpl_call_notes_1_c',
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
      'name' => 'jam03_jdb_contacts_tptel_tpl_call_notes_1jam03_jdb_contacts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'jam03_jdb_7248l_notes_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'jam03_jdb_contacts_tptel_tpl_call_notes_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'jam03_jdb_contacts_tptel_tpl_call_notes_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'jam03_jdb_contacts_tptel_tpl_call_notes_1jam03_jdb_contacts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'jam03_jdb_contacts_tptel_tpl_call_notes_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'jam03_jdb_7248l_notes_idb',
      ),
    ),
  ),
);