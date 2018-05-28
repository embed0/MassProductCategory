<?php
/**
 * Created by PhpStorm.
 * User: The_Boss
 * Date: 2018-05-28
 * Time: 20:57
 */

namespace Aurora\MassProductCategory\Setup;


use Magento\Eav\Setup\EavSetup;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;


class InstallData implements InstallDataInterface
{
    private $eavSetupFactory;
    /**
     * Init
     *
     * @param EavSetupFactory $eavSetupFactory
     */
    public function __construct(EavSetupFactory $eavSetupFactory)
    {
        $this->eavSetupFactory = $eavSetupFactory;
    }

    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        /** @var EavSetup $eavSetup */
        $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
        /**
         * Add attributes to the eav/attribute
         */
        $eavSetup->addAttribute(
            \Magento\Catalog\Model\Category::ENTITY,
            'multi_custom_attribute',
            [
                'type' => 'text',
                'label' => 'Custom Attribute Description',
                'input' => 'multiselect',
                'required' => false,

                'source' => 'Aurora\MassProductCategory\Model\Category\Attribute\Source\Custom',
                'backend' => 'Aurora\MassProductCategory\Model\Category\Attribute\Backend\Custom',
                'input_renderer' => 'Aurora\MassProductCategory\Block\Adminhtml\Category\Helper\Custom\Options',

                'sort_order' => 100,
                'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_STORE,
                'group' => 'General Information',
                'is_used_in_grid' => true,
                'is_visible_in_grid' => false,
                'is_filterable_in_grid' => true,
            ]
        );


    }
}