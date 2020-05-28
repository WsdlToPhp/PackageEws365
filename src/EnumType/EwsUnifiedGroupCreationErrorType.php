<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for UnifiedGroupCreationErrorType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUnifiedGroupCreationErrorType extends AbstractStructEnumBase
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
}
