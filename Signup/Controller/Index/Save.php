<?php
 
namespace Luka\Signup\Controller\Index;

class Save extends \Magento\Framework\App\Action\Action {
     protected $_pageFactory;
     protected $_userFactory;
 
     public function __construct(
          \Magento\Framework\App\Action\Context $context,
          \Magento\Framework\View\Result\PageFactory $pageFactory,
          \Luka\Signup\Model\UserFactory $userFactory
     ){
          $this->_pageFactory = $pageFactory;
          $this->_userFactory = $userFactory;
          return parent::__construct($context);
     }
 
     public function execute()
    {
        try {
            $data = (array)$this->getRequest()->getParams();
            if ($data) {
                $model = $this->_userFactory->create();
                $model->setData($data)->save();
                $this->messageManager->addSuccessMessage(__("Signed up Successfully."));
            }
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage($e, __("We can\'t submit your request, Please try again."));
        }
        return $this->_redirect('signup/index/index');
    }
}
