<?php
$popupMeta = array (
    'moduleMain' => 'TPLSU_TPL_Suppliers',
    'varName' => 'TPLSU_TPL_Suppliers',
    'orderBy' => 'tplsu_tpl_suppliers.name',
    'whereClauses' => array (
  'name' => 'tplsu_tpl_suppliers.name',
  'billing_address_city' => 'tplsu_tpl_suppliers.billing_address_city',
  'phone_office' => 'tplsu_tpl_suppliers.phone_office',
  'billing_address_street' => 'tplsu_tpl_suppliers.billing_address_street',
  'billing_address_postalcode' => 'tplsu_tpl_suppliers.billing_address_postalcode',
  'phone_alternate' => 'tplsu_tpl_suppliers.phone_alternate',
  'website' => 'tplsu_tpl_suppliers.website',
),
    'searchInputs' => array (
  0 => 'name',
  1 => 'billing_address_city',
  2 => 'phone_office',
  4 => 'billing_address_street',
  5 => 'billing_address_postalcode',
  6 => 'phone_alternate',
  7 => 'website',
),
    'searchdefs' => array (
  'name' => 
  array (
    'type' => 'name',
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'name',
  ),
  'billing_address_street' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_BILLING_ADDRESS_STREET',
    'width' => '10%',
    'name' => 'billing_address_street',
  ),
  'billing_address_city' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_BILLING_ADDRESS_CITY',
    'width' => '10%',
    'name' => 'billing_address_city',
  ),
  'billing_address_postalcode' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_BILLING_ADDRESS_POSTALCODE',
    'width' => '10%',
    'name' => 'billing_address_postalcode',
  ),
  'phone_office' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_PHONE_OFFICE',
    'width' => '10%',
    'name' => 'phone_office',
  ),
  'phone_alternate' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_PHONE_ALT',
    'width' => '10%',
    'name' => 'phone_alternate',
  ),
  'website' => 
  array (
    'type' => 'url',
    'label' => 'LBL_WEBSITE',
    'width' => '10%',
    'name' => 'website',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'type' => 'name',
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'PHONE_OFFICE' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_PHONE_OFFICE',
    'width' => '10%',
    'default' => true,
  ),
  'PHONE_ALTERNATE' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_PHONE_ALT',
    'width' => '10%',
    'default' => true,
  ),
  'EMAIL1' => 
  array (
    'type' => 'varchar',
    'studio' => 
    array (
      'editField' => true,
      'searchview' => false,
    ),
    'label' => 'LBL_EMAIL',
    'width' => '10%',
    'default' => true,
  ),
  'BILLING_ADDRESS_STREET' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_BILLING_ADDRESS_STREET',
    'width' => '10%',
    'default' => true,
  ),
  'BILLING_ADDRESS_CITY' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_BILLING_ADDRESS_CITY',
    'width' => '10%',
    'default' => true,
  ),
  'BILLING_ADDRESS_POSTALCODE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_BILLING_ADDRESS_POSTALCODE',
    'width' => '10%',
    'default' => true,
  ),
),
);
