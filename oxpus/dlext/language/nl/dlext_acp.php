<?php

/**
 *
 * @package   phpBB Extension - Oxpus Downloads
 * @copyright 2002-2024 OXPUS - www.oxpus.net
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

/*
* [ dutch ] language file for Download Extension
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
	$lang = [];
}

$lang = array_merge($lang, [
	'DL_LIMIT_TITLE_SHOW'				=> 'Huidige limieten bekijken',
	'DL_LIMIT_TITLE_HIDE'				=> 'Limieten instellen',
	'DL_PHP_LIMITS'						=> 'Instellingen in PHP',
	'DL_CUR_LIMITS'						=> 'Instellingen binnen de downloadextensie',

	'DL_PHP_INI_EXPLAIN'				=> 'De PHP-instellingen kunnen worden gewijzigd in het bestand <strong>%1$s</strong> of in een van de meegeleverde configuratiebestanden; zie PHP-informatie.',

	'DL_LIMIT_PHP_FILE_UPLOAD'			=> 'file_upload',
	'DL_LIMIT_PHP_MAX_FILE_UPLOAD'		=> 'max_file_upload',
	'DL_LIMIT_PHP_MAX_INPUT_TIME'		=> 'max_input_time',
	'DL_LIMIT_PHP_MAX_EXECUTION_TIME'	=> 'max_execution_time',
	'DL_LIMIT_PHP_MEMORY_LIMIT'			=> 'memory_limit',
	'DL_LIMIT_PHP_POST_MAX_SIZE'		=> 'post_max_size',
	'DL_LIMIT_PHP_UPLOAD_MAX_FILESIZE'	=> 'upload_max_filesize',

	'DL_LIMIT_TOTAL_REMAIN'				=> 'Resterend geheugen voor alle downloadbestanden',
	'DL_LIMIT_THUMBNAIL_XY_SIZE'		=> 'Maximale afmetingen van geuploade miniaturen',
	'DL_LIMIT_THUMBNAIL_XYSIZE'			=> '%1$s x %2$s pixel',

	'DL_LIMIT_PHP_FILE_UPLOAD_EXPLAIN'			=> 'Standaard = 1 (Aan)<br>Staat PHP toe om geuploade bestanden te verwerken.<br>Anders zijn deze bestanden niet beschikbaar voor PHP.',
	'DL_LIMIT_PHP_MAX_FILE_UPLOAD_EXPLAIN'		=> 'Standaard = 20, aanbeveling >= 10<br>Beperkt het aantal tegelijkertijd geuploade bestanden dat PHP kan verwerken.',
	'DL_LIMIT_PHP_MAX_INPUT_TIME_EXPLAIN'		=> 'Standaard = -1 (niet actief)<br>Maximale verwerkingstijd voor POST- en GET-gegevens in seconden.<br>De tijdsperiode begint met de start van PHP en eindigt met de start van het eerste PHP-script.',
	'DL_LIMIT_PHP_MAX_EXECUTION_TIME_EXPLAIN'	=> 'Standaard = 30 seconden<br>Maximale uitvoeringstijd van een PHP-script van de start van PHP tot het einde van een uit te voeren script.<br>Na deze tijdsperiode stopt PHP met verwerken, tenzij het script voortijdig is beeindigd.',
	'DL_LIMIT_PHP_MEMORY_LIMIT_EXPLAIN'			=> 'Standaard = 128 MB (in moderne PHP-versies)<br>Beperkt het RAM-geheugen van de server dat PHP mag gebruiken.<br>Moet worden verhoogd om overeen te komen met de downloadbestanden die u gebruikt.<br>Het is sterk aanbevolen om de RAM-limiet van de server niet te overschrijden.',
	'DL_LIMIT_PHP_POST_MAX_SIZE_EXPLAIN'		=> 'Standaard = 8 MB<br>Maximaal geheugenverbruik voor een HTTP(S)-uploadstroom / HTML-formulier.<br>Beperkt door de waarde onder memory_limit.<br>Moet worden verhoogd wanneer grotere bestanden beschikbaar moeten zijn voor downloads.',
	'DL_LIMIT_PHP_UPLOAD_MAX_FILESIZE_EXPLAIN'	=> 'Standaard = 2 MB<br>Maximale bestandsgrootte die PHP per bestand mag verwerken na het indienen van een HTML-formulier.<br>Grotere bestanden zijn niet beschikbaar voor PHP.<br>Moet worden verhoogd als grotere bestanden worden gebruikt voor downloads.<br><strong>Let op:</strong><br>Deze limiet geldt per geupload bestand. Als meerdere bestanden tegelijk worden geupload, wordt de limiet per bestand vermenigvuldigd en in totaal beperkt door de waarde van post_max_size.',

	'DL_LIMIT_TOTAL_REMAIN_EXPLAIN'				=> 'De maximale opslagruimte voorzien voor alle bestanden die ter download moeten worden aangeboden.<br><strong>Belangrijk:</strong><br>Miniaturen en bestandsversies zijn uitgesloten van deze limiet!<br><strong>Let op:</strong><br>Deze limiet mag de fysiek beschikbare opslagruimte van de server niet bereiken of zelfs overschrijden, anders kan de server uitvallen wegens gebrek aan geheugen!<br>Het is ook belangrijk om ervoor te zorgen dat de mapgroottes van de miniaturen en bestandsversies moeten worden meegenomen voor deze fysieke limiet.',
	'DL_LIMIT_THUMBNAIL_SIZE_EXPLAIN'			=> 'Geuploade miniaturen met een grotere bestandsgrootte worden geweigerd en niet opgenomen in de downloads.',
	'DL_LIMIT_THUMBNAIL_XY_SIZE_EXPLAIN'		=> 'Maximale afmetingen in pixels voor de breedte en hoogte van alle geuploade miniatuurbestanden.<br>Grotere afbeeldingsbestanden worden geweigerd en niet geaccepteerd.',
	'DL_LIMIT_THUMBNAIL_XYSIZE_EXPLAIN'			=> '%1$s x %2$s Pixel',
]);
