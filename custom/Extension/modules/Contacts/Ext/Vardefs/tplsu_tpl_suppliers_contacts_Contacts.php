<?php
// created: 2017-04-01 22:27:45
$dictionary["Contact"]["fields"]["tplsu_tpl_suppliers_contacts"] = array (
  'name' => 'tplsu_tpl_suppliers_contacts',
  'type' => 'link',
  'relationship' => 'tplsu_tpl_suppliers_contacts',
  'source' => 'non-db',
  'module' => 'TPLSU_TPL_Suppliers',
  'bean_name' => 'TPLSU_TPL_Suppliers',
  'vname' => 'LBL_TPLSU_TPL_SUPPLIERS_CONTACTS_FROM_TPLSU_TPL_SUPPLIERS_TITLE',
  'id_name' => 'tplsu_tpl_suppliers_contactstplsu_tpl_suppliers_ida',
);
$dictionary["Contact"]["fields"]["tplsu_tpl_suppliers_contacts_name"] = array (
  'name' => 'tplsu_tpl_suppliers_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_TPLSU_TPL_SUPPLIERS_CONTACTS_FROM_TPLSU_TPL_SUPPLIERS_TITLE',
  'save' => true,
  'id_name' => 'tplsu_tpl_suppliers_contactstplsu_tpl_suppliers_ida',
  'link' => 'tplsu_tpl_suppliers_contacts',
  'table' => 'tplsu_tpl_suppliers',
  'module' => 'TPLSU_TPL_Suppliers',
  'rname' => 'name',
);
$dictionary["Contact"]["fields"]["tplsu_tpl_suppliers_contactstplsu_tpl_suppliers_ida"] = array (
  'name' => 'tplsu_tpl_suppliers_contactstplsu_tpl_suppliers_ida',
  'type' => 'link',
  'relationship' => 'tplsu_tpl_suppliers_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_TPLSU_TPL_SUPPLIERS_CONTACTS_FROM_CONTACTS_TITLE',
);
