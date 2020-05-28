<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSearchRefinerItemsType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Array of search refiner item.
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfSearchRefinerItemsType extends AbstractStructArrayBase
{
    /**
     * The Refiner
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsSearchRefinerItemType[]
     */
    public $Refiner;
    /**
     * Constructor method for ArrayOfSearchRefinerItemsType
     * @uses EwsArrayOfSearchRefinerItemsType::setRefiner()
     * @param \Ews\StructType\EwsSearchRefinerItemType[] $refiner
     */
    public function __construct(array $refiner = array())
    {
        $this
            ->setRefiner($refiner);
    }
    /**
     * Get Refiner value
     * @return \Ews\StructType\EwsSearchRefinerItemType[]|null
     */
    public function getRefiner()
    {
        return $this->Refiner;
    }
    /**
     * This method is responsible for validating the values passed to the setRefiner method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRefiner method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRefinerForArrayConstraintsFromSetRefiner(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSearchRefinerItemsTypeRefinerItem) {
            // validation for constraint: itemType
            if (!$arrayOfSearchRefinerItemsTypeRefinerItem instanceof \Ews\StructType\EwsSearchRefinerItemType) {
                $invalidValues[] = is_object($arrayOfSearchRefinerItemsTypeRefinerItem) ? get_class($arrayOfSearchRefinerItemsTypeRefinerItem) : sprintf('%s(%s)', gettype($arrayOfSearchRefinerItemsTypeRefinerItem), var_export($arrayOfSearchRefinerItemsTypeRefinerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Refiner property can only contain items of type \Ews\StructType\EwsSearchRefinerItemType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Refiner value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSearchRefinerItemType[] $refiner
     * @return \Ews\ArrayType\EwsArrayOfSearchRefinerItemsType
     */
    public function setRefiner(array $refiner = array())
    {
        // validation for constraint: array
        if ('' !== ($refinerArrayErrorMessage = self::validateRefinerForArrayConstraintsFromSetRefiner($refiner))) {
            throw new \InvalidArgumentException($refinerArrayErrorMessage, __LINE__);
        }
        $this->Refiner = $refiner;
        return $this;
    }
    /**
     * Add item to Refiner value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSearchRefinerItemType $item
     * @return \Ews\ArrayType\EwsArrayOfSearchRefinerItemsType
     */
    public function addToRefiner(\Ews\StructType\EwsSearchRefinerItemType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsSearchRefinerItemType) {
            throw new \InvalidArgumentException(sprintf('The Refiner property can only contain items of type \Ews\StructType\EwsSearchRefinerItemType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Refiner[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsSearchRefinerItemType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsSearchRefinerItemType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsSearchRefinerItemType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsSearchRefinerItemType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsSearchRefinerItemType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Refiner
     */
    public function getAttributeName()
    {
        return 'Refiner';
    }
}
