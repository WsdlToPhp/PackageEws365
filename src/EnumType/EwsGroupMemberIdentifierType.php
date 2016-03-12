<?php

namespace Ews\EnumType;

/**
 * This class stands for GroupMemberIdentifierType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGroupMemberIdentifierType
{
    /**
     * Constant for value 'ExternalDirectoryObjectId'
     * @return string 'ExternalDirectoryObjectId'
     */
    const VALUE_EXTERNAL_DIRECTORY_OBJECT_ID = 'ExternalDirectoryObjectId';
    /**
     * Constant for value 'LegacyExchangeDN'
     * @return string 'LegacyExchangeDN'
     */
    const VALUE_LEGACY_EXCHANGE_DN = 'LegacyExchangeDN';
    /**
     * Constant for value 'SmtpAddress'
     * @return string 'SmtpAddress'
     */
    const VALUE_SMTP_ADDRESS = 'SmtpAddress';
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
     * @uses self::VALUE_EXTERNAL_DIRECTORY_OBJECT_ID
     * @uses self::VALUE_LEGACY_EXCHANGE_DN
     * @uses self::VALUE_SMTP_ADDRESS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_EXTERNAL_DIRECTORY_OBJECT_ID,
            self::VALUE_LEGACY_EXCHANGE_DN,
            self::VALUE_SMTP_ADDRESS,
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
