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


$app_list_strings = array (
	strtolower($object_name).'_category_dom' => array (
		''                => '',
		'Marketing'       => 'Marketing',
		'Knowledege Base' => 'Knowledge Base',
		'Sales'           => 'Sales',
	),

	strtolower($object_name).'_subcategory_dom' => array (
		'' => '',
		'Marketing Collateral' => 'Marketing Collateral',
		'Product Brochures'    => 'Product Brochures',
		'FAQ'                  => 'FAQ',
	),

	strtolower($object_name).'_status_dom' => array (
		'Active'       => 'Active',
		'Draft'        => 'Draft',
		'FAQ'          => 'FAQ',
		'Expired'      => 'Expired',
		'Under Review' => 'Under Review',
		'Pending'      => 'Pending',
	),
);


?>