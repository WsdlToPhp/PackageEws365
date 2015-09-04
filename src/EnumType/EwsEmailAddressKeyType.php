<?php

namespace Ews\EnumType;

/**
 * This class stands for EmailAddressKeyType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsEmailAddressKeyType
{
    /**
     * Constant for value 'EmailAddress1'
     * @return string 'EmailAddress1'
     */
    const VALUE_EMAILADDRESS1 = 'EmailAddress1';
    /**
     * Constant for value 'EmailAddress2'
     * @return string 'EmailAddress2'
     */
    const VALUE_EMAILADDRESS2 = 'EmailAddress2';
    /**
     * Constant for value 'EmailAddress3'
     * @return string 'EmailAddress3'
     */
    const VALUE_EMAILADDRESS3 = 'EmailAddress3';
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
     * @uses self::VALUE_EMAILADDRESS1
     * @uses self::VALUE_EMAILADDRESS2
     * @uses self::VALUE_EMAILADDRESS3
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_EMAILADDRESS1,
            self::VALUE_EMAILADDRESS2,
            self::VALUE_EMAILADDRESS3,
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
