<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for UnifiedGroupIdentityType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUnifiedGroupIdentityType extends AbstractStructEnumBase
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
     * Return allowed values
     * @uses self::VALUE_SMTP_ADDRESS
     * @uses self::VALUE_LEGACY_DN
     * @uses self::VALUE_EXTERNAL_DIRECTORY_OBJECT_ID
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SMTP_ADDRESS,
            self::VALUE_LEGACY_DN,
            self::VALUE_EXTERNAL_DIRECTORY_OBJECT_ID,
        ];
    }
}
