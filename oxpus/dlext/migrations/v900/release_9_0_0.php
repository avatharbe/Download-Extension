<?php

/**
 *
 * @package   phpBB Extension - Oxpus Downloads
 * @copyright 2002-2026 OXPUS - www.oxpus.net
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

namespace oxpus\dlext\migrations\v900;

class release_9_0_0 extends \phpbb\db\migration\migration
{
	protected $dl_ext_version = '9.0.0';

	public function effectively_installed()
	{
		return isset($this->config['dl_ext_version']) && version_compare($this->config['dl_ext_version'], $this->dl_ext_version, '>=');
	}

	public static function depends_on()
	{
		return [
			'\oxpus\dlext\migrations\v830\release_8_3_0',
			'\oxpus\dlext\migrations\v830\remove_bug_tracker',
			'\oxpus\dlext\migrations\v830\remove_hacklist',
			'\oxpus\dlext\migrations\v830\remove_traffic',
			'\oxpus\dlext\migrations\v830\remove_custom_fields',
		];
	}

	public function update_data()
	{
		return [
			['config.update', ['dl_ext_version', $this->dl_ext_version]],

			// Remove ACP module modes that no longer exist
			['module.remove', [
				'acp',
				'ACP_DOWNLOADS',
				[
					'module_basename'	=> '\oxpus\dlext\acp\main_module',
					'modes'				=> ['traffic'],
				],
			]],
		];
	}
}
