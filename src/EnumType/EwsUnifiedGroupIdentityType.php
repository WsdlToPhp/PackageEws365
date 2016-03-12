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
    const VALUE_SMTP_ADDRESS = 'SmtpAddress';
    /**
     * Constant for value 'LegacyDn'
     * @return string 'LegacyDn'
     */
    const VALUE_LEGACY_DN = 'LegacyDn';
    /**
     * Constant for value 'ExternalDirectoryObjectId'
     * @return string 'ExternalDirectoryObjectId'
     */
    const VALUE_EXTERNAL_DIRECTORY_OBJECT_ID = 'ExternalDirectoryObjectId';
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
     * @uses self::VALUE_SMTP_ADDRESS
     * @uses self::VALUE_LEGACY_DN
     * @uses self::VALUE_EXTERNAL_DIRECTORY_OBJECT_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SMTP_ADDRESS,
            self::VALUE_LEGACY_DN,
            self::VALUE_EXTERNAL_DIRECTORY_OBJECT_ID,
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
