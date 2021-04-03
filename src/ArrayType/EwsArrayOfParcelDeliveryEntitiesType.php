<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \StructType\EwsParcelDeliveryEntityType[]
     */
    protected array $ParcelDelivery = [];
    /**
     * Constructor method for ArrayOfParcelDeliveryEntitiesType
     * @uses EwsArrayOfParcelDeliveryEntitiesType::setParcelDelivery()
     * @param \StructType\EwsParcelDeliveryEntityType[] $parcelDelivery
     */
    public function __construct(array $parcelDelivery = [])
    {
        $this
            ->setParcelDelivery($parcelDelivery);
    }
    /**
     * Get ParcelDelivery value
     * @return \StructType\EwsParcelDeliveryEntityType[]
     */
    public function getParcelDelivery(): array
    {
        return $this->ParcelDelivery;
    }
    /**
     * This method is responsible for validating the values passed to the setParcelDelivery method
     * This method is willingly generated in order to preserve the one-line inline validation within the setParcelDelivery method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateParcelDeliveryForArrayConstraintsFromSetParcelDelivery(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfParcelDeliveryEntitiesTypeParcelDeliveryItem) {
            // validation for constraint: itemType
            if (!$arrayOfParcelDeliveryEntitiesTypeParcelDeliveryItem instanceof \StructType\EwsParcelDeliveryEntityType) {
                $invalidValues[] = is_object($arrayOfParcelDeliveryEntitiesTypeParcelDeliveryItem) ? get_class($arrayOfParcelDeliveryEntitiesTypeParcelDeliveryItem) : sprintf('%s(%s)', gettype($arrayOfParcelDeliveryEntitiesTypeParcelDeliveryItem), var_export($arrayOfParcelDeliveryEntitiesTypeParcelDeliveryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ParcelDelivery property can only contain items of type \StructType\EwsParcelDeliveryEntityType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ParcelDelivery value
     * @throws InvalidArgumentException
     * @param \StructType\EwsParcelDeliveryEntityType[] $parcelDelivery
     * @return \ArrayType\EwsArrayOfParcelDeliveryEntitiesType
     */
    public function setParcelDelivery(array $parcelDelivery = []): self
    {
        // validation for constraint: array
        if ('' !== ($parcelDeliveryArrayErrorMessage = self::validateParcelDeliveryForArrayConstraintsFromSetParcelDelivery($parcelDelivery))) {
            throw new InvalidArgumentException($parcelDeliveryArrayErrorMessage, __LINE__);
        }
        $this->ParcelDelivery = $parcelDelivery;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsParcelDeliveryEntityType|null
     */
    public function current(): ?\StructType\EwsParcelDeliveryEntityType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsParcelDeliveryEntityType|null
     */
    public function item($index): ?\StructType\EwsParcelDeliveryEntityType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsParcelDeliveryEntityType|null
     */
    public function first(): ?\StructType\EwsParcelDeliveryEntityType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsParcelDeliveryEntityType|null
     */
    public function last(): ?\StructType\EwsParcelDeliveryEntityType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsParcelDeliveryEntityType|null
     */
    public function offsetGet($offset): ?\StructType\EwsParcelDeliveryEntityType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsParcelDeliveryEntityType $item
     * @return \ArrayType\EwsArrayOfParcelDeliveryEntitiesType
     */
    public function add(\StructType\EwsParcelDeliveryEntityType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ParcelDelivery
     */
    public function getAttributeName(): string
    {
        return 'ParcelDelivery';
    }
}
