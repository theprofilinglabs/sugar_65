<?php
// created: 2017-04-01 22:27:45
$dictionary["tplsu_tpl_suppliers_contacts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'tplsu_tpl_suppliers_contacts' => 
    array (
      'lhs_module' => 'TPLSU_TPL_Suppliers',
      'lhs_table' => 'tplsu_tpl_suppliers',
      'lhs_key' => 'id',
      'rhs_module' => 'Contacts',
      'rhs_table' => 'contacts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'tplsu_tpl_suppliers_contacts_c',
      'join_key_lhs' => 'tplsu_tpl_suppliers_contactstplsu_tpl_suppliers_ida',
      'join_key_rhs' => 'tplsu_tpl_suppliers_contactscontacts_idb',
    ),
  ),
  'table' => 'tplsu_tpl_suppliers_contacts_c',
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
      'name' => 'tplsu_tpl_suppliers_contactstplsu_tpl_suppliers_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'tplsu_tpl_suppliers_contactscontacts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'tplsu_tpl_suppliers_contactsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'tplsu_tpl_suppliers_contacts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'tplsu_tpl_suppliers_contactstplsu_tpl_suppliers_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'tplsu_tpl_suppliers_contacts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'tplsu_tpl_suppliers_contactscontacts_idb',
      ),
    ),
  ),
);