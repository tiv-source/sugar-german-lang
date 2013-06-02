<?php
/*
 * Language - Files for Sugar Community Edition
 * Version 6.5.13
 *
 * Author: Marc Michele
 * Company: T.I.V. Consulting GmbH
 * URL: http://www.tiv-consulting.de/
 *
 * TODO: Übersetzung
 */

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$object_name = strtolower($object_name);
$app_list_strings = array (

	$object_name.'_type_dom' =>	array (
		'Administration' => 'Administration',
		'Product' => 'Product',
		'User' => 'User',
	),

	$object_name.'_status_dom' => array (
		'New' => 'New',
		'Assigned' => 'Assigned',
		'Closed' => 'Closed',
		'Pending Input' => 'Pending Input',
		'Rejected' => 'Rejected',
		'Duplicate' => 'Duplicate',
	),

	$object_name.'_priority_dom' => array (
		'P1' => 'High',
		'P2' => 'Medium',
		'P3' => 'Low',
	),

	$object_name.'_resolution_dom' => array (
		'' => '',
		'Accepted' => 'Accepted',
		'Duplicate' => 'Duplicate',
		'Closed' => 'Closed',
		'Out of Date' => 'Out of Date',
		'Invalid' => 'Invalid',
	),
);

?>