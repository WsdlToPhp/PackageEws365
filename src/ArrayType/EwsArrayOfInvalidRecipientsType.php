<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \StructType\EwsInvalidRecipientType|null
     */
    protected ?\StructType\EwsInvalidRecipientType $InvalidRecipient = null;
    /**
     * Constructor method for ArrayOfInvalidRecipientsType
     * @uses EwsArrayOfInvalidRecipientsType::setInvalidRecipient()
     * @param \StructType\EwsInvalidRecipientType $invalidRecipient
     */
    public function __construct(?\StructType\EwsInvalidRecipientType $invalidRecipient = null)
    {
        $this
            ->setInvalidRecipient($invalidRecipient);
    }
    /**
     * Get InvalidRecipient value
     * @return \StructType\EwsInvalidRecipientType|null
     */
    public function getInvalidRecipient(): ?\StructType\EwsInvalidRecipientType
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
    public function validateInvalidRecipientForChoiceConstraintsFromSetInvalidRecipient($value): string
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
                    throw new InvalidArgumentException(sprintf('The property InvalidRecipient can\'t be set as the property %s is already set. Only one property must be set among these properties: InvalidRecipient, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set InvalidRecipient value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsInvalidRecipientType $invalidRecipient
     * @return \ArrayType\EwsArrayOfInvalidRecipientsType
     */
    public function setInvalidRecipient(?\StructType\EwsInvalidRecipientType $invalidRecipient = null): self
    {
        // validation for constraint: choice(InvalidRecipient)
        if ('' !== ($invalidRecipientChoiceErrorMessage = self::validateInvalidRecipientForChoiceConstraintsFromSetInvalidRecipient($invalidRecipient))) {
            throw new InvalidArgumentException($invalidRecipientChoiceErrorMessage, __LINE__);
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
     * @return \StructType\EwsInvalidRecipientType|null
     */
    public function current(): ?\StructType\EwsInvalidRecipientType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsInvalidRecipientType|null
     */
    public function item($index): ?\StructType\EwsInvalidRecipientType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsInvalidRecipientType|null
     */
    public function first(): ?\StructType\EwsInvalidRecipientType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsInvalidRecipientType|null
     */
    public function last(): ?\StructType\EwsInvalidRecipientType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsInvalidRecipientType|null
     */
    public function offsetGet($offset): ?\StructType\EwsInvalidRecipientType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsInvalidRecipientType $item
     * @return \ArrayType\EwsArrayOfInvalidRecipientsType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsInvalidRecipientType) {
            throw new InvalidArgumentException(sprintf('The InvalidRecipient property can only contain items of type \StructType\EwsInvalidRecipientType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string InvalidRecipient
     */
    public function getAttributeName(): string
    {
        return 'InvalidRecipient';
    }
}
