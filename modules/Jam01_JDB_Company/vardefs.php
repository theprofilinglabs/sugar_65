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

$dictionary['Jam01_JDB_Company'] = array(
	'table'=>'jam01_jdb_company',
	'audited'=>true,
		'duplicate_merge'=>true,
		'fields'=>array (
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
    'audited' => true,
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
  'deleted' => 
  array (
    'name' => 'deleted',
    'vname' => 'LBL_DELETED',
    'type' => 'bool',
    'default' => '0',
    'reportable' => true,
    'comment' => 'Record deletion indicator',
    'required' => false,
    'massupdate' => 0,
    'no_default' => false,
    'comments' => 'Record deletion indicator',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
  ),
  'companyname' => 
  array (
    'required' => true,
    'name' => 'companyname',
    'vname' => 'LBL_COMPANYNAME',
    'type' => 'varchar',
    'link' => true,
    'dbType' => 'varchar',
    'len' => '200',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'required',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'size' => '20',
  ),
  'salesrevenue' => 
  array (
    'required' => false,
    'name' => 'salesrevenue',
    'vname' => 'LBL_SALESREVENUE',
    'type' => 'decimal',
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
    'len' => '18',
    'size' => '20',
    'enable_range_search' => false,
    'precision' => '2',
  ),
  'srcurrency' => 
  array (
    'required' => false,
    'name' => 'srcurrency',
    'vname' => 'LBL_SRCURRENCY',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => 'EUR',
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
    'len' => 100,
    'size' => '20',
    'options' => 'JDB_SalesRevenueCurrency_list',
    'studio' => 'visible',
    'dependency' => false,
  ),
  'industry' => 
  array (
    'required' => false,
    'name' => 'industry',
    'vname' => 'LBL_INDUSTRY',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => '32395',
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
    'len' => 100,
    'size' => '20',
    'options' => 'JDB_Industry_List',
    'studio' => 'visible',
    'dependency' => false,
  ),
  'companyoverview' => 
  array (
    'required' => false,
    'name' => 'companyoverview',
    'vname' => 'LBL_COMPANYOVERVIEW',
    'type' => 'text',
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
    'size' => '20',
    'studio' => 'visible',
    'rows' => '20',
    'cols' => '200',
  ),
  'ownership' => 
  array (
    'required' => false,
    'name' => 'ownership',
    'vname' => 'LBL_OWNERSHIP',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => 'UNK',
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
    'len' => 100,
    'size' => '20',
    'options' => 'JDB_ownership_list',
    'studio' => 'visible',
    'dependency' => false,
  ),
  'totalstaff' => 
  array (
    'required' => false,
    'name' => 'totalstaff',
    'vname' => 'LBL_TOTALSTAFF',
    'type' => 'enum',
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
    'len' => 100,
    'size' => '20',
    'options' => 'JDB_totalstaff_list',
    'studio' => 'visible',
    'dependency' => false,
  ),
  'address1' => 
  array (
    'required' => false,
    'name' => 'address1',
    'vname' => 'LBL_ADDRESS1',
    'type' => 'varchar',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '100',
    'size' => '20',
  ),
  'address2' => 
  array (
    'required' => false,
    'name' => 'address2',
    'vname' => 'LBL_ADDRESS2',
    'type' => 'varchar',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '100',
    'size' => '20',
  ),
  'address3' => 
  array (
    'required' => false,
    'name' => 'address3',
    'vname' => 'LBL_ADDRESS3',
    'type' => 'varchar',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '100',
    'size' => '20',
  ),
  'address4' => 
  array (
    'required' => false,
    'name' => 'address4',
    'vname' => 'LBL_ADDRESS4',
    'type' => 'varchar',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '100',
    'size' => '20',
  ),
  'address5' => 
  array (
    'required' => false,
    'name' => 'address5',
    'vname' => 'LBL_ADDRESS5',
    'type' => 'varchar',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '100',
    'size' => '20',
  ),
  'address6' => 
  array (
    'required' => false,
    'name' => 'address6',
    'vname' => 'LBL_ADDRESS6',
    'type' => 'varchar',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '100',
    'size' => '20',
  ),
  'address7' => 
  array (
    'required' => false,
    'name' => 'address7',
    'vname' => 'LBL_ADDRESS7',
    'type' => 'varchar',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '100',
    'size' => '20',
  ),
  'postcode' => 
  array (
    'required' => true,
    'name' => 'postcode',
    'vname' => 'LBL_POSTCODE',
    'type' => 'varchar',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'required',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '15',
    'size' => '20',
  ),
  'telephone' => 
  array (
    'required' => false,
    'name' => 'telephone',
    'vname' => 'LBL_TELEPHONE',
    'type' => 'varchar',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '50',
    'size' => '20',
  ),
  'url' => 
  array (
    'required' => false,
    'name' => 'url',
    'vname' => 'LBL_URL',
    'type' => 'url',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
    'dbType' => 'varchar',
    'gen' => '0',
    'link_target' => '_blank',
  ),
  'parentcompanyid' => 
  array (
    'required' => false,
    'name' => 'parentcompanyid',
    'vname' => 'LBL_PARENTCOMPANYID',
    'type' => 'int',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
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
  'companynote' => 
  array (
    'required' => false,
    'name' => 'companynote',
    'vname' => 'LBL_COMPANYNOTE',
    'type' => 'text',
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
    'size' => '20',
    'studio' => 'visible',
    'rows' => '5',
    'cols' => '100',
  ),
  'countrycode' => 
  array (
    'required' => true,
    'name' => 'countrycode',
    'vname' => 'LBL_COUNTRYCODE',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => 'GBR',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'JDB_Country_Code_list',
    'studio' => 'visible',
    'dependency' => false,
  ),
  'companyactive' => 
  array (
    'required' => false,
    'name' => 'companyactive',
    'vname' => 'LBL_COMPANYACTIVE',
    'type' => 'bool',
    'massupdate' => 0,
    'default' => '1',
    'no_default' => false,
    'comments' => '',
    'help' => '',
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
    'required' => false,
    'importable' => 'false',
    'duplicate_merge' => 'disabled',
    'merge_filter' => 'disabled',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'size' => '20',
  ),
  'Products' => 
  array (
    'name' => 'Products',
    'type' => 'link',
    'relationship' => 'jam01_jdb_company_jam01_jdb_productgroup',
    'module' => 'Jam01_JDB_ProductGroup',
    'bean_name' => 'Jam01_JDB_ProductGroup',
    'source' => 'non-db',
    'vname' => 'LBL_Products',
  ),
  //  ********************  section added by MAC April 2016 for new fields
   'mastercode' => 
   array(
		        'name' => 'mastercode',
		    //    'label' => 'lbl_mastercode',
		        'vname' => 'LBL_MASTERCODE',
		        'type' => 'enum',
		    //    'module' => 'Jam01_JDB_Company',
		        'help' => 'Master Segmentation Code',
		        'comments' => 'Industrial segmentation',
				'options' => 'master_code_dom', //maps to options - specify list name
		        'default_value' => '0', //key of entry in specified list
				'default' => '',
		        'required' => false, // true or false
		        'reportable' => true, // true or false
		        'audited' => false, // true or false
		        'importable' => 'true', // 'true', 'false', 'required'
		        'duplicate_merge' => false, // true or false
		    ),
	'marketunit' =>
		    array(
		        'name' => 'marketunit',
				'vname' => 'LBL_MARKETUNIT',
		        'type' => 'enum',
		      //  'module' => 'Jam01_JDB_Company',
		        'help' => 'Market Unit',
		        'comments' => 'Market Unit Area',
				'options' => 'marketunit_code_dom', //maps to options - specify list name
		        'default_value' => '', //key of entry in specified list
				'default' => 'UNK',
		        'required' => false, // true or false
		        'reportable' => true, // true or false
		        'audited' => false, // true or false
		        'importable' => 'true', // 'true', 'false', 'required'
		        'duplicate_merge' => false, // true or false
				),
	'externalcrmref' => 
			  array (
				'required' => false,
				'name' => 'externalcrmref',
				'vname' => 'LBL_EXTERNALCRMREF',
				'type' => 'varchar',
				'massupdate' => 0,
				'no_default' => false,
				'comments' => 'External CRM ID',
				'help' => 'The ref from any external CRM the data may have come from',
				'importable' => 'true',
				'duplicate_merge' => 'disabled',
				'duplicate_merge_dom_value' => '0',
				'audited' => false,
				'reportable' => true,
				'unified_search' => false,
				'merge_filter' => 'disabled',
				'len' => '10',
				'size' => '10',
			  ),
// sic code field is mentioned twice - once as a varcchar and once as an enum.
// enum is used to supply value on edit screen (gets the dropdown and associated description )  but varchar is used to see the actual code on detail screen
// not sure if this is the best way to ref the same db field in different ways but it seems to work sometimes then  it just hangs.
//	'siccode_code' => 
//			  array (
//				'required' => false,
//				'name' => 'siccode',
//				'vname' => 'LBL_SICCODE_CODE',
//				'type' => 'varchar',
//				'massupdate' => 0,
//				'default' => 'UNK'
//				'no_default' => false,
//				'comments' => 'Actual SIC Code',
//				'help' => 'Actual SIC Code',
//				'importable' => 'true',
//				'duplicate_merge' => 'disabled',
//				'duplicate_merge_dom_value' => '0',
//				'audited' => false,
//				'reportable' => true,
//				'unified_search' => false,
//				'merge_filter' => 'disabled',
//				'len' => '5',
//				'size' => '5',
//			  ),
	  'siccode' => 
			  array (
				'required' => true,
				'name' => 'siccode',
				'vname' => 'LBL_SICCODE',
				'type' => 'enum',
				'massupdate' => 0,
				'default' => 'UNK',
				'no_default' => false,
				'comments' => '',
				'help' => '',
				'importable' => 'true',
				'duplicate_merge' => 'disabled',
				'duplicate_merge_dom_value' => '0',
				'audited' => true,
				'reportable' => true,
				'unified_search' => false,
				'merge_filter' => 'disabled',
				'len' => 5,
				'size' => '30',
				'options' => 'TPL_sic_code_list',
				'studio' => 'visible',
				'dependency' => false,
			  ),
	'extdatasourceref' => 
			  array (
				'required' => false,
				'name' => 'extdatasourceref',
				'vname' => 'LBL_EXTDATASOURCEREF',
				'type' => 'varchar',
				'massupdate' => 0,
				'no_default' => false,
				'comments' => 'External data set TPL reference',
				'help' => 'The TPL ref for  an external data set',
				'importable' => 'true',
				'duplicate_merge' => 'disabled',
				'duplicate_merge_dom_value' => '0',
				'audited' => false,
				'reportable' => true,
				'unified_search' => false,
				'merge_filter' => 'disabled',
				'len' => '20',
				'size' => '20',
			  ),
	'extdatasourcerecid' => 
			  array (
				'required' => false,
				'name' => 'extdatasourcerecid',
				'vname' => 'LBL_EXTDATASOURCERECID',
				'type' => 'int',
				'massupdate' => 0,
				'no_default' => false,
				'comments' => 'External data set TPL record id reference',
				'help' => 'The TPL record id  for a record within an external data set',
				'importable' => 'true',
				'duplicate_merge' => 'disabled',
				'duplicate_merge_dom_value' => '0',
				'audited' => true,
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
	'levelcode' => 
			  array (
				'required' => false,
				'name' => 'levelcode',
				'vname' => 'LBL_LEVELCODE',
				'type' => 'enum',
				'massupdate' => 0,
				'default' => '1LEVEL',
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
VardefManager::createVardef('Jam01_JDB_Company','Jam01_JDB_Company', array('basic','assignable'));