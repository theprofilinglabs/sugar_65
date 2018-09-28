<?php
// created: 2017-04-02 05:10:57
$dictionary["tplpo_purchaseorderin_notes"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'tplpo_purchaseorderin_notes' => 
    array (
      'lhs_module' => 'TPLPO_Purchaseorderin',
      'lhs_table' => 'tplpo_purchaseorderin',
      'lhs_key' => 'id',
      'rhs_module' => 'Notes',
      'rhs_table' => 'notes',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'tplpo_purchaseorderin_notes_c',
      'join_key_lhs' => 'tplpo_purchaseorderin_notestplpo_purchaseorderin_ida',
      'join_key_rhs' => 'tplpo_purchaseorderin_notesnotes_idb',
    ),
  ),
  'table' => 'tplpo_purchaseorderin_notes_c',
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
      'name' => 'tplpo_purchaseorderin_notestplpo_purchaseorderin_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'tplpo_purchaseorderin_notesnotes_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'tplpo_purchaseorderin_notesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'tplpo_purchaseorderin_notes_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'tplpo_purchaseorderin_notestplpo_purchaseorderin_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'tplpo_purchaseorderin_notes_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'tplpo_purchaseorderin_notesnotes_idb',
      ),
    ),
  ),
);