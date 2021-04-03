<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfXrmGraphRelationshipType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfXrmGraphRelationshipType extends AbstractStructArrayBase
{
    /**
     * The XrmGraphRelationshipType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $XrmGraphRelationshipType = [];
    /**
     * Constructor method for ArrayOfXrmGraphRelationshipType
     * @uses EwsArrayOfXrmGraphRelationshipType::setXrmGraphRelationshipType()
     * @param string[] $xrmGraphRelationshipType
     */
    public function __construct(array $xrmGraphRelationshipType = [])
    {
        $this
            ->setXrmGraphRelationshipType($xrmGraphRelationshipType);
    }
    /**
     * Get XrmGraphRelationshipType value
     * @return string[]
     */
    public function getXrmGraphRelationshipType(): array
    {
        return $this->XrmGraphRelationshipType;
    }
    /**
     * This method is responsible for validating the values passed to the setXrmGraphRelationshipType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setXrmGraphRelationshipType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateXrmGraphRelationshipTypeForArrayConstraintsFromSetXrmGraphRelationshipType(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfXrmGraphRelationshipTypeXrmGraphRelationshipTypeItem) {
            // validation for constraint: enumeration
            if (!\EnumType\EwsXrmGraphRelationshipType::valueIsValid($arrayOfXrmGraphRelationshipTypeXrmGraphRelationshipTypeItem)) {
                $invalidValues[] = is_object($arrayOfXrmGraphRelationshipTypeXrmGraphRelationshipTypeItem) ? get_class($arrayOfXrmGraphRelationshipTypeXrmGraphRelationshipTypeItem) : sprintf('%s(%s)', gettype($arrayOfXrmGraphRelationshipTypeXrmGraphRelationshipTypeItem), var_export($arrayOfXrmGraphRelationshipTypeXrmGraphRelationshipTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsXrmGraphRelationshipType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\EwsXrmGraphRelationshipType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set XrmGraphRelationshipType value
     * @uses \EnumType\EwsXrmGraphRelationshipType::valueIsValid()
     * @uses \EnumType\EwsXrmGraphRelationshipType::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $xrmGraphRelationshipType
     * @return \ArrayType\EwsArrayOfXrmGraphRelationshipType
     */
    public function setXrmGraphRelationshipType(array $xrmGraphRelationshipType = []): self
    {
        // validation for constraint: array
        if ('' !== ($xrmGraphRelationshipTypeArrayErrorMessage = self::validateXrmGraphRelationshipTypeForArrayConstraintsFromSetXrmGraphRelationshipType($xrmGraphRelationshipType))) {
            throw new InvalidArgumentException($xrmGraphRelationshipTypeArrayErrorMessage, __LINE__);
        }
        $this->XrmGraphRelationshipType = $xrmGraphRelationshipType;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current(): ?string
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index): ?string
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first(): ?string
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last(): ?string
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset): ?string
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \ArrayType\EwsArrayOfXrmGraphRelationshipType
     */
    public function add(string $item): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsXrmGraphRelationshipType::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsXrmGraphRelationshipType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \EnumType\EwsXrmGraphRelationshipType::getValidValues())), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string XrmGraphRelationshipType
     */
    public function getAttributeName(): string
    {
        return 'XrmGraphRelationshipType';
    }
}
