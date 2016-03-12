<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSearchRefinerItemsType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: Array of search refiner item.
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfSearchRefinerItemsType extends AbstractStructArrayBase
{
    /**
     * The Refiner
     * Meta informations extracted from the WSDL
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
     * Set Refiner value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSearchRefinerItemType[] $refiner
     * @return \Ews\ArrayType\EwsArrayOfSearchRefinerItemsType
     */
    public function setRefiner(array $refiner = array())
    {
        foreach ($refiner as $arrayOfSearchRefinerItemsTypeRefinerItem) {
            // validation for constraint: itemType
            if (!$arrayOfSearchRefinerItemsTypeRefinerItem instanceof \Ews\StructType\EwsSearchRefinerItemType) {
                throw new \InvalidArgumentException(sprintf('The Refiner property can only contain items of \Ews\StructType\EwsSearchRefinerItemType, "%s" given', is_object($arrayOfSearchRefinerItemsTypeRefinerItem) ? get_class($arrayOfSearchRefinerItemsTypeRefinerItem) : gettype($arrayOfSearchRefinerItemsTypeRefinerItem)), __LINE__);
            }
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
            throw new \InvalidArgumentException(sprintf('The Refiner property can only contain items of \Ews\StructType\EwsSearchRefinerItemType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfSearchRefinerItemsType
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
