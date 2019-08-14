<?php
/***************************************
 *** Facebook Page Post ***
 ***************************************
 *
 * @copyright   Copyright (c) 2015
 * @company     NetAttingo Technologies
 * @package     Netgo_Fbpagepost
 * @author 		NetGo
 * @dev			netattingomails@gmail.com
 *
 */
class Mage_Adminhtml_Model_System_Config_Source_Diyoptions14375500494
{

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
		
            array('value' => 0, 'label'=>Mage::helper('adminhtml')->__('List')),
            array('value' => 1, 'label'=>Mage::helper('adminhtml')->__('Grid')),
        );
    }

}
