<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \Ews\StructType\EwsCultureInfoDataType
     */
    public $AvailableCulture;
    /**
     * Constructor method for AvailableCulturesArray
     * @uses EwsAvailableCulturesArray::setAvailableCulture()
     * @param \Ews\StructType\EwsCultureInfoDataType $availableCulture
     */
    public function __construct(\Ews\StructType\EwsCultureInfoDataType $availableCulture = null)
    {
        $this
            ->setAvailableCulture($availableCulture);
    }
    /**
     * Get AvailableCulture value
     * @return \Ews\StructType\EwsCultureInfoDataType|null
     */
    public function getAvailableCulture()
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
    public function validateAvailableCultureForChoiceConstraintsFromSetAvailableCulture($value)
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
                    throw new \InvalidArgumentException(sprintf('The property AvailableCulture can\'t be set as the property %s is already set. Only one property must be set among these properties: AvailableCulture, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set AvailableCulture value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsCultureInfoDataType $availableCulture
     * @return \Ews\ArrayType\EwsAvailableCulturesArray
     */
    public function setAvailableCulture(\Ews\StructType\EwsCultureInfoDataType $availableCulture = null)
    {
        // validation for constraint: choice(AvailableCulture)
        if ('' !== ($availableCultureChoiceErrorMessage = self::validateAvailableCultureForChoiceConstraintsFromSetAvailableCulture($availableCulture))) {
            throw new \InvalidArgumentException($availableCultureChoiceErrorMessage, __LINE__);
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
     * @return \Ews\StructType\EwsCultureInfoDataType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsCultureInfoDataType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsCultureInfoDataType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsCultureInfoDataType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsCultureInfoDataType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AvailableCulture
     */
    public function getAttributeName()
    {
        return 'AvailableCulture';
    }
}
