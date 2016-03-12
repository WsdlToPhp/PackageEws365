<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfNonIndexableItemDetailsType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: Array of non indexable item details.
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfNonIndexableItemDetailsType extends AbstractStructArrayBase
{
    /**
     * The NonIndexableItemDetail
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsNonIndexableItemDetailType[]
     */
    public $NonIndexableItemDetail;
    /**
     * Constructor method for ArrayOfNonIndexableItemDetailsType
     * @uses EwsArrayOfNonIndexableItemDetailsType::setNonIndexableItemDetail()
     * @param \Ews\StructType\EwsNonIndexableItemDetailType[] $nonIndexableItemDetail
     */
    public function __construct(array $nonIndexableItemDetail = array())
    {
        $this
            ->setNonIndexableItemDetail($nonIndexableItemDetail);
    }
    /**
     * Get NonIndexableItemDetail value
     * @return \Ews\StructType\EwsNonIndexableItemDetailType[]|null
     */
    public function getNonIndexableItemDetail()
    {
        return $this->NonIndexableItemDetail;
    }
    /**
     * Set NonIndexableItemDetail value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsNonIndexableItemDetailType[] $nonIndexableItemDetail
     * @return \Ews\ArrayType\EwsArrayOfNonIndexableItemDetailsType
     */
    public function setNonIndexableItemDetail(array $nonIndexableItemDetail = array())
    {
        foreach ($nonIndexableItemDetail as $arrayOfNonIndexableItemDetailsTypeNonIndexableItemDetailItem) {
            // validation for constraint: itemType
            if (!$arrayOfNonIndexableItemDetailsTypeNonIndexableItemDetailItem instanceof \Ews\StructType\EwsNonIndexableItemDetailType) {
                throw new \InvalidArgumentException(sprintf('The NonIndexableItemDetail property can only contain items of \Ews\StructType\EwsNonIndexableItemDetailType, "%s" given', is_object($arrayOfNonIndexableItemDetailsTypeNonIndexableItemDetailItem) ? get_class($arrayOfNonIndexableItemDetailsTypeNonIndexableItemDetailItem) : gettype($arrayOfNonIndexableItemDetailsTypeNonIndexableItemDetailItem)), __LINE__);
            }
        }
        $this->NonIndexableItemDetail = $nonIndexableItemDetail;
        return $this;
    }
    /**
     * Add item to NonIndexableItemDetail value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsNonIndexableItemDetailType $item
     * @return \Ews\ArrayType\EwsArrayOfNonIndexableItemDetailsType
     */
    public function addToNonIndexableItemDetail(\Ews\StructType\EwsNonIndexableItemDetailType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsNonIndexableItemDetailType) {
            throw new \InvalidArgumentException(sprintf('The NonIndexableItemDetail property can only contain items of \Ews\StructType\EwsNonIndexableItemDetailType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->NonIndexableItemDetail[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsNonIndexableItemDetailType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsNonIndexableItemDetailType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsNonIndexableItemDetailType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsNonIndexableItemDetailType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsNonIndexableItemDetailType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string NonIndexableItemDetail
     */
    public function getAttributeName()
    {
        return 'NonIndexableItemDetail';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfNonIndexableItemDetailsType
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
