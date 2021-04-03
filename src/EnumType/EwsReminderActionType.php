<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ReminderActionType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsReminderActionType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Dismiss'
     * @return string 'Dismiss'
     */
    const VALUE_DISMISS = 'Dismiss';
    /**
     * Constant for value 'Snooze'
     * @return string 'Snooze'
     */
    const VALUE_SNOOZE = 'Snooze';
    /**
     * Return allowed values
     * @uses self::VALUE_DISMISS
     * @uses self::VALUE_SNOOZE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_DISMISS,
            self::VALUE_SNOOZE,
        ];
    }
}
