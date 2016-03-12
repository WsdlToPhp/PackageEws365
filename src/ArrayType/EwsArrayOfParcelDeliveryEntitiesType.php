<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfParcelDeliveryEntitiesType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfParcelDeliveryEntitiesType extends AbstractStructArrayBase
{
    /**
     * The ParcelDelivery
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsParcelDeliveryEntityType[]
     */
    public $ParcelDelivery;
    /**
     * Constructor method for ArrayOfParcelDeliveryEntitiesType
     * @uses EwsArrayOfParcelDeliveryEntitiesType::setParcelDelivery()
     * @param \Ews\StructType\EwsParcelDeliveryEntityType[] $parcelDelivery
     */
    public function __construct(array $parcelDelivery = array())
    {
        $this
            ->setParcelDelivery($parcelDelivery);
    }
    /**
     * Get ParcelDelivery value
     * @return \Ews\StructType\EwsParcelDeliveryEntityType[]|null
     */
    public function getParcelDelivery()
    {
        return $this->ParcelDelivery;
    }
    /**
     * Set ParcelDelivery value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsParcelDeliveryEntityType[] $parcelDelivery
     * @return \Ews\ArrayType\EwsArrayOfParcelDeliveryEntitiesType
     */
    public function setParcelDelivery(array $parcelDelivery = array())
    {
        foreach ($parcelDelivery as $arrayOfParcelDeliveryEntitiesTypeParcelDeliveryItem) {
            // validation for constraint: itemType
            if (!$arrayOfParcelDeliveryEntitiesTypeParcelDeliveryItem instanceof \Ews\StructType\EwsParcelDeliveryEntityType) {
                throw new \InvalidArgumentException(sprintf('The ParcelDelivery property can only contain items of \Ews\StructType\EwsParcelDeliveryEntityType, "%s" given', is_object($arrayOfParcelDeliveryEntitiesTypeParcelDeliveryItem) ? get_class($arrayOfParcelDeliveryEntitiesTypeParcelDeliveryItem) : gettype($arrayOfParcelDeliveryEntitiesTypeParcelDeliveryItem)), __LINE__);
            }
        }
        $this->ParcelDelivery = $parcelDelivery;
        return $this;
    }
    /**
     * Add item to ParcelDelivery value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsParcelDeliveryEntityType $item
     * @return \Ews\ArrayType\EwsArrayOfParcelDeliveryEntitiesType
     */
    public function addToParcelDelivery(\Ews\StructType\EwsParcelDeliveryEntityType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsParcelDeliveryEntityType) {
            throw new \InvalidArgumentException(sprintf('The ParcelDelivery property can only contain items of \Ews\StructType\EwsParcelDeliveryEntityType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ParcelDelivery[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsParcelDeliveryEntityType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsParcelDeliveryEntityType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsParcelDeliveryEntityType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsParcelDeliveryEntityType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsParcelDeliveryEntityType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ParcelDelivery
     */
    public function getAttributeName()
    {
        return 'ParcelDelivery';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfParcelDeliveryEntitiesType
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
