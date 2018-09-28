<?php
$listViewDefs ['Documents'] = 
array (
  'DOCUMENT_NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_NAME',
    'link' => true,
    'default' => true,
    'bold' => true,
  ),
  'FILENAME' => 
  array (
    'width' => '45%',
    'label' => 'LBL_FILENAME',
    'link' => true,
    'default' => true,
    'bold' => false,
    'displayParams' => 
    array (
      'module' => 'Documents',
    ),
    'sortable' => false,
    'related_fields' => 
    array (
      0 => 'document_revision_id',
      1 => 'doc_id',
      2 => 'doc_type',
      3 => 'doc_url',
    ),
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '20%',
    'default' => true,
  ),
  'TEMPLATE_TYPE' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_TEMPLATE_TYPE',
    'width' => '10%',
    'default' => true,
  ),
  'CATEGORY_ID' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_CATEGORY',
    'default' => true,
  ),
  'SUBCATEGORY_ID' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_SUBCATEGORY',
    'default' => true,
  ),
  'RELATED_DOC_NAME' => 
  array (
    'type' => 'relate',
    'label' => 'LBL_DET_RELATED_DOCUMENT',
    'id' => 'RELATED_DOC_ID',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'RELATED_DOC_REV_NUMBER' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DET_RELATED_DOCUMENT_VERSION',
    'width' => '3%',
    'default' => true,
  ),
  'LAST_REV_CREATE_DATE' => 
  array (
    'width' => '5%',
    'label' => 'LBL_LIST_LAST_REV_DATE',
    'default' => true,
    'sortable' => false,
    'related_fields' => 
    array (
      0 => 'document_revision_id',
    ),
  ),
  'DATE_ENTERED' => 
  array (
    'width' => '5%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
  ),
  'REVISION' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_DOC_VERSION',
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_MODIFIED_USER',
    'module' => 'Users',
    'id' => 'USERS_ID',
    'default' => false,
    'sortable' => false,
    'related_fields' => 
    array (
      0 => 'modified_user_id',
    ),
  ),
  'EXP_DATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_EXP_DATE',
    'default' => false,
  ),
);
?>
