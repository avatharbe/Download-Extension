<?php

/**
 *
 * @package   phpBB Extension - Oxpus Downloads
 * @copyright 2002-2021 OXPUS - www.oxpus.net
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

/**
 * Language pack for Extension permissions [Dutch]
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

// Download Extension Permissions
$lang = array_merge($lang, [
	'ACP_DOWNLOADS'			=> 'Downloadpaneel',

	'ACL_A_DL_OVERVIEW'		=> 'Kan het startscherm zien',
	'ACL_A_DL_CONFIG'		=> 'Kan algemene instellingen beheren',
	'ACL_A_DL_TRAFFIC'		=> 'Kan verkeer beheren',
	'ACL_A_DL_CATEGORIES'	=> 'Kan categorieen beheren',
	'ACL_A_DL_FILES'		=> 'Kan downloads beheren',
	'ACL_A_DL_PERMISSIONS'	=> 'Kan rechten beheren',
	'ACL_A_DL_STATS'		=> 'Kan statistieken bekijken en beheren',
	'ACL_A_DL_BLACKLIST'	=> 'Kan de zwarte lijst voor bestandsextensies beheren',
	'ACL_A_DL_TOOLBOX'		=> 'Kan de gereedschapskist gebruiken',
	'ACL_A_DL_PERM_CHECK'	=> 'Kan gebruikersrechten controleren',
	'ACL_A_DL_ASSISTANT'	=> 'Kan de installatiewizard uitvoeren',
]);
