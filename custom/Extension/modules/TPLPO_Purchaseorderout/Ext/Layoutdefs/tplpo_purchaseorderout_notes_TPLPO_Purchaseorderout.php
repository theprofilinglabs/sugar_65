<?php
 // created: 2017-04-02 03:52:40
$layout_defs["TPLPO_Purchaseorderout"]["subpanel_setup"]['tplpo_purchaseorderout_notes'] = array (
  'order' => 100,
  'module' => 'Notes',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_TPLPO_PURCHASEORDEROUT_NOTES_FROM_NOTES_TITLE',
  'get_subpanel_data' => 'tplpo_purchaseorderout_notes',
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
