<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfInvalidRecipientsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfInvalidRecipientsType extends AbstractStructArrayBase
{
    /**
     * The InvalidRecipient
     * Meta information extracted from the WSDL
     * - choice: InvalidRecipient
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \Ews\StructType\EwsInvalidRecipientType
     */
    public $InvalidRecipient;
    /**
     * Constructor method for ArrayOfInvalidRecipientsType
     * @uses EwsArrayOfInvalidRecipientsType::setInvalidRecipient()
     * @param \Ews\StructType\EwsInvalidRecipientType $invalidRecipient
     */
    public function __construct(\Ews\StructType\EwsInvalidRecipientType $invalidRecipient = null)
    {
        $this
            ->setInvalidRecipient($invalidRecipient);
    }
    /**
     * Get InvalidRecipient value
     * @return \Ews\StructType\EwsInvalidRecipientType|null
     */
    public function getInvalidRecipient()
    {
        return isset($this->InvalidRecipient) ? $this->InvalidRecipient : null;
    }
    /**
     * This method is responsible for validating the value passed to the setInvalidRecipient method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInvalidRecipient method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateInvalidRecipientForChoiceConstraintsFromSetInvalidRecipient($value)
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
                    throw new \InvalidArgumentException(sprintf('The property InvalidRecipient can\'t be set as the property %s is already set. Only one property must be set among these properties: InvalidRecipient, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set InvalidRecipient value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsInvalidRecipientType $invalidRecipient
     * @return \Ews\ArrayType\EwsArrayOfInvalidRecipientsType
     */
    public function setInvalidRecipient(\Ews\StructType\EwsInvalidRecipientType $invalidRecipient = null)
    {
        // validation for constraint: choice(InvalidRecipient)
        if ('' !== ($invalidRecipientChoiceErrorMessage = self::validateInvalidRecipientForChoiceConstraintsFromSetInvalidRecipient($invalidRecipient))) {
            throw new \InvalidArgumentException($invalidRecipientChoiceErrorMessage, __LINE__);
        }
        if (is_null($invalidRecipient) || (is_array($invalidRecipient) && empty($invalidRecipient))) {
            unset($this->InvalidRecipient);
        } else {
            $this->InvalidRecipient = $invalidRecipient;
        }
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsInvalidRecipientType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsInvalidRecipientType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsInvalidRecipientType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsInvalidRecipientType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsInvalidRecipientType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string InvalidRecipient
     */
    public function getAttributeName()
    {
        return 'InvalidRecipient';
    }
}
