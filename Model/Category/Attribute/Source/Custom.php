<?php
/**
 * Created by PhpStorm.
 * User: The_Boss
 * Date: 2018-05-28
 * Time: 20:58
 */

namespace Aurora\MassProductCategory\Model\Category\Attribute\Source;


class Custom implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => 1, 'label' => __('Test One')],
            ['value' => 2, 'label' => __('Test Two')],
            ['value' => 3, 'label' => __('Test Three')],
        ];
    }
}