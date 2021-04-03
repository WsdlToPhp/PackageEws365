<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTrackingPropertiesType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfTrackingPropertiesType extends AbstractStructArrayBase
{
    /**
     * The TrackingPropertyType
     * Meta information extracted from the WSDL
     * - choice: TrackingPropertyType
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \StructType\EwsTrackingPropertyType|null
     */
    protected ?\StructType\EwsTrackingPropertyType $TrackingPropertyType = null;
    /**
     * Constructor method for ArrayOfTrackingPropertiesType
     * @uses EwsArrayOfTrackingPropertiesType::setTrackingPropertyType()
     * @param \StructType\EwsTrackingPropertyType $trackingPropertyType
     */
    public function __construct(?\StructType\EwsTrackingPropertyType $trackingPropertyType = null)
    {
        $this
            ->setTrackingPropertyType($trackingPropertyType);
    }
    /**
     * Get TrackingPropertyType value
     * @return \StructType\EwsTrackingPropertyType|null
     */
    public function getTrackingPropertyType(): ?\StructType\EwsTrackingPropertyType
    {
        return isset($this->TrackingPropertyType) ? $this->TrackingPropertyType : null;
    }
    /**
     * This method is responsible for validating the value passed to the setTrackingPropertyType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTrackingPropertyType method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateTrackingPropertyTypeForChoiceConstraintsFromSetTrackingPropertyType($value): string
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
                    throw new InvalidArgumentException(sprintf('The property TrackingPropertyType can\'t be set as the property %s is already set. Only one property must be set among these properties: TrackingPropertyType, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set TrackingPropertyType value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsTrackingPropertyType $trackingPropertyType
     * @return \ArrayType\EwsArrayOfTrackingPropertiesType
     */
    public function setTrackingPropertyType(?\StructType\EwsTrackingPropertyType $trackingPropertyType = null): self
    {
        // validation for constraint: choice(TrackingPropertyType)
        if ('' !== ($trackingPropertyTypeChoiceErrorMessage = self::validateTrackingPropertyTypeForChoiceConstraintsFromSetTrackingPropertyType($trackingPropertyType))) {
            throw new InvalidArgumentException($trackingPropertyTypeChoiceErrorMessage, __LINE__);
        }
        if (is_null($trackingPropertyType) || (is_array($trackingPropertyType) && empty($trackingPropertyType))) {
            unset($this->TrackingPropertyType);
        } else {
            $this->TrackingPropertyType = $trackingPropertyType;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsTrackingPropertyType|null
     */
    public function current(): ?\StructType\EwsTrackingPropertyType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsTrackingPropertyType|null
     */
    public function item($index): ?\StructType\EwsTrackingPropertyType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsTrackingPropertyType|null
     */
    public function first(): ?\StructType\EwsTrackingPropertyType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsTrackingPropertyType|null
     */
    public function last(): ?\StructType\EwsTrackingPropertyType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsTrackingPropertyType|null
     */
    public function offsetGet($offset): ?\StructType\EwsTrackingPropertyType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsTrackingPropertyType $item
     * @return \ArrayType\EwsArrayOfTrackingPropertiesType
     */
    public function add(\StructType\EwsTrackingPropertyType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TrackingPropertyType
     */
    public function getAttributeName(): string
    {
        return 'TrackingPropertyType';
    }
}
