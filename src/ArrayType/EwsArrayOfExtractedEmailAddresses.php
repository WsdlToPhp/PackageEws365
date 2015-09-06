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
     * @var array
     */
    public $EmailAddress;
    /**
     * Constructor method for ArrayOfExtractedEmailAddresses
     * @uses EwsArrayOfExtractedEmailAddresses::setEmailAddress()
     * @param array $emailAddress
     */
    public function __construct(array $emailAddress = array())
    {
        $this
            ->setEmailAddress($emailAddress);
    }
    /**
     * Get EmailAddress value
     * @return array
     */
    public function getEmailAddress()
    {
        return $this->EmailAddress;
    }
    /**
     * Set EmailAddress value
     * @param array $emailAddress
     * @return \Ews\ArrayType\EwsArrayOfExtractedEmailAddresses
     */
    public function setEmailAddress(array $emailAddress = array())
    {
        $this->EmailAddress = $emailAddress;
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
