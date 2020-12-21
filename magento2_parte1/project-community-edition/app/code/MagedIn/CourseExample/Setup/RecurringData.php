<?php

namespace MagedIn\CourseExample\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class RecurringData implements InstallDataInterface
{
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $bind = ['random' => rand(1000, 9999)];
        $setup->getConnection()->update(
            \MagedIn\CourseExample\Api\Data\ExampleInterface::TABLE,
            $bind,
            'name = "Danilo"'
        );

        $setup->endSetup();
    }
}