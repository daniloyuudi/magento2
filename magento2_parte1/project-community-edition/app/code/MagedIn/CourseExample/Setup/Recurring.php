<?php

namespace MagedIn\CourseExample\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class Recurring implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $bind = ['random' => rand(1000, 9999)];
        $setup->getConnection()->update(\MagedIn\CourseExample\Api\Data\ExampleInterface::TABLE, $bind);

        $setup->endSetup();
    }
}