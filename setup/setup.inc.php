<?php
/**
 * EGroupware - Devtools
 *
 * @link http://www.egroupware.org
 * @license http://opensource.org/licenses/gpl-license.php GPL - GNU General Public License
 * @author Hadi Nategh <hn@egroupware.org>
 * @copyright 2020 Hadi Nategh <hn@egroupware.org>
 * @package devtools
 * @subpackage setup
 * @version $Id$
 */

$setup_info['devtools']['name'] = 'devtools';
$setup_info['devtools']['version'] = '20.1';
$setup_info['devtools']['app_order'] = 60;
$setup_info['devtools']['enable'] = 1;
$setup_info['devtools']['index'] = array('menuaction' => 'devtools.EGroupware\\Devtools\\Ui.index&ajax=true');

$setup_info['devtools']['author'] = 'Hadi Nategh';
$setup_info['devtools']['maintainer']= array(
	'name'  => 'Hadi Nategh',
	'email' => 'hn@egroupware.org'
);

$setup_info['devtools']['license']   = 'GPL';

$setup_info['devtools']['hooks']['sidebox_menu'] = \EGroupware\Devtools\Hooks::class.'::menu';

/* Dependencies for this app to work */
$setup_info['devtools']['depends'][] = array(
	'appname' => 'api',
	'versions' => Array('19.1')
);