<?php
class Creare_DynamicSitemap_IndexController extends Mage_Core_Controller_Front_Action
{
	
	protected function _prepareLayout() {
		
		if ($headBlock = $this->getLayout()->getBlock('head')) {
			$headBlock->setTitle($title);
		}
		
		return parent::_prepareLayout();			
	}
	
    public function IndexAction() {
      
	  $this->loadLayout();   
      $this->renderLayout(); 
	  
    }
}