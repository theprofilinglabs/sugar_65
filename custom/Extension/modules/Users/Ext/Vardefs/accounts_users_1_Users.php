<?php
// created: 2017-03-07 11:35:09
$dictionary["User"]["fields"]["accounts_users_1"] = array (
  'name' => 'accounts_users_1',
  'type' => 'link',
  'relationship' => 'accounts_users_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_USERS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_users_1accounts_ida',
);
$dictionary["User"]["fields"]["accounts_users_1_name"] = array (
  'name' => 'accounts_users_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_USERS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_users_1accounts_ida',
  'link' => 'accounts_users_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["User"]["fields"]["accounts_users_1accounts_ida"] = array (
  'name' => 'accounts_users_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_users_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_USERS_1_FROM_USERS_TITLE',
);
