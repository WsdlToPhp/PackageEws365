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
     * Meta information extracted from the WSDL
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
     * This method is responsible for validating the values passed to the setParcelDelivery method
     * This method is willingly generated in order to preserve the one-line inline validation within the setParcelDelivery method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateParcelDeliveryForArrayConstraintsFromSetParcelDelivery(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfParcelDeliveryEntitiesTypeParcelDeliveryItem) {
            // validation for constraint: itemType
            if (!$arrayOfParcelDeliveryEntitiesTypeParcelDeliveryItem instanceof \Ews\StructType\EwsParcelDeliveryEntityType) {
                $invalidValues[] = is_object($arrayOfParcelDeliveryEntitiesTypeParcelDeliveryItem) ? get_class($arrayOfParcelDeliveryEntitiesTypeParcelDeliveryItem) : sprintf('%s(%s)', gettype($arrayOfParcelDeliveryEntitiesTypeParcelDeliveryItem), var_export($arrayOfParcelDeliveryEntitiesTypeParcelDeliveryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ParcelDelivery property can only contain items of type \Ews\StructType\EwsParcelDeliveryEntityType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ParcelDelivery value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsParcelDeliveryEntityType[] $parcelDelivery
     * @return \Ews\ArrayType\EwsArrayOfParcelDeliveryEntitiesType
     */
    public function setParcelDelivery(array $parcelDelivery = array())
    {
        // validation for constraint: array
        if ('' !== ($parcelDeliveryArrayErrorMessage = self::validateParcelDeliveryForArrayConstraintsFromSetParcelDelivery($parcelDelivery))) {
            throw new \InvalidArgumentException($parcelDeliveryArrayErrorMessage, __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The ParcelDelivery property can only contain items of type \Ews\StructType\EwsParcelDeliveryEntityType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
}
