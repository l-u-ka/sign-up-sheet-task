<?php
namespace Luka\Signup\Model;
class User extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'luka_signup_data';
	protected $_cacheTag = 'luka_signup_data';
	protected $_eventPrefix = 'luka_signup_data';
	protected function _construct()
	{
		$this->_init('Luka\Signup\Model\ResourceModel\User');
	}
	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}
	public function getDefaultValues()
	{
		$values = [];
		return $values;
	}
}
