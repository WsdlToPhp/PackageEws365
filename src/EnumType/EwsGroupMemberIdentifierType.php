<?php

namespace Ews\EnumType;

/**
 * This class stands for GroupMemberIdentifierType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsGroupMemberIdentifierType
{
    /**
     * Constant for value 'ExternalDirectoryObjectId'
     * @return string 'ExternalDirectoryObjectId'
     */
    const VALUE_EXTERNALDIRECTORYOBJECTID = 'ExternalDirectoryObjectId';
    /**
     * Constant for value 'LegacyExchangeDN'
     * @return string 'LegacyExchangeDN'
     */
    const VALUE_LEGACYEXCHANGEDN = 'LegacyExchangeDN';
    /**
     * Constant for value 'SmtpAddress'
     * @return string 'SmtpAddress'
     */
    const VALUE_SMTPADDRESS = 'SmtpAddress';
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
     * @uses self::VALUE_EXTERNALDIRECTORYOBJECTID
     * @uses self::VALUE_LEGACYEXCHANGEDN
     * @uses self::VALUE_SMTPADDRESS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_EXTERNALDIRECTORYOBJECTID,
            self::VALUE_LEGACYEXCHANGEDN,
            self::VALUE_SMTPADDRESS,
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
