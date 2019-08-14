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
class Netgo_Fbpagepost_Helper_Data extends Mage_Core_Helper_Abstract
{

    public function __construct(){
	
	  
               if(Mage::getStoreConfig('facebookpage/facebookpagepost/fbenable')==0 and (!Mage::app()->getStore()->isAdmin()))
			    {
				
				 Mage::app()->getFrontController()->getResponse()->setRedirect(Mage::getUrl());
				 
				}
		
       		
              }

}
	 
	 