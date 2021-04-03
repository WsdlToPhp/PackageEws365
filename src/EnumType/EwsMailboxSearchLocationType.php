<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for MailboxSearchLocationType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMailboxSearchLocationType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'PrimaryOnly'
     * @return string 'PrimaryOnly'
     */
    const VALUE_PRIMARY_ONLY = 'PrimaryOnly';
    /**
     * Constant for value 'ArchiveOnly'
     * @return string 'ArchiveOnly'
     */
    const VALUE_ARCHIVE_ONLY = 'ArchiveOnly';
    /**
     * Constant for value 'All'
     * @return string 'All'
     */
    const VALUE_ALL = 'All';
    /**
     * Return allowed values
     * @uses self::VALUE_PRIMARY_ONLY
     * @uses self::VALUE_ARCHIVE_ONLY
     * @uses self::VALUE_ALL
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PRIMARY_ONLY,
            self::VALUE_ARCHIVE_ONLY,
            self::VALUE_ALL,
        ];
    }
}
