<?php

namespace MagedIn\CourseExample\Setup;

use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\UpgradeDataInterface;

class UpgradeData implements UpgradeDataInterface
{
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        if (version_compare($context->getVersion(), '2.0.2', '<')) {
            $data = [
                'name' => 'Angelina',
                'lastname' => 'Jolie',
                'random' => 35
            ];
            $setup->getConnection()->insert(\MagedIn\CourseExample\Api\Data\ExampleInterface::TABLE, $data);
        }

        if (version_compare($context->getVersion(), '2.0.2', '==') &&
        version_compare($context->getVersion(), '2.0.3', '<')) {
            $data = [
                'name' => 'Julia',
                'lastname' => 'Roberts',
                'random' => 37
            ];
            $setup->getConnection()->insert(\MagedIn\CourseExample\Api\Data\ExampleInterface::TABLE, $data);
        }
    }
}