<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfExtendedAttributesType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Array of extended attributes of a target mailbox
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfExtendedAttributesType extends AbstractStructArrayBase
{
    /**
     * The ExtendedAttribute
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: false
     * @var \StructType\EwsExtendedAttributeType[]
     */
    protected array $ExtendedAttribute = [];
    /**
     * Constructor method for ArrayOfExtendedAttributesType
     * @uses EwsArrayOfExtendedAttributesType::setExtendedAttribute()
     * @param \StructType\EwsExtendedAttributeType[] $extendedAttribute
     */
    public function __construct(array $extendedAttribute = [])
    {
        $this
            ->setExtendedAttribute($extendedAttribute);
    }
    /**
     * Get ExtendedAttribute value
     * @return \StructType\EwsExtendedAttributeType[]
     */
    public function getExtendedAttribute(): array
    {
        return $this->ExtendedAttribute;
    }
    /**
     * This method is responsible for validating the values passed to the setExtendedAttribute method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExtendedAttribute method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExtendedAttributeForArrayConstraintsFromSetExtendedAttribute(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfExtendedAttributesTypeExtendedAttributeItem) {
            // validation for constraint: itemType
            if (!$arrayOfExtendedAttributesTypeExtendedAttributeItem instanceof \StructType\EwsExtendedAttributeType) {
                $invalidValues[] = is_object($arrayOfExtendedAttributesTypeExtendedAttributeItem) ? get_class($arrayOfExtendedAttributesTypeExtendedAttributeItem) : sprintf('%s(%s)', gettype($arrayOfExtendedAttributesTypeExtendedAttributeItem), var_export($arrayOfExtendedAttributesTypeExtendedAttributeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ExtendedAttribute property can only contain items of type \StructType\EwsExtendedAttributeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ExtendedAttribute value
     * @throws InvalidArgumentException
     * @param \StructType\EwsExtendedAttributeType[] $extendedAttribute
     * @return \ArrayType\EwsArrayOfExtendedAttributesType
     */
    public function setExtendedAttribute(array $extendedAttribute = []): self
    {
        // validation for constraint: array
        if ('' !== ($extendedAttributeArrayErrorMessage = self::validateExtendedAttributeForArrayConstraintsFromSetExtendedAttribute($extendedAttribute))) {
            throw new InvalidArgumentException($extendedAttributeArrayErrorMessage, __LINE__);
        }
        $this->ExtendedAttribute = $extendedAttribute;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsExtendedAttributeType|null
     */
    public function current(): ?\StructType\EwsExtendedAttributeType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsExtendedAttributeType|null
     */
    public function item($index): ?\StructType\EwsExtendedAttributeType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsExtendedAttributeType|null
     */
    public function first(): ?\StructType\EwsExtendedAttributeType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsExtendedAttributeType|null
     */
    public function last(): ?\StructType\EwsExtendedAttributeType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsExtendedAttributeType|null
     */
    public function offsetGet($offset): ?\StructType\EwsExtendedAttributeType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsExtendedAttributeType $item
     * @return \ArrayType\EwsArrayOfExtendedAttributesType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsExtendedAttributeType) {
            throw new InvalidArgumentException(sprintf('The ExtendedAttribute property can only contain items of type \StructType\EwsExtendedAttributeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ExtendedAttribute
     */
    public function getAttributeName(): string
    {
        return 'ExtendedAttribute';
    }
}
