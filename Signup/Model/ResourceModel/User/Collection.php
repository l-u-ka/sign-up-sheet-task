<?php
namespace Luka\Signup\Model\ResourceModel\User;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'user_id';
	protected $_eventPrefix = 'luka_signup_data_collection';
	protected $_eventObject = 'data_collection';
	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('Luka\Signup\Model\User', 'Luka\Signup\Model\ResourceModel\User');
	}
}
