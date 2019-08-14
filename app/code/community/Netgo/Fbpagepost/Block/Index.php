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
 
require_once "fb/facebook.php";

  class Netgo_Fbpagepost_Block_Index extends Mage_Core_Block_Template{   

      public function __construct(){
        parent::__construct();
		$helper = Mage::helper('fbpagepost');	
         $config = array();
         $config['appId'] =  Mage::getStoreConfig('facebookpage/facebookpagepost/appid');
         $config['secret'] =  Mage::getStoreConfig('facebookpage/facebookpagepost/appkeay');
         $config['fileUpload'] = true; 
         $facebook = new Facebook($config);
         $pageid =  Mage::getStoreConfig('facebookpage/facebookpagepost/pageid');
         $pagefeed = $facebook->api("/" . $pageid . "/posts?fields=attachments,id,object_id,message,description,full_picture,source,created_time");
	     $this->setFbpagepost($pagefeed);
		 
		
}

 
}