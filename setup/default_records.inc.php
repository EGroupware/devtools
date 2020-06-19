<?php
/**
 * EGroupware Devtools - setup
 *
 * @link www.egroupware.org
 * @license http://opensource.org/licenses/gpl-license.php GPL - GNU General Public License
 * @author Hadi Nategh <hn@egroupware.org>
 * @copyright (c) 2020 by Hadi Nategh <hn@egroupware.org>
 * @package devtools
 */

foreach(array('Admins' => 'Admin') as $account_lid => $name)
{
	$account_id = $GLOBALS['egw_setup']->add_account($account_lid, $name, 'Group', False, False);
	$GLOBALS['egw_setup']->add_acl('devtools', 'run', $account_id);
}
