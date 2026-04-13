<?php

/**
 *
 * @package   phpBB Extension - Oxpus Downloads
 * @copyright 2002-2026 OXPUS - www.oxpus.net
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

namespace oxpus\dlext\migrations\v900;

class dl_data extends \phpbb\db\migration\migration
{
	protected $dl_ext_version = '9.0.0';

	public function effectively_installed()
	{
		return isset($this->config['dl_ext_version']) && version_compare($this->config['dl_ext_version'], $this->dl_ext_version, '>=');
	}

	public static function depends_on()
	{
		return ['\oxpus\dlext\migrations\v900\dl_schema'];
	}

	public function update_data()
	{
		$dl_permissions = [
			'a_dl_overview', 'a_dl_config', 'a_dl_categories', 'a_dl_files',
			'a_dl_permissions', 'a_dl_stats', 'a_dl_blacklist', 'a_dl_toolbox',
			'a_dl_perm_check', 'a_dl_assistant',
		];

		$data = [
			// Version
			['config.add', ['dl_ext_version', $this->dl_ext_version]],

			// Core config
			['config.add', ['dl_active', '1']],
			['config.add', ['dl_click_reset_time', '0']],
			['config.add', ['dl_diff_topic_user', '0']],
			['config.add', ['dl_disable_email', '1']],
			['config.add', ['dl_disable_popup_notify', '0']],
			['config.add', ['dl_download_vc', '1']],
			['config.add', ['dl_edit_own_downloads', '1']],
			['config.add', ['dl_edit_time', '3']],
			['config.add', ['dl_enable_dl_topic', '0']],
			['config.add', ['dl_enable_jumpbox', '1']],
			['config.add', ['dl_enable_post_dl_traffic', '1']],
			['config.add', ['dl_enable_rate', '1']],
			['config.add', ['dl_ext_new_window', '0']],
			['config.add', ['dl_file_hash_algo', 'md5']],
			['config.add', ['dl_guest_stats_show', '1']],
			['config.add', ['dl_global_guests', '1']],
			['config.add', ['dl_global_bots', '0']],
			['config.add', ['dl_hotlink_action', '1']],
			['config.add', ['dl_icon_free_for_reg', '0']],
			['config.add', ['dl_index_desc_hide', '0']],
			['config.add', ['dl_limit_desc_on_index', '0']],
			['config.add', ['dl_links_per_page', '10']],
			['config.add', ['dl_mini_stats_ext', '0']],
			['config.add', ['dl_new_time', '3']],
			['config.add', ['dl_off_from', '00:00']],
			['config.add', ['dl_off_hide', '1']],
			['config.add', ['dl_off_now_time', '0']],
			['config.add', ['dl_off_till', '23:59']],
			['config.add', ['dl_on_admins', '1']],
			['config.add', ['dl_overview_link_onoff', '1']],
			['config.add', ['dl_physical_quota', '524288000']],
			['config.add', ['dl_prevent_hotlink', '1']],
			['config.add', ['dl_rate_points', '5']],
			['config.add', ['dl_report_broken', '1']],
			['config.add', ['dl_report_broken_lock', '1']],
			['config.add', ['dl_report_broken_message', '1']],
			['config.add', ['dl_report_broken_vc', '1']],
			['config.add', ['dl_set_add', '0']],
			['config.add', ['dl_set_user', '0']],
			['config.add', ['dl_shorten_extern_links', '10']],
			['config.add', ['dl_show_footer_legend', '1']],
			['config.add', ['dl_show_footer_stat', '1']],
			['config.add', ['dl_show_real_filetime', '1']],
			['config.add', ['dl_similar_dl', '1']],
			['config.add', ['dl_similar_limit', '10']],
			['config.add', ['dl_sort_preform', '0']],
			['config.add', ['dl_stats_perm', '0']],
			['config.add', ['dl_stop_uploads', '0']],
			['config.add', ['dl_todo_link_onoff', '1']],
			['config.add', ['dl_todo_onoff', '1']],
			['config.add', ['dl_topic_forum', '']],
			['config.add', ['dl_topic_more_details', '1']],
			['config.add', ['dl_topic_post_catname', '0']],
			['config.add', ['dl_topic_text', '']],
			['config.add', ['dl_topic_title_catname', '0']],
			['config.add', ['dl_topic_type', POST_NORMAL]],
			['config.add', ['dl_topic_user', '0']],
			['config.add', ['dl_traffics_overall_groups', '']],
			['config.add', ['dl_traffics_users_groups', '']],
			['config.add', ['dl_traffic_retime', '0']],
			['config.add', ['dl_user_dl_auto_traffic', '0']],
			['config.add', ['dl_user_traffic_once', '0']],
			['config.add', ['dl_enable_blacklist', '0']],
			['config.add', ['dl_use_ext_blacklist', '1']],
			['config.add', ['dl_cat_edit', '1']],

			// RSS config
			['config.add', ['dl_rss_cats', '0']],
			['config.add', ['dl_rss_cats_select', '-']],
			['config.add', ['dl_rss_desc_length', '0']],
			['config.add', ['dl_rss_desc_shorten', '150']],
			['config.add', ['dl_rss_enable', '0']],
			['config.add', ['dl_rss_new_update', '0']],
			['config.add', ['dl_rss_number', '10']],
			['config.add', ['dl_rss_off_action', '0']],
			['config.add', ['dl_rss_off_text', 'Dieser Feed ist aktuell offline. / This feed is currently offline.']],
			['config.add', ['dl_rss_perms', '1']],
			['config.add', ['dl_rss_select', '0']],

			// Navigation config
			['config.add', ['dl_nav_link_main', 'OHNA']],

			// Description/search config
			['config.add', ['dl_latest_type', '1']],
			['config.add', ['dl_desc_index', '1']],
			['config.add', ['dl_desc_search', '1']],
			['config.add', ['dl_limit_desc_on_search', '0']],

			// File edit hint (config_text)
			['config_text.add', ['dl_file_edit_hint', '']],
			['config.add', ['dl_file_edit_hint_bbcode', '']],
			['config.add', ['dl_file_edit_hint_bitfield', '']],
			['config.add', ['dl_file_edit_hint_flags', '0']],

			// Thumbnail config
			['config.add', ['dl_thumb_fsize', '0']],
			['config.add', ['dl_thumb_xsize', '200']],
			['config.add', ['dl_thumb_ysize', '150']],
			['config.add', ['dl_thumb_xsize_max', '150']],
			['config.add', ['dl_thumb_ysize_max', '150']],
			['config.add', ['dl_thumbs_display_cat', '2']],
			['config.add', ['dl_thumbs_display_latest', '2']],
			['config.add', ['dl_thumbs_display_overall', '2']],
			['config.add', ['dl_thumbs_display_search', '2']],

			// ACP modules
			['module.add', [
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_DOWNLOADS'
			]],
			['module.add', [
				'acp',
				'ACP_DOWNLOADS',
				[
					'module_basename'	=> '\oxpus\dlext\acp\main_module',
					'modes'				=> ['overview', 'config', 'categories', 'files', 'permissions', 'stats', 'ext_blacklist', 'toolbox', 'perm_check', 'assistant'],
				],
			]],

			// UCP modules
			['module.add', [
				'ucp',
				false,
				'DOWNLOADS'
			]],
			['module.add', [
				'ucp',
				'DOWNLOADS',
				[
					'module_basename'	=> '\oxpus\dlext\ucp\main_module',
					'modes'				=> ['ucp_config', 'ucp_favorite', 'ucp_privacy'],
				],
			]],
		];

		// Permissions
		foreach ($dl_permissions as $permission)
		{
			$data[] = ['permission.add', [$permission]];
		}

		// Assign permissions to all admin roles that exist
		foreach (['ROLE_ADMIN_FULL', 'ROLE_ADMIN_STANDARD'] as $role)
		{
			if ($this->role_exists($role))
			{
				foreach ($dl_permissions as $permission)
				{
					$data[] = ['permission.permission_set', [$role, $permission]];
				}
			}
		}

		// Default blacklist extensions
		$data[] = ['custom', [[$this, 'add_default_blacklist_extensions']]];

		return $data;
	}

	protected function role_exists($role)
	{
		$sql = 'SELECT COUNT(role_id) AS role_count
			FROM ' . ACL_ROLES_TABLE . "
			WHERE role_name = '" . $this->db->sql_escape($role) . "'";
		$result = $this->db->sql_query_limit($sql, 1);
		$role_count = $this->db->sql_fetchfield('role_count');
		$this->db->sql_freeresult($result);

		return $role_count > 0;
	}

	public function add_default_blacklist_extensions()
	{
		$blacklist = ['asp', 'cgi', 'dhtm', 'dhtml', 'exe', 'htm', 'html', 'jar', 'js', 'php', 'php3', 'pl', 'sh', 'shtm', 'shtml'];

		$sql_insert = [];
		foreach ($blacklist as $ext)
		{
			$sql_insert[] = ['extention' => $ext];
		}

		$this->db->sql_multi_insert($this->table_prefix . 'dl_ext_blacklist', $sql_insert);
	}
}
