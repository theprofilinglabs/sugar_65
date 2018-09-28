<?php
$popupMeta = array (
    'moduleMain' => 'JAM03_JDB_Contacts',
    'varName' => 'JAM03_JDB_Contacts',
    'orderBy' => 'jam03_jdb_contacts.first_name, jam03_jdb_contacts.last_name',
    'whereClauses' => array (
  'full_name' => 'jam03_jdb_contacts.full_name',
  'levelcode' => 'jam03_jdb_contacts.levelcode',
  'title' => 'jam03_jdb_contacts.title',
  'alt_address_street' => 'jam03_jdb_contacts.alt_address_street',
  'email' => 'jam03_jdb_contacts.email',
),
    'searchInputs' => array (
  2 => 'full_name',
  3 => 'levelcode',
  4 => 'title',
  5 => 'alt_address_street',
  6 => 'email',
),
    'searchdefs' => array (
  'full_name' => 
  array (
    'type' => 'fullname',
    'studio' => 
    array (
      'listview' => false,
    ),
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'full_name',
  ),
  'levelcode' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_LEVELCODE',
    'width' => '10%',
    'name' => 'levelcode',
  ),
  'title' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TITLE',
    'width' => '10%',
    'name' => 'title',
  ),
  'alt_address_street' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ALT_ADDRESS_STREET',
    'width' => '10%',
    'name' => 'alt_address_street',
  ),
  'email' => 
  array (
    'name' => 'email',
    'width' => '10%',
  ),
),
);
