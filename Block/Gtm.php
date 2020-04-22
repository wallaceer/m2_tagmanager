<?php

namespace Ws\Tagmanager\Block;


use Ws\Tagmanager\Helper\Data;

/**
 * Class Customergroups
 * @package Ws\Customer\Block
 */
Class Gtm extends \Magento\Framework\View\Element\Template {

    public $_gtm;

    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        array $data = [],
        Data $gtm
    ) {
        $this->_gtm = $gtm;
        parent::__construct($context, $data);
    }

    public function getGtmHeader(): string {
        return $this->_gtm->getConfiguredHeader() ?? '';
    }

    public function getGtmBody(): string {
        return $this->_gtm->getConfiguredBody() ?? '';

    }
    
}