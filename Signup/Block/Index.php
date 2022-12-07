<?php

namespace Luka\Signup\Block;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Store\Model\ScopeInterface;
//use Magento\Store\Model\StoreManagerInterface;

class Index extends \Magento\Framework\View\Element\Template
{
    //CONST FORM_IS_ENABLED = 'signup/general/enable';

    /**
     * @var ScopeConfigInterface
     */
    private ScopeConfigInterface $scopeConfig;

    /**
     * @var StoreManagerInterface
     */
    //private StoreManagerInterface $storeManager;

    /**
     * @param ScopeConfigInterface $scopeConfig
     * @param StoreManagerInterface $storeManager
     * @param Context $context
     * @param array $data
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig,
        //StoreManagerInterface $storeManager,
        Template\Context $context, array $data = []
    ) {
        parent::__construct($context, $data);
        $this->scopeConfig = $scopeConfig;
        //$this->storeManager = $storeManager;
    }

    /**
     * @return string
     */
    public function getFormAction()
    {
        return $this->getUrl('signup/index/save');
    }

    /**
     * @return bool
     * @throws NoSuchEntityException
     */
    public function getIsFormEnabled()
    {
        return $this->scopeConfig->getValue(
            //self::FORM_IS_ENABLED,
            'signup/general/enable',
            ScopeInterface::SCOPE_STORE,
            //$this->storeManager->getStore()->getId(),
        );
    }
}
