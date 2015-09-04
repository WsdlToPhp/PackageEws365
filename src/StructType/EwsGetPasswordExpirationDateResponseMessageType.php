<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPasswordExpirationDateResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsGetPasswordExpirationDateResponseMessageType extends EwsResponseMessageType
{
    /**
     * The PasswordExpirationDate
     * @var dateTime
     */
    public $PasswordExpirationDate;
    /**
     * Constructor method for GetPasswordExpirationDateResponseMessageType
     * @uses
     * EwsGetPasswordExpirationDateResponseMessageType::setPasswordExpirationDate()
     * @param dateTime $passwordExpirationDate
     */
    public function __construct($passwordExpirationDate = null)
    {
        $this
            ->setPasswordExpirationDate($passwordExpirationDate);
    }
    /**
     * Get PasswordExpirationDate value
     * @return dateTime|null
     */
    public function getPasswordExpirationDate()
    {
        return $this->PasswordExpirationDate;
    }
    /**
     * Set PasswordExpirationDate value
     * @param dateTime $passwordExpirationDate
     * @return \Ews\StructType\EwsGetPasswordExpirationDateResponseMessageType
     */
    public function setPasswordExpirationDate($passwordExpirationDate = null)
    {
        $this->PasswordExpirationDate = $passwordExpirationDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetPasswordExpirationDateResponseMessageType
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
