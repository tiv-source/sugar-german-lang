<?php
/*
 * Language - Files for Sugar Community Edition
 * Version 6.5.13
 *
 * Author: Marc Michele
 * Company: T.I.V. Consulting GmbH
 * URL: http://www.tiv-consulting.de/
 *
 */

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


$app_list_strings = array (
	strtolower($object_name).'_category_dom' => array (
		''                => '',
		'Marketing'       => 'Marketing',
		'Knowledege Base' => 'Wissens-DB',
		'Sales'           => 'Verkauf',
	),

	strtolower($object_name).'_subcategory_dom' => array (
		'' => '',
		'Marketing Collateral' => 'Werbematerial',
		'Product Brochures'    => 'Produkt Broschüren',
		'FAQ'                  => 'Fragen',
	),

	strtolower($object_name).'_status_dom' => array (
		'Active'       => 'Aktiv',
		'Draft'        => 'Entwurf',
		'FAQ'          => 'Fragen',
		'Expired'      => 'Abgelaufen',
		'Under Review' => 'Unter Überprüfung',
		'Pending'      => 'Unerledigt',
	),
);


?>