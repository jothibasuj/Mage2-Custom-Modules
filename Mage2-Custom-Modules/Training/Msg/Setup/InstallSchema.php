<?php
namespace Training\Msg\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements InstallSchemaInterface
{
    public  function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        $tableName = $setup->getTable("training_msg");
        if(!$setup->tableExists($tableName)){
            $table = $setup->getConnection()->newTable($tableName)
                    ->addColumn(
                        'id',
                        Table::TYPE_INTEGER,
                        null,
                        [
                            'nullable'  => false,
                            'unsigned'  => true,
                            'identity'  => true,
                            'primary'   => true
                        ],
                    'msg id'
                    )->addColumn(
                        'name',
                        Table::TYPE_TEXT,
                        255,
                        [
                            'nullable' => false
                        ],
                        'name'
                    )->addColumn(
                        'description',
                        Table::TYPE_TEXT,
                        null,
                        [
                            'nullable'  => false,
                        ],
                        'description'
                    )->addColumn(
                        'created_at',
                        Table::TYPE_TIMESTAMP,
                        null,
                        [
                            'nullable' => false,
                            'default' => Table::TIMESTAMP_INIT
                        ],
                        'created at'
                    )->addIndex(
                        'name',
                        'name'
                    )->setComment("welcome msg table");
            $setup->getConnection()->createTable($table);
            $setup->endSetup();

        }
    }
}
