<?php
 // created: 2013-04-30 14:55:07
$layout_defs["Prospects"]["subpanel_setup"]['fp_events_prospects_1'] = array (
  'order' => 100,
  'module' => 'FP_events',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE',
  'get_subpanel_data' => 'fp_events_prospects_1',
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
