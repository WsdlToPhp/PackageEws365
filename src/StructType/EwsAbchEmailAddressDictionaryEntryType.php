<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AbchEmailAddressDictionaryEntryType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAbchEmailAddressDictionaryEntryType extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $Type;
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $Address;
    /**
     * The IsMessengerEnabled
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $IsMessengerEnabled;
    /**
     * The Capabilities
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var long
     */
    public $Capabilities;
    /**
     * Constructor method for AbchEmailAddressDictionaryEntryType
     * @uses EwsAbchEmailAddressDictionaryEntryType::setType()
     * @uses EwsAbchEmailAddressDictionaryEntryType::setAddress()
     * @uses EwsAbchEmailAddressDictionaryEntryType::setIsMessengerEnabled()
     * @uses EwsAbchEmailAddressDictionaryEntryType::setCapabilities()
     * @param string $type
     * @param string $address
     * @param boolean $isMessengerEnabled
     * @param long $capabilities
     */
    public function __construct($type = null, $address = null, $isMessengerEnabled = null, $capabilities = null)
    {
        $this
            ->setType($type)
            ->setAddress($address)
            ->setIsMessengerEnabled($isMessengerEnabled)
            ->setCapabilities($capabilities);
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Ews\EnumType\EwsAbchEmailAddressTypeType::valueIsValid()
     * @uses \Ews\EnumType\EwsAbchEmailAddressTypeType::getValidValues()
     * @param string $type
     * @return \Ews\StructType\EwsAbchEmailAddressDictionaryEntryType
     */
    public function setType($type = null)
    {
        if (!\Ews\EnumType\EwsAbchEmailAddressTypeType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Ews\EnumType\EwsAbchEmailAddressTypeType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Address value
     * @return string
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param string $address
     * @return \Ews\StructType\EwsAbchEmailAddressDictionaryEntryType
     */
    public function setAddress($address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Get IsMessengerEnabled value
     * @return boolean|null
     */
    public function getIsMessengerEnabled()
    {
        return $this->IsMessengerEnabled;
    }
    /**
     * Set IsMessengerEnabled value
     * @param boolean $isMessengerEnabled
     * @return \Ews\StructType\EwsAbchEmailAddressDictionaryEntryType
     */
    public function setIsMessengerEnabled($isMessengerEnabled = null)
    {
        $this->IsMessengerEnabled = $isMessengerEnabled;
        return $this;
    }
    /**
     * Get Capabilities value
     * @return long|null
     */
    public function getCapabilities()
    {
        return $this->Capabilities;
    }
    /**
     * Set Capabilities value
     * @param long $capabilities
     * @return \Ews\StructType\EwsAbchEmailAddressDictionaryEntryType
     */
    public function setCapabilities($capabilities = null)
    {
        $this->Capabilities = $capabilities;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsAbchEmailAddressDictionaryEntryType
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
