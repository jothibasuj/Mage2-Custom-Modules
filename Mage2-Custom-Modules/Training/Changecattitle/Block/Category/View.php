<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Training\Changecattitle\Block\Category;

/**
 * Class View
 * @package Magento\Catalog\Block\Category
 */
class View extends \Magento\Catalog\Block\Category\View
{
    
    protected function _prepareLayout()
    {
        \Magento\Framework\View\Element\Template::_prepareLayout();

        $this->getLayout()->createBlock('Magento\Catalog\Block\Breadcrumbs');

        $category = $this->getCurrentCategory();
        if ($category) {
            $pageMainTitle = $this->getLayout()->getBlock('page.main.title');
                    $pageMainTitle->setPageTitle($this->getCurrentCategory()->getName()."qwerty123456hkk");
        }

        return $this;
    }

    
}
