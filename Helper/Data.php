<?php

namespace Ws\Tagmanager\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{

    public function getConfig($path = '')
    {
        if ($path) return $this->scopeConfig->getValue($path, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        return $this->scopeConfig;
    }


    public function getConfiguredHeader(){
        return $this->getConfig('ws_tagmanager/ws_tm/ws_tm_header');
    }

    public function getConfiguredBody(){
        return $this->getConfig('ws_tagmanager/ws_tm/ws_tm_body');
    }

}