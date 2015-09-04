<?php

namespace Ews\EnumType;

/**
 * This class stands for LocationSourceType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsLocationSourceType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'LocationServices'
     * @return string 'LocationServices'
     */
    const VALUE_LOCATIONSERVICES = 'LocationServices';
    /**
     * Constant for value 'PhonebookServices'
     * @return string 'PhonebookServices'
     */
    const VALUE_PHONEBOOKSERVICES = 'PhonebookServices';
    /**
     * Constant for value 'Device'
     * @return string 'Device'
     */
    const VALUE_DEVICE = 'Device';
    /**
     * Constant for value 'Contact'
     * @return string 'Contact'
     */
    const VALUE_CONTACT = 'Contact';
    /**
     * Constant for value 'Resource'
     * @return string 'Resource'
     */
    const VALUE_RESOURCE = 'Resource';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_LOCATIONSERVICES
     * @uses self::VALUE_PHONEBOOKSERVICES
     * @uses self::VALUE_DEVICE
     * @uses self::VALUE_CONTACT
     * @uses self::VALUE_RESOURCE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_LOCATIONSERVICES,
            self::VALUE_PHONEBOOKSERVICES,
            self::VALUE_DEVICE,
            self::VALUE_CONTACT,
            self::VALUE_RESOURCE,
        );
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
