<?php
 // created: 2014-05-22 19:01:27
$layout_defs["Jam01_JDB_Company"]["subpanel_setup"]['jam01_jdb_company_jam01_jdb_productgroup'] = array (
  'order' => 400,
  'module' => 'Jam01_JDB_ProductGroup',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_JAM01_JDB_COMPANY_JAM01_JDB_PRODUCTGROUP_FROM_JAM01_JDB_PRODUCTGROUP_TITLE',
  'get_subpanel_data' => 'jam01_jdb_company_jam01_jdb_productgroup',
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
