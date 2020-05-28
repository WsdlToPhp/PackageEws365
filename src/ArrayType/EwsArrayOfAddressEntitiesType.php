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
     * Meta information extracted from the WSDL
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
     * This method is responsible for validating the values passed to the setAddressEntity method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAddressEntity method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAddressEntityForArrayConstraintsFromSetAddressEntity(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAddressEntitiesTypeAddressEntityItem) {
            // validation for constraint: itemType
            if (!$arrayOfAddressEntitiesTypeAddressEntityItem instanceof \Ews\StructType\EwsAddressEntityType) {
                $invalidValues[] = is_object($arrayOfAddressEntitiesTypeAddressEntityItem) ? get_class($arrayOfAddressEntitiesTypeAddressEntityItem) : sprintf('%s(%s)', gettype($arrayOfAddressEntitiesTypeAddressEntityItem), var_export($arrayOfAddressEntitiesTypeAddressEntityItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AddressEntity property can only contain items of type \Ews\StructType\EwsAddressEntityType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set AddressEntity value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsAddressEntityType[] $addressEntity
     * @return \Ews\ArrayType\EwsArrayOfAddressEntitiesType
     */
    public function setAddressEntity(array $addressEntity = array())
    {
        // validation for constraint: array
        if ('' !== ($addressEntityArrayErrorMessage = self::validateAddressEntityForArrayConstraintsFromSetAddressEntity($addressEntity))) {
            throw new \InvalidArgumentException($addressEntityArrayErrorMessage, __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The AddressEntity property can only contain items of type \Ews\StructType\EwsAddressEntityType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
}
