<?php
/**
*
* Database Optimize & Repair Tool [English]
*
* @copyright (c) 2013 Matt Friedman
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/
/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}
$lang = array_merge($lang, array(
	'ACP_OPTIMIZE_REPAIR'			=> 'Optimaliseer &amp; Repareer',
	'ACP_OPTIMIZE_REPAIR_EXPLAIN'	=> 'Hier kun je de databasetabellen optimaliseren of repareren voor phpBB gerelateerde tabellen. Voor grotere datbases kan dit enkele minuten in beslag nemen. De <strong>OPTIMALISEER</strong> functie defragmenteert jouw database en kan voor een betere prestatie zorgen. De <strong>REPAREER</strong> functie hoef je alleen te gebruiken als de database gecrashed is of er corrupte tabellen zijn. Opmerking: <strong>InnoDB</strong> tabellen ondersteunen geen reparatie.',
	'OPTIMIZE_REPAIR_OPTIONS'		=> 'Database opties',
	'DISABLE_BOARD'					=> 'Forum uitschakelen',
	'DISABLE_BOARD_EXPLAIN'			=> 'Het is aangeraden het forum uit te schakelen tijdens dit proces. Aan het einde wordt het forum weer ingeschakeld.',
	'OPTIMIZE'			=> 'Optimaliseer',
	'OPTIMIZE_SUCCESS'	=> 'Optimalisatie van de geselecteerde tabel(len) is voltooid.',
	'REPAIR'			=> 'Repareren',
	'REPAIR_SUCCESS'	=> 'Reparatie van de geselecteerde tabel(len) is voltooid.',
	'CHECK'				=> 'Controleren',
	'CHECK_SUCCESS'		=> 'Controle voltooid.<br />Als er geen “OK”, of “Tabel is al up to date” staat is het aangeraden de database te repareren.',
	'WARNING'			=> 'Waarschuwing',
	'WARNING_EXPLAIN'	=> 'Deze tool is GEEN GARANTIE en gebruikers van deze tool moeten zelf een  database back-up maken indien er een fout optreedt.<br /><br />Voordat je verder gaat, zorg dat je een backup hebt!',
	'WARNING_MYSQL'		=> 'Deze optie werkt alleen met MySQL databases.',
	'MARK_OVERHEAD'		=> 'Markeer tabellen met overhead',
	'PROCESSING'		=> 'Verzoek verwerken... Een ogenblik geduld...',
	'TH_NAME'			=> 'Tabelnaam',
	'TH_TYPE'			=> 'Type',
	'TH_SIZE'			=> 'Grootte',
	'TH_TOTAL'			=> 'Totaal',
	'TH_OVERHEAD'		=> 'Overhead',
	'TABLE_ERROR'		=> 'Je dient minimaal één tabel te selecteren.',
	'TABLE_EMPTY'		=> 'Jouw database wordt niet ondersteund.',
));
