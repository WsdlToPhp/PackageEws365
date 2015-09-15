<?php

namespace Ews\EnumType;

/**
 * This class stands for UnifiedGroupIdentityType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUnifiedGroupIdentityType
{
    /**
     * Constant for value 'SmtpAddress'
     * @return string 'SmtpAddress'
     */
    const VALUE_SMTPADDRESS = 'SmtpAddress';
    /**
     * Constant for value 'LegacyDn'
     * @return string 'LegacyDn'
     */
    const VALUE_LEGACYDN = 'LegacyDn';
    /**
     * Constant for value 'ExternalDirectoryObjectId'
     * @return string 'ExternalDirectoryObjectId'
     */
    const VALUE_EXTERNALDIRECTORYOBJECTID = 'ExternalDirectoryObjectId';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_SMTPADDRESS
     * @uses self::VALUE_LEGACYDN
     * @uses self::VALUE_EXTERNALDIRECTORYOBJECTID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SMTPADDRESS,
            self::VALUE_LEGACYDN,
            self::VALUE_EXTERNALDIRECTORYOBJECTID,
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
