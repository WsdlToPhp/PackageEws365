<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \StructType\EwsAddressEntityType[]
     */
    protected array $AddressEntity = [];
    /**
     * Constructor method for ArrayOfAddressEntitiesType
     * @uses EwsArrayOfAddressEntitiesType::setAddressEntity()
     * @param \StructType\EwsAddressEntityType[] $addressEntity
     */
    public function __construct(array $addressEntity = [])
    {
        $this
            ->setAddressEntity($addressEntity);
    }
    /**
     * Get AddressEntity value
     * @return \StructType\EwsAddressEntityType[]
     */
    public function getAddressEntity(): array
    {
        return $this->AddressEntity;
    }
    /**
     * This method is responsible for validating the values passed to the setAddressEntity method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAddressEntity method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAddressEntityForArrayConstraintsFromSetAddressEntity(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAddressEntitiesTypeAddressEntityItem) {
            // validation for constraint: itemType
            if (!$arrayOfAddressEntitiesTypeAddressEntityItem instanceof \StructType\EwsAddressEntityType) {
                $invalidValues[] = is_object($arrayOfAddressEntitiesTypeAddressEntityItem) ? get_class($arrayOfAddressEntitiesTypeAddressEntityItem) : sprintf('%s(%s)', gettype($arrayOfAddressEntitiesTypeAddressEntityItem), var_export($arrayOfAddressEntitiesTypeAddressEntityItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AddressEntity property can only contain items of type \StructType\EwsAddressEntityType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AddressEntity value
     * @throws InvalidArgumentException
     * @param \StructType\EwsAddressEntityType[] $addressEntity
     * @return \ArrayType\EwsArrayOfAddressEntitiesType
     */
    public function setAddressEntity(array $addressEntity = []): self
    {
        // validation for constraint: array
        if ('' !== ($addressEntityArrayErrorMessage = self::validateAddressEntityForArrayConstraintsFromSetAddressEntity($addressEntity))) {
            throw new InvalidArgumentException($addressEntityArrayErrorMessage, __LINE__);
        }
        $this->AddressEntity = $addressEntity;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsAddressEntityType|null
     */
    public function current(): ?\StructType\EwsAddressEntityType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsAddressEntityType|null
     */
    public function item($index): ?\StructType\EwsAddressEntityType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsAddressEntityType|null
     */
    public function first(): ?\StructType\EwsAddressEntityType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsAddressEntityType|null
     */
    public function last(): ?\StructType\EwsAddressEntityType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsAddressEntityType|null
     */
    public function offsetGet($offset): ?\StructType\EwsAddressEntityType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsAddressEntityType $item
     * @return \ArrayType\EwsArrayOfAddressEntitiesType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsAddressEntityType) {
            throw new InvalidArgumentException(sprintf('The AddressEntity property can only contain items of type \StructType\EwsAddressEntityType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AddressEntity
     */
    public function getAttributeName(): string
    {
        return 'AddressEntity';
    }
}
