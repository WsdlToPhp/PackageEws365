<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for AvailableCulturesArray ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAvailableCulturesArray extends AbstractStructArrayBase
{
    /**
     * The AvailableCulture
     * Meta information extracted from the WSDL
     * - choice: AvailableCulture
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsCultureInfoDataType|null
     */
    protected ?\StructType\EwsCultureInfoDataType $AvailableCulture = null;
    /**
     * Constructor method for AvailableCulturesArray
     * @uses EwsAvailableCulturesArray::setAvailableCulture()
     * @param \StructType\EwsCultureInfoDataType $availableCulture
     */
    public function __construct(?\StructType\EwsCultureInfoDataType $availableCulture = null)
    {
        $this
            ->setAvailableCulture($availableCulture);
    }
    /**
     * Get AvailableCulture value
     * @return \StructType\EwsCultureInfoDataType|null
     */
    public function getAvailableCulture(): ?\StructType\EwsCultureInfoDataType
    {
        return isset($this->AvailableCulture) ? $this->AvailableCulture : null;
    }
    /**
     * This method is responsible for validating the value passed to the setAvailableCulture method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAvailableCulture method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAvailableCultureForChoiceConstraintsFromSetAvailableCulture($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property AvailableCulture can\'t be set as the property %s is already set. Only one property must be set among these properties: AvailableCulture, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set AvailableCulture value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsCultureInfoDataType $availableCulture
     * @return \ArrayType\EwsAvailableCulturesArray
     */
    public function setAvailableCulture(?\StructType\EwsCultureInfoDataType $availableCulture = null): self
    {
        // validation for constraint: choice(AvailableCulture)
        if ('' !== ($availableCultureChoiceErrorMessage = self::validateAvailableCultureForChoiceConstraintsFromSetAvailableCulture($availableCulture))) {
            throw new InvalidArgumentException($availableCultureChoiceErrorMessage, __LINE__);
        }
        if (is_null($availableCulture) || (is_array($availableCulture) && empty($availableCulture))) {
            unset($this->AvailableCulture);
        } else {
            $this->AvailableCulture = $availableCulture;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsCultureInfoDataType|null
     */
    public function current(): ?\StructType\EwsCultureInfoDataType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsCultureInfoDataType|null
     */
    public function item($index): ?\StructType\EwsCultureInfoDataType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsCultureInfoDataType|null
     */
    public function first(): ?\StructType\EwsCultureInfoDataType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsCultureInfoDataType|null
     */
    public function last(): ?\StructType\EwsCultureInfoDataType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsCultureInfoDataType|null
     */
    public function offsetGet($offset): ?\StructType\EwsCultureInfoDataType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsCultureInfoDataType $item
     * @return \ArrayType\EwsAvailableCulturesArray
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsCultureInfoDataType) {
            throw new InvalidArgumentException(sprintf('The AvailableCulture property can only contain items of type \StructType\EwsCultureInfoDataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AvailableCulture
     */
    public function getAttributeName(): string
    {
        return 'AvailableCulture';
    }
}
