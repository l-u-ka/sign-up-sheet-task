<?php
namespace Luka\Signup\Model\ResourceModel;
class User extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
	
	public function __construct(
		\Magento\Framework\Model\ResourceModel\Db\Context $context
	)
	{
		parent::__construct($context);
	}
	
	protected function _construct()
	{
		$this->_init('luka_signup_data', 'user_id');
	}
	
}
