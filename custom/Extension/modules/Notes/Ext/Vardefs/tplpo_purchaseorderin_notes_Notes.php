<?php
// created: 2017-04-02 05:10:57
$dictionary["Note"]["fields"]["tplpo_purchaseorderin_notes"] = array (
  'name' => 'tplpo_purchaseorderin_notes',
  'type' => 'link',
  'relationship' => 'tplpo_purchaseorderin_notes',
  'source' => 'non-db',
  'module' => 'TPLPO_Purchaseorderin',
  'bean_name' => 'TPLPO_Purchaseorderin',
  'vname' => 'LBL_TPLPO_PURCHASEORDERIN_NOTES_FROM_TPLPO_PURCHASEORDERIN_TITLE',
  'id_name' => 'tplpo_purchaseorderin_notestplpo_purchaseorderin_ida',
);
$dictionary["Note"]["fields"]["tplpo_purchaseorderin_notes_name"] = array (
  'name' => 'tplpo_purchaseorderin_notes_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_TPLPO_PURCHASEORDERIN_NOTES_FROM_TPLPO_PURCHASEORDERIN_TITLE',
  'save' => true,
  'id_name' => 'tplpo_purchaseorderin_notestplpo_purchaseorderin_ida',
  'link' => 'tplpo_purchaseorderin_notes',
  'table' => 'tplpo_purchaseorderin',
  'module' => 'TPLPO_Purchaseorderin',
  'rname' => 'name',
);
$dictionary["Note"]["fields"]["tplpo_purchaseorderin_notestplpo_purchaseorderin_ida"] = array (
  'name' => 'tplpo_purchaseorderin_notestplpo_purchaseorderin_ida',
  'type' => 'link',
  'relationship' => 'tplpo_purchaseorderin_notes',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_TPLPO_PURCHASEORDERIN_NOTES_FROM_NOTES_TITLE',
);
