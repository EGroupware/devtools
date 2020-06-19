<?php
/**
 * EGroupware  eTemplate2 widget browser
 *
 * @link http://www.egroupware.org
 * @author Nathan Gray
 * @copyright 2013 Nathan Gray
 * @license http://opensource.org/licenses/gpl-license.php GPL - GNU General Public License
 * @package devtools
 * @version $Id$
 */

namespace EGroupware\Devtools;

use EGroupware\Api;

/**
 * eTemplate2 widget browser
 *
 * View & play with et2 widgets.  Most of the good stuff happens
 * on the client side via js, this is the server side.
 */
class WidgetBrowser
{

	public $public_functions = array(
		'index'	=>	true
	);

	public static function index()
	{
		$tpl = new Api\Etemplate('devtools.widgetBrowser');
		
		Api\Framework::includeCSS('devtools','widget_browser',false);

		$tpl->exec('devtools.EGroupware\\Devtools\\WidgetBrowser.index', [],[]);
	}
}
