<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfExtendedFieldURIs ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfExtendedFieldURIs extends AbstractStructArrayBase
{
    /**
     * The ExtendedProperty
     * Meta information extracted from the WSDL
     * - choice: ExtendedProperty
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsPathToExtendedFieldType
     */
    public $ExtendedProperty;
    /**
     * Constructor method for NonEmptyArrayOfExtendedFieldURIs
     * @uses EwsNonEmptyArrayOfExtendedFieldURIs::setExtendedProperty()
     * @param \Ews\StructType\EwsPathToExtendedFieldType $extendedProperty
     */
    public function __construct(\Ews\StructType\EwsPathToExtendedFieldType $extendedProperty = null)
    {
        $this
            ->setExtendedProperty($extendedProperty);
    }
    /**
     * Get ExtendedProperty value
     * @return \Ews\StructType\EwsPathToExtendedFieldType|null
     */
    public function getExtendedProperty()
    {
        return isset($this->ExtendedProperty) ? $this->ExtendedProperty : null;
    }
    /**
     * This method is responsible for validating the value passed to the setExtendedProperty method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExtendedProperty method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateExtendedPropertyForChoiceConstraintsFromSetExtendedProperty($value)
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
                    throw new \InvalidArgumentException(sprintf('The property ExtendedProperty can\'t be set as the property %s is already set. Only one property must be set among these properties: ExtendedProperty, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set ExtendedProperty value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsPathToExtendedFieldType $extendedProperty
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfExtendedFieldURIs
     */
    public function setExtendedProperty(\Ews\StructType\EwsPathToExtendedFieldType $extendedProperty = null)
    {
        // validation for constraint: choice(ExtendedProperty)
        if ('' !== ($extendedPropertyChoiceErrorMessage = self::validateExtendedPropertyForChoiceConstraintsFromSetExtendedProperty($extendedProperty))) {
            throw new \InvalidArgumentException($extendedPropertyChoiceErrorMessage, __LINE__);
        }
        if (is_null($extendedProperty) || (is_array($extendedProperty) && empty($extendedProperty))) {
            unset($this->ExtendedProperty);
        } else {
            $this->ExtendedProperty = $extendedProperty;
        }
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsPathToExtendedFieldType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsPathToExtendedFieldType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsPathToExtendedFieldType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsPathToExtendedFieldType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsPathToExtendedFieldType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ExtendedProperty
     */
    public function getAttributeName()
    {
        return 'ExtendedProperty';
    }
}
