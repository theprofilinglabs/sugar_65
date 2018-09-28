<?php
// created: 2017-04-01 22:27:45
$dictionary["Document"]["fields"]["tplsu_tpl_suppliers_documents"] = array (
  'name' => 'tplsu_tpl_suppliers_documents',
  'type' => 'link',
  'relationship' => 'tplsu_tpl_suppliers_documents',
  'source' => 'non-db',
  'module' => 'TPLSU_TPL_Suppliers',
  'bean_name' => 'TPLSU_TPL_Suppliers',
  'vname' => 'LBL_TPLSU_TPL_SUPPLIERS_DOCUMENTS_FROM_TPLSU_TPL_SUPPLIERS_TITLE',
  'id_name' => 'tplsu_tpl_suppliers_documentstplsu_tpl_suppliers_ida',
);
$dictionary["Document"]["fields"]["tplsu_tpl_suppliers_documents_name"] = array (
  'name' => 'tplsu_tpl_suppliers_documents_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_TPLSU_TPL_SUPPLIERS_DOCUMENTS_FROM_TPLSU_TPL_SUPPLIERS_TITLE',
  'save' => true,
  'id_name' => 'tplsu_tpl_suppliers_documentstplsu_tpl_suppliers_ida',
  'link' => 'tplsu_tpl_suppliers_documents',
  'table' => 'tplsu_tpl_suppliers',
  'module' => 'TPLSU_TPL_Suppliers',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["tplsu_tpl_suppliers_documentstplsu_tpl_suppliers_ida"] = array (
  'name' => 'tplsu_tpl_suppliers_documentstplsu_tpl_suppliers_ida',
  'type' => 'link',
  'relationship' => 'tplsu_tpl_suppliers_documents',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_TPLSU_TPL_SUPPLIERS_DOCUMENTS_FROM_DOCUMENTS_TITLE',
);
