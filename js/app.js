"use strict";
/**
 * EGroupware - Devtools
 *
 * @link http://www.egroupware.org
 * @package devtools
 * @author Hadi Nategh <hn-At-egroupware.org>
 * @copyright (c) 2020 by Hadi Nategh <hn-At-egroupware.org>
 * @license http://opensource.org/licenses/gpl-license.php GPL - GNU General Public License
 */
var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (b.hasOwnProperty(p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
Object.defineProperty(exports, "__esModule", { value: true });
/*egw:uses
    /api/js/jsapi/egw_app.js;
    /devtools/js/widget_browser.js;
 */
var egw_app_1 = require("../../api/js/jsapi/egw_app");
var devtoolsApp = /** @class */ (function (_super) {
    __extends(devtoolsApp, _super);
    /**
     * Constructor
     *
     * @memberOf app.status
     */
    function devtoolsApp() {
        var _this = 
        // call parent
        _super.call(this, 'devtools') || this;
        _this.widgetBrowser = null;
        return _this;
    }
    /**
     * Destructor
     */
    devtoolsApp.prototype.destroy = function (_app) {
        // call parent
        _super.prototype.destroy.call(this, _app);
    };
    /**
     * This function is called when the etemplate2 object is loaded
     * and ready.  If you must store a reference to the et2 object,
     * make sure to clean it up in destroy().
     *
     * @param {etemplate2} _et2 newly ready object
     * @param {string} _name template name
     */
    devtoolsApp.prototype.et2_ready = function (_et2, _name) {
        switch (_name) {
            case 'devtools.widgetBrowser':
                this.widgetBrowser = new widget_browser(_et2);
        }
    };
    devtoolsApp.prototype._widgetBrowser_dtd = function () {
        this.widgetBrowser._dtd_builder();
    };
    return devtoolsApp;
}(egw_app_1.EgwApp));
app.classes.devtools = devtoolsApp;
//# sourceMappingURL=app.js.map