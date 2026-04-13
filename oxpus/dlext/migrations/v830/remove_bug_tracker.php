<?php

/**
 *
 * @package   phpBB Extension - Oxpus Downloads
 * @copyright 2002-2026 OXPUS - www.oxpus.net
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

namespace oxpus\dlext\migrations\v830;

class remove_bug_tracker extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return !$this->db_tools->sql_table_exists($this->table_prefix . 'dl_bug_tracker')
			&& !$this->db_tools->sql_table_exists($this->table_prefix . 'dl_bug_history');
	}

	public static function depends_on()
	{
		return ['\oxpus\dlext\migrations\v830\release_8_3_0'];
	}

	public function update_schema()
	{
		return [
			'drop_tables' => [
				$this->table_prefix . 'dl_bug_tracker',
				$this->table_prefix . 'dl_bug_history',
			],
			'drop_columns' => [
				$this->table_prefix . 'downloads_cat' => [
					'bug_tracker',
				],
			],
		];
	}

	public function revert_schema()
	{
		return [
			'add_tables' => [
				$this->table_prefix . 'dl_bug_tracker' => [
					'COLUMNS'		=> [
						'report_id'				=> ['UINT:11', null, 'auto_increment'],
						'df_id'					=> ['INT:11', 0],
						'report_title'			=> ['VCHAR', ''],
						'report_text'			=> ['MTEXT_UNI', ''],
						'report_file_ver'		=> ['VCHAR:50', ''],
						'report_date'			=> ['TIMESTAMP', 0],
						'report_author_id'		=> ['UINT', 0],
						'report_assign_id'		=> ['UINT', 0],
						'report_assign_date'	=> ['TIMESTAMP', 0],
						'report_status'			=> ['BOOL', 0],
						'report_status_date'	=> ['TIMESTAMP', 0],
						'report_php'			=> ['VCHAR:50', ''],
						'report_db'				=> ['VCHAR:50', ''],
						'report_forum'			=> ['VCHAR:50', ''],
						'bug_uid'				=> ['CHAR:8', ''],
						'bug_bitfield'			=> ['VCHAR', ''],
						'bug_flags'				=> ['UINT:11', 0],
					],
					'PRIMARY_KEY'	=> 'report_id'
				],
				$this->table_prefix . 'dl_bug_history' => [
					'COLUMNS'		=> [
						'report_his_id'		=> ['UINT:11', null, 'auto_increment'],
						'df_id'				=> ['INT:11', 0],
						'report_id'			=> ['INT:11', 0],
						'report_his_type'	=> ['CHAR:10', ''],
						'report_his_date'	=> ['TIMESTAMP', 0],
						'report_his_value'	=> ['MTEXT_UNI', ''],
					],
					'PRIMARY_KEY'	=> 'report_his_id'
				],
			],
			'add_columns' => [
				$this->table_prefix . 'downloads_cat' => [
					'bug_tracker'	=> ['BOOL', 0],
				],
			],
		];
	}

	public function update_data()
	{
		return [
			['config.remove', ['dl_nav_link_tracker']],
		];
	}
}
