<?php
namespace Training\Msg\Block;

use Magento\Framework\View\Element\Template;

class Msg extends Template
{
    public function __construct(Template\Context $context, array $data = [])
    {
        parent::__construct($context, $data);
    }

    public function getTitle()
    {
        return "Test Message";
    }
}