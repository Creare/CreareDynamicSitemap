<?php   
class Creare_DynamicSitemap_Block_Dynamicsitemap extends Mage_Core_Block_Template{   

	public function getCreareCMSPages(){
		
		$cms = Mage::getModel('cms/page')->getCollection();
		$url = Mage::getBaseUrl();
		$html = "";
		foreach($cms as $cmspage):
			$page = $cmspage->getData();	
			if($page['identifier'] == "no-route" || $page['identifier'] == "enable-cookies" || $page['identifier'] == "empty"){ /* do nothing or something here */ } else {
				if($page['identifier'] == "home"){
					$html .= "<li><a href=\"$url\" title=\"".$page['title']."\">".$page['title']."</a></li>\n"; // this is for a nice local link to home
				} else {
					$html .= "<li><a href=\"$url".$page['identifier']."\" title=\"".$page['title']."\">".$page['title']."</a></li>\n";
				}
			}
		endforeach;
		
		
		return $html;	
	}
	
	public function getCrearePopularProducts(){
	
		/* get the product id's  */
		
		$products = array('4138','4137','4136','4132','4131','4125','4124','4120','3938','3932');
		$html = "";
		
		foreach($products as $productId):                                          
				$product = Mage::getModel('catalog/product')->load($productId);
				$html .= "<li><a href=\"".$product->getUrlPath()."\" title=\"".$product->getName()."\">".$product->getName()."</a></li>\n";
		endforeach;
		
		return $html;
	
	}




}