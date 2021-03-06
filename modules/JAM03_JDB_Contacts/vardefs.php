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

$dictionary['JAM03_JDB_Contacts'] = array(
	'table'=>'jam03_jdb_contacts',
	'audited'=>true,
		'duplicate_merge'=>true,
		'fields'=>array (
  'title' => 
  array (
    'name' => 'title',
    'vname' => 'LBL_TITLE',
    'type' => 'varchar',
    'len' => '100',
    'comment' => 'The title of the contact',
    'required' => false,
    'massupdate' => 0,
    'no_default' => false,
    'comments' => 'The title of the contact',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'size' => '20',
  ),
  'jobtitleconformed' => 
  array (
    'required' => false,
    'name' => 'jobtitleconformed',
    'vname' => 'LBL_JOBTITLECONFORMED',
    'type' => 'enum',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => 'Conformed Job Title',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'JDB_JobTitle_list',
    'studio' => 'visible',
    'dependency' => false,
  ),
  'contactid' => 
  array (
    'required' => false,
    'name' => 'contactid',
    'vname' => 'LBL_CONTACTID',
    'type' => 'int',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
    'enable_range_search' => false,
    'disable_num_format' => '1',
    'min' => false,
    'max' => false,
  ),
  'companyid' => 
  array (
    'required' => false,
    'name' => 'companyid',
    'vname' => 'LBL_COMPANYID',
    'type' => 'int',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
    'enable_range_search' => false,
    'disable_num_format' => '',
    'min' => false,
    'max' => false,
  ),
   //  ********************  section added by MAC April 2016 for new fields
 	'levelcode' => 
			  array (
				'required' => false,
				'name' => 'levelcode',
				'vname' => 'LBL_LEVELCODE',
				'type' => 'enum',
				'massupdate' => 0,
				'default' => 'LEVEL01',
				'no_default' => false,
				'comments' => 'Level at which the company is in the Profiling and Calling process',
				'help' => '',
				'importable' => 'true',
				'duplicate_merge' => 'disabled',
				'duplicate_merge_dom_value' => '0',
				'audited' => false,
				'reportable' => true,
				'unified_search' => false,
				'merge_filter' => 'disabled',
				'len' => 20,
				'size' => '20',
				'options' => 'levelcode_list',
				'studio' => 'visible',
				'dependency' => false,
				),	
  	'loadno' => 
			  array (
				'required' => false,
				'name' => 'loadno',
				'vname' => 'LBL_LOADNO',
				'type' => 'int',
				'massupdate' => 0,
				'default' => 0,
				'no_default' => false,
				'comments' => 'Load no',
				'help' => 'The load no the record was loaded on',
				'importable' => 'true',
				'duplicate_merge' => 'disabled',
				'duplicate_merge_dom_value' => '0',
				'audited' => true,
				'reportable' => true,
				'unified_search' => false,
				'merge_filter' => 'disabled',
				'len' => '30',
				'size' => '10',
				'enable_range_search' => false,
				'disable_num_format' => '1',
				'min' => false,
				'max' => false,
			  ),
 	
  //  ********************  end of section added by MAC April 2016 for new fields

),
	'relationships'=>array (
),
	'optimistic_locking'=>true,
		'unified_search'=>true,
	);
if (!class_exists('VardefManager')){
        require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('JAM03_JDB_Contacts','JAM03_JDB_Contacts', array('basic','assignable','person'));