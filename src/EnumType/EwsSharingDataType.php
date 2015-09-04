<?php

namespace Ews\EnumType;

/**
 * This class stands for SharingDataType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsSharingDataType
{
    /**
     * Constant for value 'Calendar'
     * @return string 'Calendar'
     */
    const VALUE_CALENDAR = 'Calendar';
    /**
     * Constant for value 'Contacts'
     * @return string 'Contacts'
     */
    const VALUE_CONTACTS = 'Contacts';
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
     * @uses self::VALUE_CALENDAR
     * @uses self::VALUE_CONTACTS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CALENDAR,
            self::VALUE_CONTACTS,
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
