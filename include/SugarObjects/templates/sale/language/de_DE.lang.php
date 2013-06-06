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

$mod_strings = array (
	'LBL_MODULE_NAME'               => 'Verkauf',
	'LBL_MODULE_TITLE'              => 'Verkauf: Start',
	'LBL_SEARCH_FORM_TITLE'         => 'Verkauf Suche',
	'LBL_VIEW_FORM_TITLE'           => 'Verkauf Ansicht',
	'LBL_LIST_FORM_TITLE'           => 'Verkauf Liste',
	'LBL_SALE_NAME'                 => 'Verkauf Name:',
	'LBL_SALE'                      => 'Verkauf:',
	'LBL_NAME'                      => 'Verkauf Name',
	'LBL_LIST_SALE_NAME'            => 'Name',
	'LBL_LIST_ACCOUNT_NAME'         => 'Firmenname',
	'LBL_LIST_AMOUNT'               => 'Betrag',
	'LBL_LIST_DATE_CLOSED'          => 'geschloßen',
	'LBL_LIST_SALE_STAGE'           => 'Verkaufsphase',
	'LBL_ACCOUNT_ID'                => 'Firmen ID',
	'LBL_CURRENCY_ID'               => 'Währungs ID',
	// Start Nicht übersetzen !!! Dies sind Zuordnungen !!!
	'db_sales_stage'                => 'LBL_LIST_SALES_STAGE',
	'db_name'                       => 'LBL_NAME',
	'db_amount'                     => 'LBL_LIST_AMOUNT',
	'db_date_closed'                => 'LBL_LIST_DATE_CLOSED',
	// Ende Nicht übersetzen !!!
	'UPDATE'                        => 'Verkauf - Währung Update',
	'UPDATE_DOLLARAMOUNTS'          => 'Update U.S. Dollar Kurs',
	'UPDATE_VERIFY'                 => 'Kurs verifizieren',
	'UPDATE_VERIFY_TXT'             => 'Verifies that the amount values in sales are valid decimal numbers with only numeric characters(0-9) and decimals(.)',
	'UPDATE_FIX'                    => 'Fix Amounts',
	'UPDATE_FIX_TXT'                => 'Attempts to fix any invalid amounts by creating a valid decimal from the current amount. Any modified amount is backed up in the amount_backup database field. If you run this and notice bugs, do not rerun it without restoring from the backup as it may overwrite the backup with new invalid data.',
	'UPDATE_DOLLARAMOUNTS_TXT'      => 'Update the U.S. Dollar amounts for sales based on the current set currency rates. This value is used to calculate Graphs and List View Currency Amounts.',
	'UPDATE_CREATE_CURRENCY'        => 'Creating New Currency:',
	'UPDATE_VERIFY_FAIL'            => 'Record Failed Verification:',
	'UPDATE_VERIFY_CURAMOUNT'       => 'Current Amount:',
	'UPDATE_VERIFY_FIX'             => 'Running Fix would give',
	'UPDATE_INCLUDE_CLOSE'          => 'Include Closed Records',
	'UPDATE_VERIFY_NEWAMOUNT'       => 'New Amount:',
	'UPDATE_VERIFY_NEWCURRENCY'     => 'New Currency:',
	'UPDATE_DONE'                   => 'Done',
	'UPDATE_BUG_COUNT'              => 'Bugs Found and Attempted to Resolve:',
	'UPDATE_BUGFOUND_COUNT'         => 'Bugs Found:',
	'UPDATE_COUNT'                  => 'Records Updated:',
	'UPDATE_RESTORE_COUNT'          => 'Record Amounts Restored:',
	'UPDATE_RESTORE'                => 'Restore Amounts',
	'UPDATE_RESTORE_TXT'            => 'Restores amount values from the backups created during fix.',
	'UPDATE_FAIL'                   => 'Could not update - ',
	'UPDATE_NULL_VALUE'             => 'Amount is NULL setting it to 0 -',
	'UPDATE_MERGE'                  => 'Merge Currencies',
	'UPDATE_MERGE_TXT'              => 'Merge multiple currencies into a single currency. If there are multiple currency records for the same currency, you merge them together. This will also merge the currencies for all other modules.',
	'LBL_ACCOUNT_NAME'              => 'Account Name:',
	'LBL_AMOUNT'                    => 'Amount:',
	'LBL_AMOUNT_USDOLLAR'           => 'Amount USD:',
	'LBL_CURRENCY'                  => 'Währung:',
	'LBL_DATE_CLOSED'               => 'Expected Close Date:',
	'LBL_TYPE'                      => 'Typ:',
	'LBL_CAMPAIGN'                  => 'Campaign:',
	'LBL_LEADS_SUBPANEL_TITLE'      => 'Interessenten',
	'LBL_PROJECTS_SUBPANEL_TITLE'   => 'Projekte',
	'LBL_NEXT_STEP'                 => 'Nächster Schritt:',
	'LBL_LEAD_SOURCE'               => 'Interessent Quelle:',
	'LBL_SALES_STAGE'               => 'Verkauf Stage:',
	'LBL_PROBABILITY'               => 'Wahrscheinlichkeit (%):',
	'LBL_DESCRIPTION'               => 'Beschreibung:',
	'LBL_DUPLICATE'                 => 'Möglicher doppelter Verkauf',
	'MSG_DUPLICATE'                 => 'The Sale record you are about to create might be a duplicate of a sale record that already exists. Sale records containing similar names are listed below.<br>Click Save to continue creating this new Sale, or click Cancel to return to the module without creating the sale.',
	'LBL_NEW_FORM_TITLE'            => 'Verkauf erstellen',
	'LNK_NEW_SALE'                  => 'Verkauf erstellen',
	'LNK_SALE_LIST'                 => 'Sale',
	'ERR_DELETE_RECORD'             => 'A record number must be specified to delete the sale.',
	'LBL_TOP_SALES'                 => 'My Top Open Sale',
	'NTC_REMOVE_OPP_CONFIRMATION'   => 'Are you sure you want to remove this contact from the sale?',
	'SALE_REMOVE_PROJECT_CONFIRM'   => 'Are you sure you want to remove this sale from the project?',
	'LBL_DEFAULT_SUBPANEL_TITLE'    => 'Verkauf',
	'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivitäten',
	'LBL_HISTORY_SUBPANEL_TITLE'    => 'Geschichte',
	'LBL_RAW_AMOUNT'                => 'Roheinnahme',
	'LBL_CONTACTS_SUBPANEL_TITLE'   => 'Kontake',
	'LBL_ASSIGNED_TO_NAME'          => 'Benutzer:',
	'LBL_LIST_ASSIGNED_TO_NAME'     => 'Zugewiesener Benutzer',
	'LBL_MY_CLOSED_SALES'           => 'Meine geschlossenen Verkäufe',
	'LBL_TOTAL_SALES'               => 'Gesamt Verkäufe',
	'LBL_CLOSED_WON_SALES'          => 'Geschlossene gewonnene Verkäufe',
	'LBL_ASSIGNED_TO_ID'            => 'Zugewiesen an ID',
	'LBL_CREATED_ID'                => 'Erstellt von ID',
	'LBL_MODIFIED_ID'               => 'Geändert von ID',
	'LBL_MODIFIED_NAME'             => 'Geändert von Benutzername',
	'LBL_SALE_INFORMATION'          => 'Verkaufsinformationen',
	'LBL_CURRENCY_ID'               => 'Währungs-ID',
	'LBL_CURRENCY_NAME'             => 'Währungsname',
	'LBL_CURRENCY_SYMBOL'           => 'Währungssymbol',
	'LBL_EDIT_BUTTON'               => 'Bearbeiten',
	'LBL_REMOVE'                    => 'Löschen',
		
		
);
		
?>