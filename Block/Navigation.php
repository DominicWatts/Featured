<?php

namespace Xigen\Featured\Block;

class Navigation extends \Magento\LayeredNavigation\Block\Navigation
{
    /**
     * Navigation constructor.
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Xigen\Featured\Model\Layer\Resolver $layerResolver
     * @param \Magento\Catalog\Model\Layer\FilterList $filterList
     * @param \Magento\Catalog\Model\Layer\AvailabilityFlagInterface $visibilityFlag
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Xigen\Featured\Model\Layer\Resolver $layerResolver,
        \Magento\Catalog\Model\Layer\FilterList $filterList,
        \Magento\Catalog\Model\Layer\AvailabilityFlagInterface $visibilityFlag,
        array $data = []
    ) {
        parent::__construct(
            $context,
            $layerResolver,
            $filterList,
            $visibilityFlag,
            $data
        );
    }
}
