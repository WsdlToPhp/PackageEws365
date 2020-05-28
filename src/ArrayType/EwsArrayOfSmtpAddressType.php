<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSmtpAddressType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfSmtpAddressType extends AbstractStructArrayBase
{
    /**
     * The SmtpAddress
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - choice: SmtpAddress
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * - minLength: 1
     * @var string
     */
    public $SmtpAddress;
    /**
     * Constructor method for ArrayOfSmtpAddressType
     * @uses EwsArrayOfSmtpAddressType::setSmtpAddress()
     * @param string $smtpAddress
     */
    public function __construct($smtpAddress = null)
    {
        $this
            ->setSmtpAddress($smtpAddress);
    }
    /**
     * Get SmtpAddress value
     * @return string|null
     */
    public function getSmtpAddress()
    {
        return isset($this->SmtpAddress) ? $this->SmtpAddress : null;
    }
    /**
     * This method is responsible for validating the value passed to the setSmtpAddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSmtpAddress method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateSmtpAddressForChoiceConstraintsFromSetSmtpAddress($value)
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
                    throw new \InvalidArgumentException(sprintf('The property SmtpAddress can\'t be set as the property %s is already set. Only one property must be set among these properties: SmtpAddress, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set SmtpAddress value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param string $smtpAddress
     * @return \Ews\ArrayType\EwsArrayOfSmtpAddressType
     */
    public function setSmtpAddress($smtpAddress = null)
    {
        // validation for constraint: string
        if (!is_null($smtpAddress) && !is_string($smtpAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($smtpAddress, true), gettype($smtpAddress)), __LINE__);
        }
        // validation for constraint: choice(SmtpAddress)
        if ('' !== ($smtpAddressChoiceErrorMessage = self::validateSmtpAddressForChoiceConstraintsFromSetSmtpAddress($smtpAddress))) {
            throw new \InvalidArgumentException($smtpAddressChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($smtpAddress) && mb_strlen($smtpAddress) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($smtpAddress)), __LINE__);
        }
        if (is_null($smtpAddress) || (is_array($smtpAddress) && empty($smtpAddress))) {
            unset($this->SmtpAddress);
        } else {
            $this->SmtpAddress = $smtpAddress;
        }
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SmtpAddress
     */
    public function getAttributeName()
    {
        return 'SmtpAddress';
    }
}
