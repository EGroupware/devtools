/**
 * EGroupware - Devtools
 *
 * @link http://www.egroupware.org
 * @package devtools
 * @author Hadi Nategh <hn-At-egroupware.org>
 * @copyright (c) 2020 by Hadi Nategh <hn-At-egroupware.org>
 * @license http://opensource.org/licenses/gpl-license.php GPL - GNU General Public License
 */

/*egw:uses
	/api/js/jsapi/egw_app.js;
	/devtools/js/widget_browser.js;
 */
import {EgwApp} from "../../api/js/jsapi/egw_app";

class devtoolsApp extends EgwApp
{
	widgetBrowser = null;

	/**
	 * Constructor
	 *
	 * @memberOf app.status
	 */
	constructor()
	{
		// call parent
		super('devtools');
	}

	/**
	 * Destructor
	 */
	destroy(_app)
	{
		// call parent
		super.destroy(_app)
	}

	/**
	 * This function is called when the etemplate2 object is loaded
	 * and ready.  If you must store a reference to the et2 object,
	 * make sure to clean it up in destroy().
	 *
	 * @param {etemplate2} _et2 newly ready object
	 * @param {string} _name template name
	 */
	et2_ready(_et2, _name)
	{
		switch(_name)
		{
			case 'devtools.widgetBrowser':

				this.widgetBrowser = new widget_browser(_et2);
		}
	}

	_widgetBrowser_dtd()
	{
		this.widgetBrowser._dtd_builder();
	}
}
app.classes.devtools = devtoolsApp;
