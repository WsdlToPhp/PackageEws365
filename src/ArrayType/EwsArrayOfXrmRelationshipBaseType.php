<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfXrmRelationshipBaseType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfXrmRelationshipBaseType extends AbstractStructArrayBase
{
    /**
     * The XrmRelationshipBaseType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsXrmRelationshipBaseType[]
     */
    protected array $XrmRelationshipBaseType = [];
    /**
     * Constructor method for ArrayOfXrmRelationshipBaseType
     * @uses EwsArrayOfXrmRelationshipBaseType::setXrmRelationshipBaseType()
     * @param \StructType\EwsXrmRelationshipBaseType[] $xrmRelationshipBaseType
     */
    public function __construct(array $xrmRelationshipBaseType = [])
    {
        $this
            ->setXrmRelationshipBaseType($xrmRelationshipBaseType);
    }
    /**
     * Get XrmRelationshipBaseType value
     * @return \StructType\EwsXrmRelationshipBaseType[]
     */
    public function getXrmRelationshipBaseType(): array
    {
        return $this->XrmRelationshipBaseType;
    }
    /**
     * This method is responsible for validating the values passed to the setXrmRelationshipBaseType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setXrmRelationshipBaseType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateXrmRelationshipBaseTypeForArrayConstraintsFromSetXrmRelationshipBaseType(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfXrmRelationshipBaseTypeXrmRelationshipBaseTypeItem) {
            // validation for constraint: itemType
            if (!$arrayOfXrmRelationshipBaseTypeXrmRelationshipBaseTypeItem instanceof \StructType\EwsXrmRelationshipBaseType) {
                $invalidValues[] = is_object($arrayOfXrmRelationshipBaseTypeXrmRelationshipBaseTypeItem) ? get_class($arrayOfXrmRelationshipBaseTypeXrmRelationshipBaseTypeItem) : sprintf('%s(%s)', gettype($arrayOfXrmRelationshipBaseTypeXrmRelationshipBaseTypeItem), var_export($arrayOfXrmRelationshipBaseTypeXrmRelationshipBaseTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The XrmRelationshipBaseType property can only contain items of type \StructType\EwsXrmRelationshipBaseType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set XrmRelationshipBaseType value
     * @throws InvalidArgumentException
     * @param \StructType\EwsXrmRelationshipBaseType[] $xrmRelationshipBaseType
     * @return \ArrayType\EwsArrayOfXrmRelationshipBaseType
     */
    public function setXrmRelationshipBaseType(array $xrmRelationshipBaseType = []): self
    {
        // validation for constraint: array
        if ('' !== ($xrmRelationshipBaseTypeArrayErrorMessage = self::validateXrmRelationshipBaseTypeForArrayConstraintsFromSetXrmRelationshipBaseType($xrmRelationshipBaseType))) {
            throw new InvalidArgumentException($xrmRelationshipBaseTypeArrayErrorMessage, __LINE__);
        }
        $this->XrmRelationshipBaseType = $xrmRelationshipBaseType;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsXrmRelationshipBaseType|null
     */
    public function current(): ?\StructType\EwsXrmRelationshipBaseType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsXrmRelationshipBaseType|null
     */
    public function item($index): ?\StructType\EwsXrmRelationshipBaseType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsXrmRelationshipBaseType|null
     */
    public function first(): ?\StructType\EwsXrmRelationshipBaseType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsXrmRelationshipBaseType|null
     */
    public function last(): ?\StructType\EwsXrmRelationshipBaseType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsXrmRelationshipBaseType|null
     */
    public function offsetGet($offset): ?\StructType\EwsXrmRelationshipBaseType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsXrmRelationshipBaseType $item
     * @return \ArrayType\EwsArrayOfXrmRelationshipBaseType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsXrmRelationshipBaseType) {
            throw new InvalidArgumentException(sprintf('The XrmRelationshipBaseType property can only contain items of type \StructType\EwsXrmRelationshipBaseType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string XrmRelationshipBaseType
     */
    public function getAttributeName(): string
    {
        return 'XrmRelationshipBaseType';
    }
}
