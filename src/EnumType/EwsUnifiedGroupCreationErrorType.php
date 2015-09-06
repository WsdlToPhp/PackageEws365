<?php

namespace Ews\EnumType;

/**
 * This class stands for UnifiedGroupCreationErrorType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUnifiedGroupCreationErrorType
{
    /**
     * Constant for value 'NoError'
     * @return string 'NoError'
     */
    const VALUE_NOERROR = 'NoError';
    /**
     * Constant for value 'FailedCreate'
     * @return string 'FailedCreate'
     */
    const VALUE_FAILEDCREATE = 'FailedCreate';
    /**
     * Constant for value 'FailedMailboxProvision'
     * @return string 'FailedMailboxProvision'
     */
    const VALUE_FAILEDMAILBOXPROVISION = 'FailedMailboxProvision';
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
     * @uses self::VALUE_NOERROR
     * @uses self::VALUE_FAILEDCREATE
     * @uses self::VALUE_FAILEDMAILBOXPROVISION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NOERROR,
            self::VALUE_FAILEDCREATE,
            self::VALUE_FAILEDMAILBOXPROVISION,
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
