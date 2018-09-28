<?php
// created: 2016-04-12 00:49:45
$dictionary["TPTEL_TPL_Call_Notes"]["fields"]["jam03_jdb_contacts_tptel_tpl_call_notes_1"] = array (
  'name' => 'jam03_jdb_contacts_tptel_tpl_call_notes_1',
  'type' => 'link',
  'relationship' => 'jam03_jdb_contacts_tptel_tpl_call_notes_1',
  'source' => 'non-db',
  'module' => 'JAM03_JDB_Contacts',
  'bean_name' => 'JAM03_JDB_Contacts',
  'vname' => 'LBL_JAM03_JDB_CONTACTS_TPTEL_TPL_CALL_NOTES_1_FROM_JAM03_JDB_CONTACTS_TITLE',
  'id_name' => 'jam03_jdb_contacts_tptel_tpl_call_notes_1jam03_jdb_contacts_ida',
);
$dictionary["TPTEL_TPL_Call_Notes"]["fields"]["jam03_jdb_contacts_tptel_tpl_call_notes_1_name"] = array (
  'name' => 'jam03_jdb_contacts_tptel_tpl_call_notes_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_JAM03_JDB_CONTACTS_TPTEL_TPL_CALL_NOTES_1_FROM_JAM03_JDB_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'jam03_jdb_contacts_tptel_tpl_call_notes_1jam03_jdb_contacts_ida',
  'link' => 'jam03_jdb_contacts_tptel_tpl_call_notes_1',
  'table' => 'jam03_jdb_contacts',
  'module' => 'JAM03_JDB_Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["TPTEL_TPL_Call_Notes"]["fields"]["jam03_jdb_contacts_tptel_tpl_call_notes_1jam03_jdb_contacts_ida"] = array (
  'name' => 'jam03_jdb_contacts_tptel_tpl_call_notes_1jam03_jdb_contacts_ida',
  'type' => 'link',
  'relationship' => 'jam03_jdb_contacts_tptel_tpl_call_notes_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_JAM03_JDB_CONTACTS_TPTEL_TPL_CALL_NOTES_1_FROM_TPTEL_TPL_CALL_NOTES_TITLE',
);
