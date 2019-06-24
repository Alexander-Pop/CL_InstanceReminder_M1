<?php
/**
 * This file is part of Codelegacy_InstanceReminder for Magento.
 *
 * @license http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @author Alex P <alexander@codelegacy> <@>
 * @category Codelegacy
 * @package Codelegacy_InstanceReminder
 * @copyright Copyright (c) 2019 Codelegacy 
 */

/**
 * Observer Model
 * @package Codelegacy_InstanceReminder
 */
class Codelegacy_InstanceReminder_Model_Observer extends Mage_Core_Model_Abstract {

    public function setFlag(Varien_Event_Observer $observer) {
        if (!Mage::registry('codelegacy_ir')) {
            Mage::register('codelegacy_ir', true);
        }
    }

}