<?php
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/

$dictionary['TPLUR_UserRates'] = array(
	'table'=>'tplur_userrates',
	'audited'=>true,
		'duplicate_merge'=>true,
		'fields'=>array (
  'user_relationship' => 
  array (
    'required' => true,
    'name' => 'user_relationship',
    'vname' => 'LBL_USER_RELATIONSHIP',
    'type' => 'multienum',
    'massupdate' => '1',
    'no_default' => false,
    'comments' => 'activity performe by the user',
    'help' => 'type of activity performed by the user ',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'size' => '20',
    'options' => 'user_project_roles',
    'studio' => 'visible',
    'isMultiSelect' => true,
  ),
  'hourlyrate' => 
  array (
    'required' => true,
    'name' => 'hourlyrate',
    'vname' => 'LBL_HOURLYRATE',
    'type' => 'currency',
    'massupdate' => 0,
    'default' => 40,
    'no_default' => false,
    'comments' => 'If this is supplied it will be used as a default when creating task records',
    'help' => 'If this is supplied it will be used as a default when creating task records',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 26,
    'size' => '20',
    'enable_range_search' => false,
    'precision' => 6,
  ),
  'currency_id' => 
  array (
    'required' => false,
    'name' => 'currency_id',
    'vname' => 'LBL_CURRENCY',
    'type' => 'currency_id',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 36,
    'size' => '20',
    'dbType' => 'id',
    'studio' => 'visible',
    'function' => 
    array (
      'name' => 'getCurrencyDropDown',
      'returns' => 'html',
    ),
  ),
  'perhoursellout' => 
  array (
    'required' => true,
    'name' => 'perhoursellout',
    'vname' => 'LBL_PERHOURSELLOUT',
    'type' => 'currency',
    'massupdate' => 0,
    'default' => 50,
    'no_default' => false,
    'comments' => 'Default value used when creating task records',
    'help' => 'Default value used when creating task records',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 26,
    'size' => '20',
    'enable_range_search' => false,
    'precision' => 6,
  ),
  'assigned_user_id' => 
  array (
    'name' => 'assigned_user_id',
    'rname' => 'name',
    'id_name' => 'assigned_user_id',
    'vname' => 'LBL_ASSIGNED_TO_ID',
    'group' => 'assigned_user_name',
    'type' => 'relate',
    'table' => 'users',
    'module' => '',
    'reportable' => true,
    'isnull' => 'false',
    'dbType' => 'id',
    'audited' => true,
    'comment' => 'User ID assigned to record',
    'duplicate_merge' => 'disabled',
    'required' => false,
    'source' => 'non-db',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => 'User ID assigned to record',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge_dom_value' => '0',
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
    'ext2' => '',
    'quicksearch' => 'enabled',
    'studio' => 'visible',
  ),
  'name' => 
  array (
    'name' => 'name',
    'vname' => 'LBL_NAME',
    'type' => 'name',
    'link' => true,
    'dbType' => 'varchar',
    'len' => '255',
    'unified_search' => false,
    'full_text_search' => 
    array (
      'boost' => 3,
    ),
    'required' => true,
    'importable' => 'required',
    'duplicate_merge' => 'disabled',
    'merge_filter' => 'disabled',
    'massupdate' => 0,
    'default' => 'User rate allocation record',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'size' => '20',
  ),
  'recordactive' => 
  array (
    'required' => false,
    'name' => 'recordactive',
    'vname' => 'LBL_RECORDACTIVE',
    'type' => 'bool',
    'massupdate' => 0,
    'default' => '1',
    'no_default' => false,
    'comments' => 'this is the current active record for a user  only one can be active per user ',
    'help' => 'this is the current active record for a user  only one can be active per user ',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
  ),
  'assigned_user_name' => 
  array (
    'name' => 'assigned_user_name',
    'link' => 'assigned_user_link',
    'vname' => 'LBL_ASSIGNED_TO_NAME',
    'rname' => 'name',
    'type' => 'relate',
    'reportable' => true,
    'source' => 'non-db',
    'table' => 'users',
    'id_name' => 'assigned_user_id',
    'module' => '',
    'duplicate_merge' => 'disabled',
    'required' => false,
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
    'ext2' => '',
    'quicksearch' => 'enabled',
    'studio' => 'visible',
  ),
),
	'relationships'=>array (
),
	'optimistic_locking'=>true,
		'unified_search'=>true,
	);
if (!class_exists('VardefManager')){
        require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('TPLUR_UserRates','TPLUR_UserRates', array('basic','assignable'));