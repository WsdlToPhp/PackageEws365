<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSearchPreviewItemsType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Array of search preview item.
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfSearchPreviewItemsType extends AbstractStructArrayBase
{
    /**
     * The SearchPreviewItem
     * Meta information extracted from the WSDL
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
     * This method is responsible for validating the values passed to the setSearchPreviewItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSearchPreviewItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSearchPreviewItemForArrayConstraintsFromSetSearchPreviewItem(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSearchPreviewItemsTypeSearchPreviewItemItem) {
            // validation for constraint: itemType
            if (!$arrayOfSearchPreviewItemsTypeSearchPreviewItemItem instanceof \Ews\StructType\EwsSearchPreviewItemType) {
                $invalidValues[] = is_object($arrayOfSearchPreviewItemsTypeSearchPreviewItemItem) ? get_class($arrayOfSearchPreviewItemsTypeSearchPreviewItemItem) : sprintf('%s(%s)', gettype($arrayOfSearchPreviewItemsTypeSearchPreviewItemItem), var_export($arrayOfSearchPreviewItemsTypeSearchPreviewItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SearchPreviewItem property can only contain items of type \Ews\StructType\EwsSearchPreviewItemType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set SearchPreviewItem value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSearchPreviewItemType[] $searchPreviewItem
     * @return \Ews\ArrayType\EwsArrayOfSearchPreviewItemsType
     */
    public function setSearchPreviewItem(array $searchPreviewItem = array())
    {
        // validation for constraint: array
        if ('' !== ($searchPreviewItemArrayErrorMessage = self::validateSearchPreviewItemForArrayConstraintsFromSetSearchPreviewItem($searchPreviewItem))) {
            throw new \InvalidArgumentException($searchPreviewItemArrayErrorMessage, __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The SearchPreviewItem property can only contain items of type \Ews\StructType\EwsSearchPreviewItemType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
}
