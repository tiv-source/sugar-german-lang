<?php

$manifest = array(
	'name' => 'German - Deutsch - Language Pack',
	'description' => 'Language Pack German von <a href="http://www.tiv-consulting.de" target="_blank">T.I.V. Consulting GmbH</a>',
	'type' => 'langpack',
	'is_uninstallable' => 'Yes',
	'version' => '6.5.13',
	'acceptable_sugar_flavors' => array("CE"),
	'author' => 'Marc Michele for T.I.V. Consulting GmbH',
	'acceptable_sugar_versions' => array("regex_matches" => array("6.5.13")),
	'published_date' => '01-06-2013',
);

$installdefs = array(
	'id' => 'de_DE',
	'image_dir' => '<basepath>/images',
	'copy' => array(
		array('from' => '<basepath>/include', 'to' => 'include',),
		array('from' => '<basepath>/modules', 'to' => 'modules'),
		array('from' => '<basepath>/jscalendar', 'to' => 'jscalendar'),
		array('from' => '<basepath>/install', 'to' => 'install'),
	),
);

?>