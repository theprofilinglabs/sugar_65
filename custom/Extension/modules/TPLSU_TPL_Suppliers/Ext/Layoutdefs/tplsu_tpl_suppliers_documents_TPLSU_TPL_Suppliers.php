<?php
 // created: 2017-04-01 22:27:45
$layout_defs["TPLSU_TPL_Suppliers"]["subpanel_setup"]['tplsu_tpl_suppliers_documents'] = array (
  'order' => 100,
  'module' => 'Documents',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_TPLSU_TPL_SUPPLIERS_DOCUMENTS_FROM_DOCUMENTS_TITLE',
  'get_subpanel_data' => 'tplsu_tpl_suppliers_documents',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
