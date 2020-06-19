<?php
/**
 * Hooks for Devtools app
 *
 * @link http://www.egroupware.org
 * @author Hadi Nategh <hn-At-egroupware.org>
 * @package Devtools
 * @copyright (c) 2020 by Hadi Nategh <hn-At-egroupware.org>
 * @license http://opensource.org/licenses/gpl-license.php GPL - GNU General Public License
 */

namespace EGroupware\Devtools;

use EGroupware\Api;

class Hooks
{
	/**
	 * App name
	 * var string
	 */
	const APPNAME = 'devtools';

	public static function menu()
	{
		$file = Array(
			'Widget Browser' => Api\Egw::link('/index.php', 'menuaction=devtools.EGroupware\\Devtools\\WidgetBrowser.index&ajax=true'),
		);
		display_sidebox(self::APPNAME, lang('tools'), $file);
	}
}