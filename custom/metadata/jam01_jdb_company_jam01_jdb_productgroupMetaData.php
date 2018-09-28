<?php
// created: 2014-05-29 13:35:01
$dictionary["jam01_jdb_company_jam01_jdb_productgroup"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'jam01_jdb_company_jam01_jdb_productgroup' => 
    array (
      'lhs_module' => 'Jam01_JDB_Company',
      'lhs_table' => 'jam01_jdb_company',
      'lhs_key' => 'id',
      'rhs_module' => 'Jam01_JDB_ProductGroup',
      'rhs_table' => 'jam01_jdb_productgroup',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'jam01_jdb_company_jam01_jdb_productgroup_c',
      'join_key_lhs' => 'jam01_jdb_company_jam01_jdb_productgroupjam01_jdb_company_ida',
      'join_key_rhs' => 'jam01_jdb_ecf1ctgroup_idb',
    ),
  ),
  'table' => 'jam01_jdb_company_jam01_jdb_productgroup_c',
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
      'name' => 'jam01_jdb_company_jam01_jdb_productgroupjam01_jdb_company_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'jam01_jdb_ecf1ctgroup_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'jam01_jdb_company_jam01_jdb_productgroupspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'jam01_jdb_company_jam01_jdb_productgroup_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'jam01_jdb_company_jam01_jdb_productgroupjam01_jdb_company_ida',
        1 => 'jam01_jdb_ecf1ctgroup_idb',
      ),
    ),
  ),
);