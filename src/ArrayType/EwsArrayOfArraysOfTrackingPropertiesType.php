<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfArraysOfTrackingPropertiesType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfArraysOfTrackingPropertiesType extends AbstractStructArrayBase
{
    /**
     * The ArrayOfTrackingPropertiesType
     * Meta information extracted from the WSDL
     * - choice: ArrayOfTrackingPropertiesType
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \ArrayType\EwsArrayOfTrackingPropertiesType|null
     */
    protected ?\ArrayType\EwsArrayOfTrackingPropertiesType $ArrayOfTrackingPropertiesType = null;
    /**
     * Constructor method for ArrayOfArraysOfTrackingPropertiesType
     * @uses EwsArrayOfArraysOfTrackingPropertiesType::setArrayOfTrackingPropertiesType()
     * @param \ArrayType\EwsArrayOfTrackingPropertiesType $arrayOfTrackingPropertiesType
     */
    public function __construct(?\ArrayType\EwsArrayOfTrackingPropertiesType $arrayOfTrackingPropertiesType = null)
    {
        $this
            ->setArrayOfTrackingPropertiesType($arrayOfTrackingPropertiesType);
    }
    /**
     * Get ArrayOfTrackingPropertiesType value
     * @return \ArrayType\EwsArrayOfTrackingPropertiesType|null
     */
    public function getArrayOfTrackingPropertiesType(): ?\ArrayType\EwsArrayOfTrackingPropertiesType
    {
        return isset($this->ArrayOfTrackingPropertiesType) ? $this->ArrayOfTrackingPropertiesType : null;
    }
    /**
     * This method is responsible for validating the value passed to the setArrayOfTrackingPropertiesType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setArrayOfTrackingPropertiesType method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateArrayOfTrackingPropertiesTypeForChoiceConstraintsFromSetArrayOfTrackingPropertiesType($value): string
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
                    throw new InvalidArgumentException(sprintf('The property ArrayOfTrackingPropertiesType can\'t be set as the property %s is already set. Only one property must be set among these properties: ArrayOfTrackingPropertiesType, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set ArrayOfTrackingPropertiesType value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \ArrayType\EwsArrayOfTrackingPropertiesType $arrayOfTrackingPropertiesType
     * @return \ArrayType\EwsArrayOfArraysOfTrackingPropertiesType
     */
    public function setArrayOfTrackingPropertiesType(?\ArrayType\EwsArrayOfTrackingPropertiesType $arrayOfTrackingPropertiesType = null): self
    {
        // validation for constraint: choice(ArrayOfTrackingPropertiesType)
        if ('' !== ($arrayOfTrackingPropertiesTypeChoiceErrorMessage = self::validateArrayOfTrackingPropertiesTypeForChoiceConstraintsFromSetArrayOfTrackingPropertiesType($arrayOfTrackingPropertiesType))) {
            throw new InvalidArgumentException($arrayOfTrackingPropertiesTypeChoiceErrorMessage, __LINE__);
        }
        if (is_null($arrayOfTrackingPropertiesType) || (is_array($arrayOfTrackingPropertiesType) && empty($arrayOfTrackingPropertiesType))) {
            unset($this->ArrayOfTrackingPropertiesType);
        } else {
            $this->ArrayOfTrackingPropertiesType = $arrayOfTrackingPropertiesType;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \ArrayType\EwsArrayOfTrackingPropertiesType|null
     */
    public function current(): ?\ArrayType\EwsArrayOfTrackingPropertiesType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \ArrayType\EwsArrayOfTrackingPropertiesType|null
     */
    public function item($index): ?\ArrayType\EwsArrayOfTrackingPropertiesType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \ArrayType\EwsArrayOfTrackingPropertiesType|null
     */
    public function first(): ?\ArrayType\EwsArrayOfTrackingPropertiesType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \ArrayType\EwsArrayOfTrackingPropertiesType|null
     */
    public function last(): ?\ArrayType\EwsArrayOfTrackingPropertiesType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \ArrayType\EwsArrayOfTrackingPropertiesType|null
     */
    public function offsetGet($offset): ?\ArrayType\EwsArrayOfTrackingPropertiesType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \ArrayType\EwsArrayOfTrackingPropertiesType $item
     * @return \ArrayType\EwsArrayOfArraysOfTrackingPropertiesType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ArrayType\EwsArrayOfTrackingPropertiesType) {
            throw new InvalidArgumentException(sprintf('The ArrayOfTrackingPropertiesType property can only contain items of type \ArrayType\EwsArrayOfTrackingPropertiesType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ArrayOfTrackingPropertiesType
     */
    public function getAttributeName(): string
    {
        return 'ArrayOfTrackingPropertiesType';
    }
}
