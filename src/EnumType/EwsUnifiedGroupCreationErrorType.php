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
    const VALUE_NO_ERROR = 'NoError';
    /**
     * Constant for value 'FailedCreate'
     * @return string 'FailedCreate'
     */
    const VALUE_FAILED_CREATE = 'FailedCreate';
    /**
     * Constant for value 'FailedMailboxProvision'
     * @return string 'FailedMailboxProvision'
     */
    const VALUE_FAILED_MAILBOX_PROVISION = 'FailedMailboxProvision';
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
     * @uses self::VALUE_NO_ERROR
     * @uses self::VALUE_FAILED_CREATE
     * @uses self::VALUE_FAILED_MAILBOX_PROVISION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NO_ERROR,
            self::VALUE_FAILED_CREATE,
            self::VALUE_FAILED_MAILBOX_PROVISION,
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
