<?php

namespace Luka\Signup\Block;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Store\Model\ScopeInterface;


class Index extends \Magento\Framework\View\Element\Template
{
    

    /**
     * @var ScopeConfigInterface
     */
    private ScopeConfigInterface $scopeConfig;
    /**
     * @var StoreManagerInterface
     */
    
    /**
     * @param ScopeConfigInterface $scopeConfig
     * @param StoreManagerInterface $storeManager
     * @param Context $context
     * @param array $data
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig,
        Template\Context $context, array $data = []
    ) {
        parent::__construct($context, $data);
        $this->scopeConfig = $scopeConfig;
        
    }

    /**
     * @return string
     */
    public function getFormAction() {
        return $this->getUrl('signup/index/save');
    }

    /**
     * @return bool
     * @throws NoSuchEntityException
     */
    public function getIsFormEnabled() {
        return $this->scopeConfig->getValue(
            'signup/general/enable',
            ScopeInterface::SCOPE_STORE,
        );
    }
}
