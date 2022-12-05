<?php
namespace Luka\Signup\Setup;
use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;
class UpgradeSchema implements UpgradeSchemaInterface
{
	public function upgrade( SchemaSetupInterface $setup, ModuleContextInterface $context ) {
		$installer = $setup;
		$installer->startSetup();
		if(version_compare($context->getVersion(), '1.3.0', '<')) {
			if (!$installer->tableExists('luka_signup_data')) {
				$table = $installer->getConnection()->newTable(
					$installer->getTable('luka_signup_data')
				)
					->addColumn(
						'user_id',
						\Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
						null,
						[
							'identity' => true,
							'nullable' => false,
							'primary'  => true,
							'unsigned' => true,
						],
						'User ID'
					)
					->addColumn(
						'name',
						\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
						255,
						['nullable => false'],
						'Name'
					)
					->addColumn(
						'date',
						\Magento\Framework\DB\Ddl\Table::TYPE_DATE,
						'64k',
						[],
						'Date'
					)
					
					->setComment('User Table');
				$installer->getConnection()->createTable($table);
				$installer->getConnection()->addIndex(
					$installer->getTable('luka_signup_data'),
					$setup->getIdxName(
						$installer->getTable('luka_signup_data'),
						['name','date'],
						\Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_FULLTEXT
					),
					['name','date'],
					\Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_FULLTEXT
				);
			}
		}
		$installer->endSetup();
	}
}
