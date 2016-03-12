<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAddressEntitiesType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfAddressEntitiesType extends AbstractStructArrayBase
{
    /**
     * The AddressEntity
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsAddressEntityType[]
     */
    public $AddressEntity;
    /**
     * Constructor method for ArrayOfAddressEntitiesType
     * @uses EwsArrayOfAddressEntitiesType::setAddressEntity()
     * @param \Ews\StructType\EwsAddressEntityType[] $addressEntity
     */
    public function __construct(array $addressEntity = array())
    {
        $this
            ->setAddressEntity($addressEntity);
    }
    /**
     * Get AddressEntity value
     * @return \Ews\StructType\EwsAddressEntityType[]|null
     */
    public function getAddressEntity()
    {
        return $this->AddressEntity;
    }
    /**
     * Set AddressEntity value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsAddressEntityType[] $addressEntity
     * @return \Ews\ArrayType\EwsArrayOfAddressEntitiesType
     */
    public function setAddressEntity(array $addressEntity = array())
    {
        foreach ($addressEntity as $arrayOfAddressEntitiesTypeAddressEntityItem) {
            // validation for constraint: itemType
            if (!$arrayOfAddressEntitiesTypeAddressEntityItem instanceof \Ews\StructType\EwsAddressEntityType) {
                throw new \InvalidArgumentException(sprintf('The AddressEntity property can only contain items of \Ews\StructType\EwsAddressEntityType, "%s" given', is_object($arrayOfAddressEntitiesTypeAddressEntityItem) ? get_class($arrayOfAddressEntitiesTypeAddressEntityItem) : gettype($arrayOfAddressEntitiesTypeAddressEntityItem)), __LINE__);
            }
        }
        $this->AddressEntity = $addressEntity;
        return $this;
    }
    /**
     * Add item to AddressEntity value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsAddressEntityType $item
     * @return \Ews\ArrayType\EwsArrayOfAddressEntitiesType
     */
    public function addToAddressEntity(\Ews\StructType\EwsAddressEntityType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsAddressEntityType) {
            throw new \InvalidArgumentException(sprintf('The AddressEntity property can only contain items of \Ews\StructType\EwsAddressEntityType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AddressEntity[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsAddressEntityType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsAddressEntityType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsAddressEntityType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsAddressEntityType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsAddressEntityType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AddressEntity
     */
    public function getAttributeName()
    {
        return 'AddressEntity';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfAddressEntitiesType
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
