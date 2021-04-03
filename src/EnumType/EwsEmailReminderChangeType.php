<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for EmailReminderChangeType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsEmailReminderChangeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Added'
     * @return string 'Added'
     */
    const VALUE_ADDED = 'Added';
    /**
     * Constant for value 'Override'
     * @return string 'Override'
     */
    const VALUE_OVERRIDE = 'Override';
    /**
     * Constant for value 'Deleted'
     * @return string 'Deleted'
     */
    const VALUE_DELETED = 'Deleted';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_ADDED
     * @uses self::VALUE_OVERRIDE
     * @uses self::VALUE_DELETED
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NONE,
            self::VALUE_ADDED,
            self::VALUE_OVERRIDE,
            self::VALUE_DELETED,
        ];
    }
}
