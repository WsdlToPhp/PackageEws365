<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for GroupMemberIdentifierType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGroupMemberIdentifierType extends AbstractStructEnumBase
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
     * Return allowed values
     * @uses self::VALUE_EXTERNAL_DIRECTORY_OBJECT_ID
     * @uses self::VALUE_LEGACY_EXCHANGE_DN
     * @uses self::VALUE_SMTP_ADDRESS
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_EXTERNAL_DIRECTORY_OBJECT_ID,
            self::VALUE_LEGACY_EXCHANGE_DN,
            self::VALUE_SMTP_ADDRESS,
        ];
    }
}
