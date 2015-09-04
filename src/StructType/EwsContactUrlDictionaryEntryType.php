<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContactUrlDictionaryEntryType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsContactUrlDictionaryEntryType extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $Type;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Address;
    /**
     * Constructor method for ContactUrlDictionaryEntryType
     * @uses EwsContactUrlDictionaryEntryType::setType()
     * @uses EwsContactUrlDictionaryEntryType::setName()
     * @uses EwsContactUrlDictionaryEntryType::setAddress()
     * @param string $type
     * @param string $name
     * @param string $address
     */
    public function __construct($type = null, $name = null, $address = null)
    {
        $this
            ->setType($type)
            ->setName($name)
            ->setAddress($address);
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
     * @uses \Ews\EnumType\EwsContactUrlKeyType::valueIsValid()
     * @uses \Ews\EnumType\EwsContactUrlKeyType::getValidValues()
     * @param string $type
     * @return \Ews\StructType\EwsContactUrlDictionaryEntryType
     */
    public function setType($type = null)
    {
        if (!\Ews\EnumType\EwsContactUrlKeyType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Ews\EnumType\EwsContactUrlKeyType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Ews\StructType\EwsContactUrlDictionaryEntryType
     */
    public function setName($name = null)
    {
        $this->Name = $name;
        return $this;
    }
    /**
     * Get Address value
     * @return string|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param string $address
     * @return \Ews\StructType\EwsContactUrlDictionaryEntryType
     */
    public function setAddress($address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsContactUrlDictionaryEntryType
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
