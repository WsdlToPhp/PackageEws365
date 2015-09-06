<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PhoneNumberDictionaryEntryType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPhoneNumberDictionaryEntryType extends AbstractStructBase
{
    /**
     * The Key
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $Key;
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * Constructor method for PhoneNumberDictionaryEntryType
     * @uses EwsPhoneNumberDictionaryEntryType::setKey()
     * @uses EwsPhoneNumberDictionaryEntryType::set_()
     * @param string $key
     * @param string $_
     */
    public function __construct($key = null, $_ = null)
    {
        $this
            ->setKey($key)
            ->set_($_);
    }
    /**
     * Get Key value
     * @return string
     */
    public function getKey()
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @uses \Ews\EnumType\EwsPhoneNumberKeyType::valueIsValid()
     * @uses \Ews\EnumType\EwsPhoneNumberKeyType::getValidValues()
     * @param string $key
     * @return \Ews\StructType\EwsPhoneNumberDictionaryEntryType
     */
    public function setKey($key = null)
    {
        if (!\Ews\EnumType\EwsPhoneNumberKeyType::valueIsValid($key)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $key, implode(', ', \Ews\EnumType\EwsPhoneNumberKeyType::getValidValues())), __LINE__);
        }
        $this->Key = $key;
        return $this;
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Ews\StructType\EwsPhoneNumberDictionaryEntryType
     */
    public function set_($_ = null)
    {
        $this->_ = $_;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsPhoneNumberDictionaryEntryType
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
