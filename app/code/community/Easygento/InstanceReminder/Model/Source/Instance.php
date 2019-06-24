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
 * Source_Instance Model
 * @package Codelegacy_InstanceReminder
 */
class Codelegacy_InstanceReminder_Model_Source_Instance {

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray() {
        return array(
            array('value' => 'develop', 'label'=> Mage::helper('codelegacy_instancereminder')->__('Develop')),
            array('value' => 'preprod', 'label'=> Mage::helper('codelegacy_instancereminder')->__('Preprod')),
            array('value' => 'production', 'label'=> Mage::helper('codelegacy_instancereminder')->__('Production')),
            array('value' => 'custom', 'label'=> Mage::helper('codelegacy_instancereminder')->__('Custom'))
        );
    }

}