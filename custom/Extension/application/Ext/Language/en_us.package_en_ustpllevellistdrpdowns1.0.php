<?php
// add dropdowns for levelcodes
// mark april 2016

// to get this on the server with an uninstall possibility use the module loader with a manifest 
// $installdefs array something like 
//   $installdefs =array(
//        'id'] => 'package_dropdowncompany3.0',
//        'language'=> array (
//			array(
//			'from'] => '<basepath>/SugarModules/include/language/en_us.tplcompanydropdowns.php',
//			'to_module'] => 'application',
//			'language'] => 'en_us',


$app_list_strings['moduleList']['TPTEL_TPL_Call_Notes'] = 'TPL Call Notes';
$app_list_strings['notetype_list']['CALLNOTE'] = 'Call Note';
$app_list_strings['notetype_list']['INTERNAL'] = 'Internal Note';
$app_list_strings['notetype_list']['CALLBACK'] = 'Call Back';
$app_list_strings['notetype_list']['VOICEMAIL'] = 'Went to Voicemail';
$app_list_strings['notetype_list']['RECEPTIONIST'] = 'Spoke to Receptionist';
$app_list_strings['notetype_list']['COLLEAGUE'] = 'Spoke to Colleague';
$app_list_strings['levelcode_list']['1LEVEL'] = 'L1 Potential Suspect';
$app_list_strings['levelcode_list']['2LEVEL'] = 'L2 Suspect In Profiling';
$app_list_strings['levelcode_list']['3LEVEL'] = 'L3 Suspect Profiled';
$app_list_strings['levelcode_list']['4LEVEL'] = 'L4 Tele Qualified Suspect';
$app_list_strings['levelcode_list']['5LEVEL'] = 'L5 Callback - Nurture';
$app_list_strings['levelcode_list']['6LEVEL'] = 'L6 In Social Media';
$app_list_strings['levelcode_list']['7LEVEL'] = 'L7 Meeting Booked';
$app_list_strings['levelcode_list']['90LEVEL'] = 'L90 Qualified out - Initial Screen';
$app_list_strings['levelcode_list']['91LEVEL'] = 'L91 Qualified out - Already Engaged';
$app_list_strings['levelcode_list']['92LEVEL'] = 'L92 Qualified out - Already a Customer';
$app_list_strings['levelcode_list']['93LEVEL'] = 'L93 Qualified out - Unable to Engage via Tele';
$app_list_strings['levelcode_list']['95LEVEL'] = 'L95 Qualified out - No Interest';
$app_list_strings['levelcode_list']['97LEVEL'] = 'L97 Qualified out - Contact needs Replacement';
$app_list_strings['levelcode_list']['99LEVEL'] = 'L99 Qualified out - See Notes';
