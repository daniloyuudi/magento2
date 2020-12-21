<?php

namespace MagedIn\CourseExample\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\DB\Ddl\Table as DBTable;

class InstallSchema implements InstallSchemaInterface
{
    CONST TABLE = 'magedin_course_examples';

    public function install(SchemaSetupInterface $setup, ModuleContextInterface $interface)
    {
        $setup->startSetup();

        $setup->getConnection()->dropTable($setup->getTable(\MagedIn\CourseExample\Api\Data\ExampleInterface::TABLE));

        $table = $setup->getConnection()->newTable(
            $setup->getTable(\MagedIn\CourseExample\Api\Data\ExampleInterface::TABLE)
        )->addColumn(
            'id',
            DBTable::TYPE_SMALLINT,
            null,
            [
                'identity' => true,
                'nullable' => false,
                'primary' => true
            ],
            'Table ID'
        )->addColumn(
            'name',
            DBTable::TYPE_TEXT,
            256,
            [
                'nullable' => true,
            ],
            'Random name.'       
        );

        $setup->getConnection()->createTable($table);

        $setup->endSetup();
    }
}