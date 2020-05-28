<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \Ews\StructType\EwsTrackingPropertyType
     */
    public $TrackingPropertyType;
    /**
     * Constructor method for ArrayOfTrackingPropertiesType
     * @uses EwsArrayOfTrackingPropertiesType::setTrackingPropertyType()
     * @param \Ews\StructType\EwsTrackingPropertyType $trackingPropertyType
     */
    public function __construct(\Ews\StructType\EwsTrackingPropertyType $trackingPropertyType = null)
    {
        $this
            ->setTrackingPropertyType($trackingPropertyType);
    }
    /**
     * Get TrackingPropertyType value
     * @return \Ews\StructType\EwsTrackingPropertyType|null
     */
    public function getTrackingPropertyType()
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
    public function validateTrackingPropertyTypeForChoiceConstraintsFromSetTrackingPropertyType($value)
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
                    throw new \InvalidArgumentException(sprintf('The property TrackingPropertyType can\'t be set as the property %s is already set. Only one property must be set among these properties: TrackingPropertyType, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set TrackingPropertyType value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsTrackingPropertyType $trackingPropertyType
     * @return \Ews\ArrayType\EwsArrayOfTrackingPropertiesType
     */
    public function setTrackingPropertyType(\Ews\StructType\EwsTrackingPropertyType $trackingPropertyType = null)
    {
        // validation for constraint: choice(TrackingPropertyType)
        if ('' !== ($trackingPropertyTypeChoiceErrorMessage = self::validateTrackingPropertyTypeForChoiceConstraintsFromSetTrackingPropertyType($trackingPropertyType))) {
            throw new \InvalidArgumentException($trackingPropertyTypeChoiceErrorMessage, __LINE__);
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
     * @return \Ews\StructType\EwsTrackingPropertyType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsTrackingPropertyType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsTrackingPropertyType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsTrackingPropertyType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsTrackingPropertyType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TrackingPropertyType
     */
    public function getAttributeName()
    {
        return 'TrackingPropertyType';
    }
}
