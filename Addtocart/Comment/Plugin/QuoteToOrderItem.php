<?php
namespace Addtocart\Comment\Plugin;

class QuoteToOrderItem
{
    /**
     * @param \Magento\Quote\Model\Quote\Item\ToOrderItem $subject
     * @param \Closure $proceed
     * @param \Magento\Quote\Model\Quote\Item\AbstractItem $item
     * @param array $additional
     *
     * @return object $orderItem
     */
    public function aroundConvert(
        \Magento\Quote\Model\Quote\Item\ToOrderItem $subject,
        \Closure $proceed,
        \Magento\Quote\Model\Quote\Item\AbstractItem $item,
        $additional = []
    ) {
        $orderItem = $proceed($item, $additional);
        $orderItem->setCustomComment($item->getCustomComment());
        return $orderItem;
    }
}