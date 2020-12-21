<?php

namespace MagedIn\CourseExample\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class InstallData implements InstallDataInterface
{
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $data = [
            'name' => 'Danilo',
            'lastname' => 'Yuudi',
            'random' => 1
        ];

        $setup->getConnection()
            ->insert(\MagedIn\CourseExample\Api\Data\ExampleInterface::TABLE, $data);

        $setup->endSetup();
    }
}