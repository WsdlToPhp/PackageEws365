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
     * Meta informations extracted from the WSDL
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
     * Set EmailAddress value
     * @throws \InvalidArgumentException
     * @param string[] $emailAddress
     * @return \Ews\ArrayType\EwsArrayOfExtractedEmailAddresses
     */
    public function setEmailAddress(array $emailAddress = array())
    {
        foreach ($emailAddress as $arrayOfExtractedEmailAddressesEmailAddressItem) {
            // validation for constraint: itemType
            if (!is_string($arrayOfExtractedEmailAddressesEmailAddressItem)) {
                throw new \InvalidArgumentException(sprintf('The EmailAddress property can only contain items of string, "%s" given', is_object($arrayOfExtractedEmailAddressesEmailAddressItem) ? get_class($arrayOfExtractedEmailAddressesEmailAddressItem) : gettype($arrayOfExtractedEmailAddressesEmailAddressItem)), __LINE__);
            }
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
            throw new \InvalidArgumentException(sprintf('The EmailAddress property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfExtractedEmailAddresses
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
