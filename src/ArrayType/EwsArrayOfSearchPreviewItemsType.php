<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSearchPreviewItemsType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: Array of search preview item.
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfSearchPreviewItemsType extends AbstractStructArrayBase
{
    /**
     * The SearchPreviewItem
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsSearchPreviewItemType[]
     */
    public $SearchPreviewItem;
    /**
     * Constructor method for ArrayOfSearchPreviewItemsType
     * @uses EwsArrayOfSearchPreviewItemsType::setSearchPreviewItem()
     * @param \Ews\StructType\EwsSearchPreviewItemType[] $searchPreviewItem
     */
    public function __construct(array $searchPreviewItem = array())
    {
        $this
            ->setSearchPreviewItem($searchPreviewItem);
    }
    /**
     * Get SearchPreviewItem value
     * @return \Ews\StructType\EwsSearchPreviewItemType[]|null
     */
    public function getSearchPreviewItem()
    {
        return $this->SearchPreviewItem;
    }
    /**
     * Set SearchPreviewItem value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSearchPreviewItemType[] $searchPreviewItem
     * @return \Ews\ArrayType\EwsArrayOfSearchPreviewItemsType
     */
    public function setSearchPreviewItem(array $searchPreviewItem = array())
    {
        foreach ($searchPreviewItem as $arrayOfSearchPreviewItemsTypeSearchPreviewItemItem) {
            // validation for constraint: itemType
            if (!$arrayOfSearchPreviewItemsTypeSearchPreviewItemItem instanceof \Ews\StructType\EwsSearchPreviewItemType) {
                throw new \InvalidArgumentException(sprintf('The SearchPreviewItem property can only contain items of \Ews\StructType\EwsSearchPreviewItemType, "%s" given', is_object($arrayOfSearchPreviewItemsTypeSearchPreviewItemItem) ? get_class($arrayOfSearchPreviewItemsTypeSearchPreviewItemItem) : gettype($arrayOfSearchPreviewItemsTypeSearchPreviewItemItem)), __LINE__);
            }
        }
        $this->SearchPreviewItem = $searchPreviewItem;
        return $this;
    }
    /**
     * Add item to SearchPreviewItem value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSearchPreviewItemType $item
     * @return \Ews\ArrayType\EwsArrayOfSearchPreviewItemsType
     */
    public function addToSearchPreviewItem(\Ews\StructType\EwsSearchPreviewItemType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsSearchPreviewItemType) {
            throw new \InvalidArgumentException(sprintf('The SearchPreviewItem property can only contain items of \Ews\StructType\EwsSearchPreviewItemType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SearchPreviewItem[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsSearchPreviewItemType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsSearchPreviewItemType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsSearchPreviewItemType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsSearchPreviewItemType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsSearchPreviewItemType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SearchPreviewItem
     */
    public function getAttributeName()
    {
        return 'SearchPreviewItem';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfSearchPreviewItemsType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
