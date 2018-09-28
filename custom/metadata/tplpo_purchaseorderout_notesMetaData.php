<?php
// created: 2017-04-02 03:52:40
$dictionary["tplpo_purchaseorderout_notes"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'tplpo_purchaseorderout_notes' => 
    array (
      'lhs_module' => 'TPLPO_Purchaseorderout',
      'lhs_table' => 'tplpo_purchaseorderout',
      'lhs_key' => 'id',
      'rhs_module' => 'Notes',
      'rhs_table' => 'notes',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'tplpo_purchaseorderout_notes_c',
      'join_key_lhs' => 'tplpo_purchaseorderout_notestplpo_purchaseorderout_ida',
      'join_key_rhs' => 'tplpo_purchaseorderout_notesnotes_idb',
    ),
  ),
  'table' => 'tplpo_purchaseorderout_notes_c',
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
      'name' => 'tplpo_purchaseorderout_notestplpo_purchaseorderout_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'tplpo_purchaseorderout_notesnotes_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'tplpo_purchaseorderout_notesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'tplpo_purchaseorderout_notes_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'tplpo_purchaseorderout_notestplpo_purchaseorderout_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'tplpo_purchaseorderout_notes_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'tplpo_purchaseorderout_notesnotes_idb',
      ),
    ),
  ),
);