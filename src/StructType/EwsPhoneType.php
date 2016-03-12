<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PhoneType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPhoneType extends AbstractStructBase
{
    /**
     * The OriginalPhoneString
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OriginalPhoneString;
    /**
     * The PhoneString
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PhoneString;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * Constructor method for PhoneType
     * @uses EwsPhoneType::setOriginalPhoneString()
     * @uses EwsPhoneType::setPhoneString()
     * @uses EwsPhoneType::setType()
     * @param string $originalPhoneString
     * @param string $phoneString
     * @param string $type
     */
    public function __construct($originalPhoneString = null, $phoneString = null, $type = null)
    {
        $this
            ->setOriginalPhoneString($originalPhoneString)
            ->setPhoneString($phoneString)
            ->setType($type);
    }
    /**
     * Get OriginalPhoneString value
     * @return string|null
     */
    public function getOriginalPhoneString()
    {
        return $this->OriginalPhoneString;
    }
    /**
     * Set OriginalPhoneString value
     * @param string $originalPhoneString
     * @return \Ews\StructType\EwsPhoneType
     */
    public function setOriginalPhoneString($originalPhoneString = null)
    {
        // validation for constraint: string
        if (!is_null($originalPhoneString) && !is_string($originalPhoneString)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($originalPhoneString)), __LINE__);
        }
        $this->OriginalPhoneString = $originalPhoneString;
        return $this;
    }
    /**
     * Get PhoneString value
     * @return string|null
     */
    public function getPhoneString()
    {
        return $this->PhoneString;
    }
    /**
     * Set PhoneString value
     * @param string $phoneString
     * @return \Ews\StructType\EwsPhoneType
     */
    public function setPhoneString($phoneString = null)
    {
        // validation for constraint: string
        if (!is_null($phoneString) && !is_string($phoneString)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phoneString)), __LINE__);
        }
        $this->PhoneString = $phoneString;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Ews\StructType\EwsPhoneType
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsPhoneType
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
