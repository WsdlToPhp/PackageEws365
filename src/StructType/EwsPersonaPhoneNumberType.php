<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PersonaPhoneNumberType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsPersonaPhoneNumberType extends AbstractStructBase
{
    /**
     * The Number
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Number;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Type;
    /**
     * Constructor method for PersonaPhoneNumberType
     * @uses EwsPersonaPhoneNumberType::setNumber()
     * @uses EwsPersonaPhoneNumberType::setType()
     * @param string $number
     * @param string $type
     */
    public function __construct($number = null, $type = null)
    {
        $this
            ->setNumber($number)
            ->setType($type);
    }
    /**
     * Get Number value
     * @return string
     */
    public function getNumber()
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param string $number
     * @return \Ews\StructType\EwsPersonaPhoneNumberType
     */
    public function setNumber($number = null)
    {
        $this->Number = $number;
        return $this;
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
     * @param string $type
     * @return \Ews\StructType\EwsPersonaPhoneNumberType
     */
    public function setType($type = null)
    {
        $this->Type = $type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsPersonaPhoneNumberType
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
