<?php

/**
 *
 * @package   phpBB Extension - Oxpus Downloads
 * @copyright 2002-2026 OXPUS - www.oxpus.net
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

namespace oxpus\dlext\migrations\v830;

class remove_custom_fields extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return !$this->db_tools->sql_table_exists($this->table_prefix . 'dl_fields');
	}

	public static function depends_on()
	{
		return ['\oxpus\dlext\migrations\v830\release_8_3_0'];
	}

	public function update_schema()
	{
		return [
			'drop_tables' => [
				$this->table_prefix . 'dl_fields',
				$this->table_prefix . 'dl_fields_data',
				$this->table_prefix . 'dl_fields_lang',
				$this->table_prefix . 'dl_lang',
			],
		];
	}

	public function revert_schema()
	{
		return [
			'add_tables' => [
				$this->table_prefix . 'dl_fields' => [
					'COLUMNS'		=> [
						'field_id'				=> ['UINT:8', null, 'auto_increment'],
						'field_name'			=> ['MTEXT_UNI', ''],
						'field_type'			=> ['INT:4', 0],
						'field_ident'			=> ['VCHAR:20', ''],
						'field_length'			=> ['VCHAR:20', ''],
						'field_minlen'			=> ['VCHAR', ''],
						'field_maxlen'			=> ['VCHAR', ''],
						'field_novalue'			=> ['MTEXT_UNI', ''],
						'field_default_value'	=> ['MTEXT_UNI', ''],
						'field_validation'		=> ['VCHAR:60', ''],
						'field_required'		=> ['BOOL', 0],
						'field_active'			=> ['BOOL', 0],
						'field_order'			=> ['UINT:8', 0],
					],
					'PRIMARY_KEY'	=> 'field_id'
				],
				$this->table_prefix . 'dl_fields_data' => [
					'COLUMNS'		=> [
						'df_id'			=> ['UINT:11', 0],
					],
					'PRIMARY_KEY'	=> 'df_id'
				],
				$this->table_prefix . 'dl_fields_lang' => [
					'COLUMNS'		=> [
						'field_id'		=> ['UINT:8', 0],
						'lang_id'		=> ['UINT:8', 0],
						'option_id'		=> ['UINT:8', 0],
						'field_type'	=> ['INT:4', 0],
						'lang_value'	=> ['MTEXT_UNI', ''],
					],
					'PRIMARY_KEY'	=> ['field_id', 'lang_id', 'option_id'],
				],
				$this->table_prefix . 'dl_lang' => [
					'COLUMNS'		=> [
						'field_id'				=> ['UINT:8', 0],
						'lang_id'				=> ['UINT:8', 0],
						'lang_name'				=> ['MTEXT_UNI', ''],
						'lang_explain'			=> ['MTEXT_UNI', ''],
						'lang_default_value'	=> ['MTEXT_UNI', ''],
					],
					'PRIMARY_KEY'	=> ['field_id', 'lang_id'],
				],
			],
		];
	}

	public function update_data()
	{
		return [
			['permission.remove', ['a_dl_fields']],
		];
	}
}
