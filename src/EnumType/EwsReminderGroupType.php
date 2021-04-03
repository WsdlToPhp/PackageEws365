<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ReminderGroupType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsReminderGroupType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Calendar'
     * @return string 'Calendar'
     */
    const VALUE_CALENDAR = 'Calendar';
    /**
     * Constant for value 'Task'
     * @return string 'Task'
     */
    const VALUE_TASK = 'Task';
    /**
     * Return allowed values
     * @uses self::VALUE_CALENDAR
     * @uses self::VALUE_TASK
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CALENDAR,
            self::VALUE_TASK,
        ];
    }
}
