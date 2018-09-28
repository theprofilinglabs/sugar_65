<?php
// created: 2017-04-02 03:52:40
$dictionary["Note"]["fields"]["tplpo_purchaseorderout_notes"] = array (
  'name' => 'tplpo_purchaseorderout_notes',
  'type' => 'link',
  'relationship' => 'tplpo_purchaseorderout_notes',
  'source' => 'non-db',
  'module' => 'TPLPO_Purchaseorderout',
  'bean_name' => 'TPLPO_Purchaseorderout',
  'vname' => 'LBL_TPLPO_PURCHASEORDEROUT_NOTES_FROM_TPLPO_PURCHASEORDEROUT_TITLE',
  'id_name' => 'tplpo_purchaseorderout_notestplpo_purchaseorderout_ida',
);
$dictionary["Note"]["fields"]["tplpo_purchaseorderout_notes_name"] = array (
  'name' => 'tplpo_purchaseorderout_notes_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_TPLPO_PURCHASEORDEROUT_NOTES_FROM_TPLPO_PURCHASEORDEROUT_TITLE',
  'save' => true,
  'id_name' => 'tplpo_purchaseorderout_notestplpo_purchaseorderout_ida',
  'link' => 'tplpo_purchaseorderout_notes',
  'table' => 'tplpo_purchaseorderout',
  'module' => 'TPLPO_Purchaseorderout',
  'rname' => 'name',
);
$dictionary["Note"]["fields"]["tplpo_purchaseorderout_notestplpo_purchaseorderout_ida"] = array (
  'name' => 'tplpo_purchaseorderout_notestplpo_purchaseorderout_ida',
  'type' => 'link',
  'relationship' => 'tplpo_purchaseorderout_notes',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_TPLPO_PURCHASEORDEROUT_NOTES_FROM_NOTES_TITLE',
);
