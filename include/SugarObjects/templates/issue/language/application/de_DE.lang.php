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

$object_name = strtolower($object_name);
$app_list_strings = array (

	$object_name.'_type_dom' =>	array (
		'Administration' => 'Administration',
		'Product'        => 'Produkt',
		'User'           => 'Benutzer',
	),

	$object_name.'_status_dom' => array (
		'New'           => 'Neu',
		'Assigned'      => 'Zugeordnet',
		'Closed'        => 'Geschlossen',
		'Pending Input' => 'ausstehende Anwort',
		'Rejected'      => 'Abgelehnt',
		'Duplicate'     => 'Duplikat',
	),

	$object_name.'_priority_dom' => array (
		'P1' => 'Hoch',
		'P2' => 'Normal',
		'P3' => 'Niedrig',
	),

	$object_name.'_resolution_dom' => array (
		''            => '',
		'Accepted'    => 'Akzeptiert',
		'Duplicate'   => 'Duplikat',
		'Closed'      => 'Geschlossen',
		'Out of Date' => 'Veraltet',
		'Invalid'     => 'Ungültig',
	),
);

?>