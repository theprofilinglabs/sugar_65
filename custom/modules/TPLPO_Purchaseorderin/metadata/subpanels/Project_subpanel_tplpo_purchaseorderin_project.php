<?php
// created: 2017-04-02 05:20:19
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '15%',
    'default' => true,
  ),
  'po_value' => 
  array (
    'type' => 'currency',
    'default' => true,
    'vname' => 'LBL_PO_VALUE',
    'currency_format' => true,
    'width' => '10%',
  ),
  'po_total_allocated' => 
  array (
    'type' => 'currency',
    'default' => true,
    'vname' => 'LBL_PO_TOTAL_ALLOCATED',
    'currency_format' => true,
    'width' => '10%',
  ),
  'purchaseorder' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'vname' => 'LBL_PURCHASEORDER',
    'id' => 'DOCUMENT_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Documents',
    'target_record_key' => 'document_id_c',
  ),
  'client' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'vname' => 'LBL_CLIENT',
    'id' => 'ACCOUNT_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Accounts',
    'target_record_key' => 'account_id_c',
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '45%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'TPLPO_Purchaseorderin',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'TPLPO_Purchaseorderin',
    'width' => '5%',
    'default' => true,
  ),
);