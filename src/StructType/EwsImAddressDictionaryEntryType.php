<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImAddressDictionaryEntryType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsImAddressDictionaryEntryType extends AbstractStructBase
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
     * Constructor method for ImAddressDictionaryEntryType
     * @uses EwsImAddressDictionaryEntryType::setKey()
     * @uses EwsImAddressDictionaryEntryType::set_()
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
     * @uses \Ews\EnumType\EwsImAddressKeyType::valueIsValid()
     * @uses \Ews\EnumType\EwsImAddressKeyType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $key
     * @return \Ews\StructType\EwsImAddressDictionaryEntryType
     */
    public function setKey($key = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsImAddressKeyType::valueIsValid($key)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $key, implode(', ', \Ews\EnumType\EwsImAddressKeyType::getValidValues())), __LINE__);
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
     * @return \Ews\StructType\EwsImAddressDictionaryEntryType
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsImAddressDictionaryEntryType
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
