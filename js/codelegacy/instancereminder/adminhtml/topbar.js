/**
 * This file is part of Codelegacy_InstanceReminder for Magento.
 *
 * @license http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @author Alex P <alexander@codelegacy> <Codelegacy>
 * @category Codelegacy
 * @package Codelegacy_InstanceReminder
 */

var instanceReminder = Class.create({
    initialize: function () {
        Event.observe(window, 'scroll', this.checkMageToolbar);
    },
    checkMageToolbar: function () {
        $$('.content-header-floating').each(function (e) {
            if (e.visible()) {
                $('codelegacy_ir').setStyle({'position': 'absolute'});
            } else {
                $('codelegacy_ir').setStyle({'position': 'fixed'});
            }
        });
    }
});
new instanceReminder();