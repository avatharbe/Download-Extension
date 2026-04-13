<?php

/**
 *
 * @package   phpBB Extension - Oxpus Downloads
 * @copyright 2002-2026 OXPUS - www.oxpus.net
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

namespace oxpus\dlext\migrations\v900;

class dl_schema extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return $this->db_tools->sql_table_exists($this->table_prefix . 'downloads');
	}

	public static function depends_on()
	{
		return ['\phpbb\db\migration\data\v320\v320'];
	}

	public function update_schema()
	{
		return [
			'add_tables'	=> [
				$this->table_prefix . 'dl_auth' => [
					'COLUMNS'		=> [
						'cat_id'	=> ['INT:11', 0],
						'group_id'	=> ['INT:11', 0],
						'auth_view'	=> ['BOOL', 1],
						'auth_dl'	=> ['BOOL', 1],
						'auth_up'	=> ['BOOL', 1],
						'auth_mod'	=> ['BOOL', 0],
					],
				],

				$this->table_prefix . 'dl_comments' => [
					'COLUMNS'		=> [
						'dl_id'				=> ['BINT', null, 'auto_increment'],
						'id'				=> ['INT:11', 0],
						'cat_id'			=> ['INT:11', 0],
						'user_id'			=> ['UINT', 0],
						'username'			=> ['VCHAR:32', ''],
						'comment_time'		=> ['TIMESTAMP', 0],
						'comment_edit_time'	=> ['TIMESTAMP', 0],
						'comment_text'		=> ['MTEXT_UNI', ''],
						'approve'			=> ['BOOL', 0],
						'com_uid'			=> ['CHAR:8', ''],
						'com_bitfield'		=> ['VCHAR', ''],
						'com_flags'			=> ['UINT:11', 0],
					],
					'PRIMARY_KEY'	=> 'dl_id'
				],

				$this->table_prefix . 'dl_ext_blacklist' => [
					'COLUMNS'		=> [
						'extention'	=> ['CHAR:10', ''],
					],
				],

				$this->table_prefix . 'dl_favorites' => [
					'COLUMNS'		=> [
						'fav_id'		=> ['UINT:11', null, 'auto_increment'],
						'fav_dl_id'		=> ['INT:11', 0],
						'fav_dl_cat'	=> ['INT:11', 0],
						'fav_user_id'	=> ['UINT', 0],
					],
					'PRIMARY_KEY'	=> 'fav_id'
				],

				$this->table_prefix . 'dl_hotlink' => [
					'COLUMNS'		=> [
						'user_id'		=> ['UINT', 0],
						'session_id'	=> ['VCHAR:32', ''],
						'hotlink_id'	=> ['VCHAR:255', ''],
						'code'			=> ['VCHAR:10', '-'],
					],
				],

				$this->table_prefix . 'dl_images' => [
					'COLUMNS'		=> [
						'img_id'		=> ['UINT:8', null, 'auto_increment'],
						'dl_id'			=> ['UINT:11', 0],
						'img_name'		=> ['VCHAR:255', ''],
						'img_title'		=> ['MTEXT_UNI', ''],
						'img_index'		=> ['BOOL', 0],
						'img_lists'		=> ['BOOL', 0],
					],
					'PRIMARY_KEY'	=> 'img_id'
				],

				$this->table_prefix . 'dl_ratings' => [
					'COLUMNS'		=> [
						'dl_id'			=> ['INT:11', 0],
						'user_id'		=> ['UINT', 0],
						'rate_point'	=> ['CHAR:10', ''],
					],
				],

				$this->table_prefix . 'dl_reports' => [
					'COLUMNS'		=> [
						'report_id'		=> ['UINT:11', null, 'auto_increment'],
						'dl_id'			=> ['UINT', 0],
						'user_id'		=> ['UINT:10', 0],
						'report_time'	=> ['UINT:11', 0],
						'report_text'	=> ['MTEXT_UNI', ''],
						'report_closed'	=> ['BOOL', 0],
						'report_cuser'	=> ['UINT:10', 0],
						'report_ctime'	=> ['UINT:11', 0],
					],
					'PRIMARY_KEY'	=> 'report_id'
				],

				$this->table_prefix . 'dl_stats' => [
					'COLUMNS'		=> [
						'dl_id'			=> ['BINT', null, 'auto_increment'],
						'id'			=> ['INT:11', 0],
						'cat_id'		=> ['INT:11', 0],
						'user_id'		=> ['UINT', 0],
						'username'		=> ['VCHAR:32', ''],
						'traffic'		=> ['BINT', 0],
						'direction'		=> ['BOOL', 0],
						'user_ip'		=> ['VCHAR:40', ''],
						'time_stamp'	=> ['INT:11', 0],
					],
					'PRIMARY_KEY'	=> 'dl_id'
				],

				$this->table_prefix . 'dl_versions' => [
					'COLUMNS'		=> [
						'ver_id'			=> ['UINT:11', null, 'auto_increment'],
						'dl_id'				=> ['UINT:11', 0],
						'ver_file_name'		=> ['VCHAR', ''],
						'ver_file_hash'		=> ['VCHAR:255', ''],
						'ver_real_file'		=> ['VCHAR', ''],
						'ver_file_size'		=> ['BINT', 0],
						'ver_version'		=> ['VCHAR:32', ''],
						'ver_change_time'	=> ['TIMESTAMP', 0],
						'ver_add_time'		=> ['TIMESTAMP', 0],
						'ver_add_user'		=> ['UINT', 0],
						'ver_change_user'	=> ['UINT', 0],
						'ver_text'			=> ['MTEXT_UNI', ''],
						'ver_uid'			=> ['CHAR:8', ''],
						'ver_bitfield'		=> ['VCHAR', ''],
						'ver_flags'			=> ['UINT:11', 0],
						'ver_active'		=> ['BOOL', 0],
					],
					'PRIMARY_KEY'	=> 'ver_id'
				],

				$this->table_prefix . 'dl_ver_files' => [
					'COLUMNS'		=> [
						'ver_file_id'	=> ['UINT', null, 'auto_increment'],
						'dl_id'			=> ['INT:11', 0],
						'ver_id'		=> ['INT:11', 0],
						'real_name'		=> ['VCHAR', ''],
						'file_name'		=> ['VCHAR', ''],
						'file_title'	=> ['VCHAR', ''],
						'file_type'		=> ['BOOL', 0],
					],
					'PRIMARY_KEY'	=> 'ver_file_id'
				],

				$this->table_prefix . 'downloads' => [
					'COLUMNS'		=> [
						'id'					=> ['UINT:11', null, 'auto_increment'],
						'description'			=> ['MTEXT_UNI', ''],
						'file_name'				=> ['VCHAR', ''],
						'klicks'				=> ['INT:11', 0],
						'free'					=> ['BOOL', 0],
						'extern'				=> ['BOOL', 0],
						'long_desc'				=> ['MTEXT_UNI', ''],
						'sort'					=> ['INT:11', 0],
						'cat'					=> ['INT:11', 0],
						'hack_author'			=> ['VCHAR', ''],
						'hack_author_email'		=> ['VCHAR', ''],
						'hack_author_website'	=> ['TEXT_UNI', ''],
						'hack_version'			=> ['VCHAR:32', ''],
						'hack_dl_url'			=> ['TEXT_UNI', ''],
						'test'					=> ['VCHAR:50', ''],
						'req'					=> ['MTEXT_UNI', ''],
						'todo'					=> ['MTEXT_UNI', ''],
						'warning'				=> ['MTEXT_UNI', ''],
						'mod_desc'				=> ['MTEXT_UNI', ''],
						'mod_list'				=> ['BOOL', 0],
						'file_size'				=> ['BINT', 0],
						'change_time'			=> ['TIMESTAMP', 0],
						'rating'				=> ['INT:5', 0],
						'overall_klicks'		=> ['INT:11', 0],
						'approve'				=> ['BOOL', 0],
						'add_time'				=> ['TIMESTAMP', 0],
						'add_user'				=> ['UINT', 0],
						'change_user'			=> ['UINT', 0],
						'last_time'				=> ['TIMESTAMP', 0],
						'down_user'				=> ['UINT', 0],
						'broken'				=> ['BOOL', 0],
						'mod_desc_uid'			=> ['CHAR:8', ''],
						'mod_desc_bitfield'		=> ['VCHAR', ''],
						'mod_desc_flags'		=> ['UINT:11', 0],
						'long_desc_uid'			=> ['CHAR:8', ''],
						'long_desc_bitfield'	=> ['VCHAR', ''],
						'long_desc_flags'		=> ['UINT:11', 0],
						'desc_uid'				=> ['CHAR:8', ''],
						'desc_bitfield'			=> ['VCHAR', ''],
						'desc_flags'			=> ['UINT:11', 0],
						'warn_uid'				=> ['CHAR:8', ''],
						'warn_bitfield'			=> ['VCHAR', ''],
						'warn_flags'			=> ['UINT:11', 0],
						'dl_topic'				=> ['UINT:11', 0],
						'real_file'				=> ['VCHAR', ''],
						'todo_uid'				=> ['CHAR:8', ''],
						'todo_bitfield'			=> ['VCHAR', ''],
						'todo_flags'			=> ['UINT:11', 0],
						'file_hash'				=> ['VCHAR:255', ''],
					],
					'PRIMARY_KEY'	=> 'id'
				],

				$this->table_prefix . 'downloads_cat' => [
					'COLUMNS'		=> [
						'id'					=> ['UINT:11', null, 'auto_increment'],
						'parent'				=> ['INT:11', 0],
						'path'					=> ['VCHAR', ''],
						'cat_name'				=> ['VCHAR', ''],
						'sort'					=> ['INT:11', 0],
						'description'			=> ['MTEXT_UNI', ''],
						'rules'					=> ['MTEXT_UNI', ''],
						'auth_view'				=> ['BOOL', 1],
						'auth_dl'				=> ['BOOL', 1],
						'auth_up'				=> ['BOOL', 0],
						'auth_mod'				=> ['BOOL', 0],
						'must_approve'			=> ['BOOL', 0],
						'allow_mod_desc'		=> ['BOOL', 0],
						'statistics'			=> ['BOOL', 1],
						'stats_prune'			=> ['UINT', 0],
						'comments'				=> ['BOOL', 1],
						'allow_thumbs'			=> ['BOOL', 0],
						'auth_cread'			=> ['BOOL', 0],
						'auth_cpost'			=> ['BOOL', 1],
						'approve_comments'		=> ['BOOL', 1],
						'desc_uid'				=> ['CHAR:8', ''],
						'desc_bitfield'			=> ['VCHAR', ''],
						'desc_flags'			=> ['UINT:11', 0],
						'rules_uid'				=> ['CHAR:8', ''],
						'rules_bitfield'		=> ['VCHAR', ''],
						'rules_flags'			=> ['UINT:11', 0],
						'dl_topic_forum'		=> ['INT:11', 0],
						'dl_topic_text'			=> ['MTEXT_UNI', ''],
						'cat_icon'				=> ['VCHAR', ''],
						'diff_topic_user'		=> ['BOOL', 0],
						'topic_user'			=> ['UINT:11', 0],
						'topic_more_details'	=> ['BOOL', 1],
						'dl_topic_type'			=> ['BOOL', POST_NORMAL],
						'show_file_hash'		=> ['BOOL', 1],
						'dl_set_add'			=> ['UINT:11', 0],
						'dl_set_user'			=> ['UINT:11', 0],
						'max_thumbs'			=> ['UINT', 10],
						'display_thumbs'		=> ['BOOL', 0],
					],
					'PRIMARY_KEY'	=> 'id'
				],
			],

			'add_columns'	=> [
				$this->table_prefix . 'groups'	=> [
					'group_dl_auto_traffic'	=> ['BINT', 0],
				],
				$this->table_prefix . 'users'	=> [
					'user_dl_sort_dir'		=> ['BOOL', 0],
					'user_dl_sort_fix'		=> ['BOOL', 0],
					'user_dl_sort_opt'		=> ['BOOL', 0],
					'user_dl_sub_on_index'	=> ['BOOL', 1],
					'user_dl_update_time'	=> ['TIMESTAMP', 0],
					'user_traffic'			=> ['BINT', 0],
					'user_dl_auto_fav'		=> ['BOOL', 0],
				],
			],
		];
	}

	public function revert_schema()
	{
		return [
			'drop_tables' => [
				$this->table_prefix . 'dl_auth',
				$this->table_prefix . 'dl_comments',
				$this->table_prefix . 'dl_ext_blacklist',
				$this->table_prefix . 'dl_favorites',
				$this->table_prefix . 'dl_hotlink',
				$this->table_prefix . 'dl_images',
				$this->table_prefix . 'dl_ratings',
				$this->table_prefix . 'dl_reports',
				$this->table_prefix . 'dl_stats',
				$this->table_prefix . 'dl_versions',
				$this->table_prefix . 'dl_ver_files',
				$this->table_prefix . 'downloads',
				$this->table_prefix . 'downloads_cat',
			],

			'drop_columns'	=> [
				$this->table_prefix . 'groups' => ['group_dl_auto_traffic'],
				$this->table_prefix . 'users' => [
					'user_dl_sort_dir',
					'user_dl_sort_fix',
					'user_dl_sort_opt',
					'user_dl_sub_on_index',
					'user_dl_update_time',
					'user_traffic',
					'user_dl_auto_fav',
				],
			],
		];
	}
}
