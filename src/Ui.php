<?php
/**
 * EGroupware  Devtools
 *
 * @link http://www.egroupware.org
 * @author Hadi Nategh
 * @copyright 2020 Hadi Nategh
 * @license http://opensource.org/licenses/gpl-license.php GPL - GNU General Public License
 * @package devtools
 * @version $Id$
 */

namespace EGroupware\Devtools;

use EGroupware\Api;
/**
 * Description of Ui
 *
 */
class Ui {
	public $public_functions = array(
		'index'	=>	true
	);

	public static function index()
	{
		$tpl = new Api\Etemplate('devtools.index');

		$tpl->exec('devtools.EGroupware\\Devtools\\Ui.index', [],[]);
	}
}
