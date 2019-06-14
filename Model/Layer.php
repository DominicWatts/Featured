<?php
namespace Xigen\Featured\Model;

use Magento\Catalog\Api\CategoryRepositoryInterface;
use Magento\Catalog\Model\ResourceModel\Product\Attribute\CollectionFactory as AttributeCollectionFactory;
use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory;

/**
 * Layer class
 */
class Layer extends \Magento\Catalog\Model\Layer
{
    public function __construct(
        \Magento\Catalog\Model\Layer\ContextInterface $context,
        \Magento\Catalog\Model\Layer\StateFactory $layerStateFactory,
        AttributeCollectionFactory $attributeCollectionFactory,
        \Magento\Catalog\Model\ResourceModel\Product $catalogProduct,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Framework\Registry $registry,
        CategoryRepositoryInterface $categoryRepository,
        CollectionFactory $productCollectionFactory,
        array $data = []
    ) {
        $this->productCollectionFactory = $productCollectionFactory;
        parent::__construct(
            $context,
            $layerStateFactory,
            $attributeCollectionFactory,
            $catalogProduct,
            $storeManager,
            $registry,
            $categoryRepository,
            $data
        );
    }

    public function getProductCollection()
    {
        if (isset($this->_productCollections['xigen_custom'])) {
            $collection = $this->_productCollections['xigen_custom'];
        } else {
            $collection = $this->productCollectionFactory->create();
            $collection->addAttributeToFilter('featured', ['eq' => 1]);
         
            $this->prepareProductCollection($collection);
            $this->_productCollections['xigen_custom'] = $collection;
        }
        return $collection;
    }
}
