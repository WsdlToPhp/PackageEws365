<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfNonIndexableItemDetailsType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Array of non indexable item details.
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfNonIndexableItemDetailsType extends AbstractStructArrayBase
{
    /**
     * The NonIndexableItemDetail
     * Meta information extracted from the WSDL
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
     * This method is responsible for validating the values passed to the setNonIndexableItemDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNonIndexableItemDetail method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNonIndexableItemDetailForArrayConstraintsFromSetNonIndexableItemDetail(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfNonIndexableItemDetailsTypeNonIndexableItemDetailItem) {
            // validation for constraint: itemType
            if (!$arrayOfNonIndexableItemDetailsTypeNonIndexableItemDetailItem instanceof \Ews\StructType\EwsNonIndexableItemDetailType) {
                $invalidValues[] = is_object($arrayOfNonIndexableItemDetailsTypeNonIndexableItemDetailItem) ? get_class($arrayOfNonIndexableItemDetailsTypeNonIndexableItemDetailItem) : sprintf('%s(%s)', gettype($arrayOfNonIndexableItemDetailsTypeNonIndexableItemDetailItem), var_export($arrayOfNonIndexableItemDetailsTypeNonIndexableItemDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The NonIndexableItemDetail property can only contain items of type \Ews\StructType\EwsNonIndexableItemDetailType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set NonIndexableItemDetail value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsNonIndexableItemDetailType[] $nonIndexableItemDetail
     * @return \Ews\ArrayType\EwsArrayOfNonIndexableItemDetailsType
     */
    public function setNonIndexableItemDetail(array $nonIndexableItemDetail = array())
    {
        // validation for constraint: array
        if ('' !== ($nonIndexableItemDetailArrayErrorMessage = self::validateNonIndexableItemDetailForArrayConstraintsFromSetNonIndexableItemDetail($nonIndexableItemDetail))) {
            throw new \InvalidArgumentException($nonIndexableItemDetailArrayErrorMessage, __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The NonIndexableItemDetail property can only contain items of type \Ews\StructType\EwsNonIndexableItemDetailType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
}
