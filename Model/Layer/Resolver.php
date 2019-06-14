<?php
namespace Xigen\Featured\Model\Layer;

/**
 * Resolver class
 */
class Resolver extends \Magento\Catalog\Model\Layer\Resolver
{
    public function __construct(
        \Magento\Framework\ObjectManagerInterface $objectManager,
        \Xigen\Featured\Model\Layer $layer,
        array $layersPool
    ) {
        $this->layer = $layer;
        parent::__construct($objectManager, $layersPool);
    }

    /**
     * Create layer function
     * @param [type] $layerType
     * @return void
     */
    public function create($layerType)
    {
    }
}