<?php
 
namespace Addtocart\Comment\Block\Cart;
 
class AbstractCart
{
 
	public function afterGetItemRenderer(\Magento\Checkout\Block\Cart\AbstractCart $subject, $result)
	{
        $result->setTemplate('Addtocart_Comment::cart/item/default.phtml');
    	return $result;
	}
}