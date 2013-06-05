<?php
/**
 * Language - Files for Sugar Community Edition
 * Version 6.5.13
 *
 * Author: Marc Michele
 * Company: T.I.V. Consulting GmbH
 * URL: http://www.tiv-consulting.de/
 *
 * TODO: Übersetzung.
 */

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$mod_strings = array(
	//Labels for methods in the TrackerReporter.php file that are shown in TrackerDashlet
	'ShowActiveUsers'                 => 'Show Active Users',
	'ShowLastModifiedRecords'         => 'Last 10 Modified Records',
	'ShowTopUser'                     => 'Top User',
	'ShowMyModuleUsage'               => 'My Module Usage',
	'ShowMyWeeklyActivities'          => 'My Weekly Activity',
	'ShowTop3ModulesUsed'             => 'My Top 3 Modules Used',
	'ShowLoggedInUserCount'           => 'Active User Count',
	'ShowMyCumulativeLoggedInTime'    => 'My Cumulative Login Time (This Week)',
	'ShowUsersCumulativeLoggedInTime' => 'Users Cumulative Login Time (This Week)',
	//Column header mapping
	'action'                          => 'Action',
	'active_users'                    => 'Active User Count',
	'date_modified'                   => 'Date of Last Action',
	'different_modules_accessed'      => 'Number Of Modules Accessed',
	'first_name'                      => 'First Name',
	'item_id'                         => 'ID',
	'item_summary'                    => 'Name',
	'last_action'                     => 'Last Action Date/Time',
	'last_name'                       => 'Last Name',
	'module_name'                     => 'Module Name',
	'records_modified'                => 'Total Records Modified',
	'top_module'                      => 'Top Module Accessed',
	'total_count'                     => 'Total Page Views',
	'total_login_time'                => 'Time (hh:mm:ss)',
	'user_name'                       => 'Username',
	'users'                           => 'Users',
	//Administration related labels
	'LBL_ENABLE'                      => 'Enabled',
	'LBL_MODULE_NAME_TITLE'           => 'Trackers',
	'LBL_MODULE_NAME'                 => 'Trackers',
	'LBL_TRACKER_SETTINGS'            => 'Tracker Settings',
	'LBL_TRACKER_QUERIES_DESC'        => 'Tracker Queries',
	'LBL_TRACKER_QUERIES_HELP'        => 'Track SQL statements when "Log slow queries" is enabled and the query execution time exceeds the "Slow query time threshold" value',
	'LBL_TRACKER_PERF_DESC'           => 'Tracker Performance',
	'LBL_TRACKER_PERF_HELP'           => 'Track database roundtrips, files accessed and memory usage',
	'LBL_TRACKER_SESSIONS_DESC'       => 'Tracker Sessions',
	'LBL_TRACKER_SESSIONS_HELP'       => 'Track active users and users&rsquo; session information',
	'LBL_TRACKER_DESC'                => 'Tracker Actions',
	'LBL_TRACKER_HELP'                => 'Track user&rsquo;s page views (modules and records accessed) and record saves',
	'LBL_TRACKER_PRUNE_INTERVAL'      => 'Number of days of Tracker data to store when Scheduler prunes the tables',
	'LBL_TRACKER_PRUNE_RANGE'         => 'Number of days',
);

?>