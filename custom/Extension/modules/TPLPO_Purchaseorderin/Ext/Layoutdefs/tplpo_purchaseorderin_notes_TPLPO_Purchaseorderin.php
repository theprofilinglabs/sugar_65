<?php
 // created: 2017-04-02 05:10:57
$layout_defs["TPLPO_Purchaseorderin"]["subpanel_setup"]['tplpo_purchaseorderin_notes'] = array (
  'order' => 100,
  'module' => 'Notes',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_TPLPO_PURCHASEORDERIN_NOTES_FROM_NOTES_TITLE',
  'get_subpanel_data' => 'tplpo_purchaseorderin_notes',
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
