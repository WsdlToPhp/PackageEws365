<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfExtractedEmailAddresses ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfExtractedEmailAddresses extends AbstractStructArrayBase
{
    /**
     * The EmailAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $EmailAddress;
    /**
     * Constructor method for ArrayOfExtractedEmailAddresses
     * @uses EwsArrayOfExtractedEmailAddresses::setEmailAddress()
     * @param string[] $emailAddress
     */
    public function __construct(array $emailAddress = array())
    {
        $this
            ->setEmailAddress($emailAddress);
    }
    /**
     * Get EmailAddress value
     * @return string[]|null
     */
    public function getEmailAddress()
    {
        return $this->EmailAddress;
    }
    /**
     * This method is responsible for validating the values passed to the setEmailAddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmailAddress method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmailAddressForArrayConstraintsFromSetEmailAddress(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfExtractedEmailAddressesEmailAddressItem) {
            // validation for constraint: itemType
            if (!is_string($arrayOfExtractedEmailAddressesEmailAddressItem)) {
                $invalidValues[] = is_object($arrayOfExtractedEmailAddressesEmailAddressItem) ? get_class($arrayOfExtractedEmailAddressesEmailAddressItem) : sprintf('%s(%s)', gettype($arrayOfExtractedEmailAddressesEmailAddressItem), var_export($arrayOfExtractedEmailAddressesEmailAddressItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EmailAddress property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set EmailAddress value
     * @throws \InvalidArgumentException
     * @param string[] $emailAddress
     * @return \Ews\ArrayType\EwsArrayOfExtractedEmailAddresses
     */
    public function setEmailAddress(array $emailAddress = array())
    {
        // validation for constraint: array
        if ('' !== ($emailAddressArrayErrorMessage = self::validateEmailAddressForArrayConstraintsFromSetEmailAddress($emailAddress))) {
            throw new \InvalidArgumentException($emailAddressArrayErrorMessage, __LINE__);
        }
        $this->EmailAddress = $emailAddress;
        return $this;
    }
    /**
     * Add item to EmailAddress value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Ews\ArrayType\EwsArrayOfExtractedEmailAddresses
     */
    public function addToEmailAddress($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The EmailAddress property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->EmailAddress[] = $item;
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
     * @return string EmailAddress
     */
    public function getAttributeName()
    {
        return 'EmailAddress';
    }
}
